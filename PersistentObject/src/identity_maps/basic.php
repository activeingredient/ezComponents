<?php
/**
 * File containing the ezcPersistentSession class.
 *
 * @package PersistentObject
 * @version //autogen//
 * @copyright Copyright (C) 2005-2009 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */
/**
 * Default identity map used in ezcPersistentSessionIdentityDecorator.
 *
 * An instance of this class is used in {@link ezcPersistentSessionIdentityDecorator}
 * and performs the internal work of storing and retrieving object identities.
 * 
 * @package PersistentObject
 * @version //autogen//
 */
class ezcPersistentBasicIdentityMap implements ezcPersistentIdentityMap
{
    /**
     * Object identities.
     *
     * Structure:
     *
     * <code>
     * <?php
     * array(
     *     '<className>' => array(
     *         '<id1>' => ezcPersistentIdentity(),
     *         '<id2>' => ezcPersistentIdentity(),
     *         // ...
     *     ),
     *     '<anotherClassName>' => array(
     *         '<idA>' => ezcPersistentIdentity(),
     *         '<idB>' => ezcPersistentIdentity(),
     *         // ...
     *     ),
     *     // ...
     * );
     * ?>
     * </code>
     * 
     * @var array(string=>array(mixed=>ezcPersistentIdentity))
     */
    protected $identities = array();

    /**
     * Definition manager used by {@link ezcPersistentSession}.
     * 
     * @var ezcPersistentDefinitionManager
     */
    protected $definitionManager;

    /**
     * Creates a new identity map.
     *
     * Creates a new identity map, which makes use of the given
     * $definitionManager to determine object identities and relations.
     * 
     * @param ezcPersistentDefinitionManager $definitionManager 
     */
    public function __construct( ezcPersistentDefinitionManager $definitionManager )
    {
        $this->definitionManager = $definitionManager;
    }

    /**
     * Sets the identity of $object.
     *
     * Records the identity for $object. If an identity is already recorded for
     * this object, it is silently replaced. The using object must take care to
     * check for already recorded identity itself.
     *
     * @param ezcPersistentObject $object 
     */
    public function setIdentity( $object )
    {
        $class = get_class( $object );
        $def   = $this->definitionManager->fetchDefinition( $class );
        $state = $object->getState();
        $id    = $state[$def->idProperty->propertyName];
        
        if ( !isset( $this->identities[$class] ) )
        {
            $this->identities[$class] = array();
        }

        $newIdentity = new ezcPersistentIdentity( $object );
        if ( isset( $this->identities[$class][$id] ) )
        {
            $this->replaceIdentityReferences(
                $this->identities[$class][$id],
                $newIdentity
            );
        }

        $this->identities[$class][$id] = $newIdentity;
    }

    /**
     * Returns the identity of the object with $class and $id.
     *
     * Returns the object of $class with $id, if its identity has already been
     * recorded. Otherwise, null is returned.
     * 
     * @param string $class 
     * @param mixed $id 
     * @return object|null
     */
    public function getIdentity( $class, $id )
    {
        if ( !isset( $this->identities[$class] ) )
        {
            return null;
        }
        if ( !isset( $this->identities[$class][$id] ) )
        {
            return null;
        }
        return $this->identities[$class][$id]->object;
    }

    /**
     * Removes the identity identitfied by $class and $id from the map. 
     *
     * Removes the object identified by $class and $id from the map and deletes
     * all references of it. If the identity does not exist, the call is
     * silently ignored.
     * 
     * @param string $class 
     * @param mixed $id 
     */
    public function removeIdentity( $class, $id )
    {
        if ( isset( $this->identities[$class][$id] ) )
        {
            // First remove all references to this object
            $this->removeIdentityReferences( $this->identities[$class][$id] );
            unset( $this->identities[$class][$id] );
        }
    }

    /**
     * Stores a set of $relatedObjects to $sourceObject.
     *
     * Stores the given set of $relatedObjects for $sourceObject. If
     * $relationName is specified, $relatedObjects is not stored as the main
     * related object set, but as a named subset.
     *
     * In case a set of related objects has already been recorded for
     * $sourceObject and the class of the objects in $relatedObjects (and
     * optionally $relationName), an exception is thrown.
     *
     * If for any of the $relatedObjects no identity is recorded, yet, it will
     * be recorded. Otherwise, the object will be replaced by its existing
     * identity. Except if $replaceIdentities is set to true: In this case a
     * new identity will be recorded for every object in $relatedObjects.
     * 
     * @param ezcPersistentObject $sourceObject
     * @param array(ezcPersistentObject) $relatedObjects 
     * @param string $relatedClass 
     * @param string $relationName 
     * @param bool $replaceIdentities
     *
     * @throws ezcPersistentIdentityRelatedObjectsInconsistentException
     *         if an object in $relatedObjects is not of $relatedClass.
     *
     */
    public function setRelatedObjects( $sourceObject, array $relatedObjects, $relatedClass, $relationName = null, $replaceIdentities = false )
    {
        $srcClass = get_class( $sourceObject );
        $srcDef   = $this->definitionManager->fetchDefinition( $srcClass );
        $srcState = $sourceObject->getState();
        $srcId    = $srcState[$srcDef->idProperty->propertyName];

        // Sanity checks

        if ( !isset( $srcDef->relations[$relatedClass] ) )
        {
            throw new ezcPersistentRelationNotFoundException(
                $srcClass,
                $relatedClass,
                $relationName
            );
        }

        if ( !isset( $this->identities[$srcClass][$srcId] ) )
        {
            throw new ezcPersistentIdentityMissingException(
                $srcClass,
                $srcId
            );
        }
        
        $relDef = $this->definitionManager->fetchDefinition( $relatedClass );

        $relationStoreName = $relatedClass
            . ( $relationName !== null ? "__{$relationName}" : '' );

        // Remove references before replacing a set
        if ( isset( $this->identities[$srcClass][$srcId]->relatedObjects[$relationStoreName] ) )
        {
            $this->removeReferences( $this->identities[$srcClass][$srcId]->relatedObjects[$relationStoreName] );
        }

        $relStore = new ArrayObject();
        foreach ( $relatedObjects as $relObj )
        {
            if ( !( $relObj instanceof $relatedClass ) )
            {
                // Cleanup already set references before bailing out
                $this->removeReferences( $relStore );
                throw new ezcPersistentIdentityRelatedObjectsInconsistentException(
                    $srcClass, $srcId, $relatedClass, get_class( $relObj )
                );
            }

            $relState = $relObj->getState();
            $relId    = $relState[$relDef->idProperty->propertyName];

            // Check and replace identities
            if ( !isset( $this->identities[$relatedClass][$relId] ) )
            {
                $this->identities[$relatedClass][$relId] = new ezcPersistentIdentity(
                    $relObj
                );
            }
            else if ( $replaceIdentities )
            {
                // Replace identities on re-fetch
                $newIdentity = new ezcPersistentIdentity( $relObj );
                $this->replaceIdentityReferences(
                    $this->identities[$relatedClass][$relId],
                    $newIdentity
                );
                $this->identities[$relatedClass][$relId] = $newIdentity;
            }
            else
            {
                $relObj = $this->identities[$relatedClass][$relId]->object;
            }

            $relStore[$relId] = $relObj;

            // Store reference
            $this->identities[$relatedClass][$relId]->references->attach( $relStore );
        }
        
        $this->identities[$srcClass][$srcId]->relatedObjects[$relationStoreName] = $relStore;

        // Return to avoid another call to getRelatedObjcts()
        return $relStore->getArrayCopy();
    }

    /**
     * Stores a named set of $relatedObjects to $sourceObject.
     *
     * Stores the given set of $relatedObjects with name $setName for
     * $sourceObject.
     *
     * In case a set of related objects has already been recorded for
     * $sourceObject with $setName, this set is silently overwritten.
     *
     * If for any of the $relatedObjects no identity is recorded, yet, it will
     * be recorded. Otherwise, the object will be replaced by its existing
     * identity. Except if $replaceIdentities is set to true: In this case a
     * new identity will be recorded for every object in $relatedObjects.
     *
     * The method returns the created set of related objects to avoid another
     * call to {@link getRelatedObjectSet()} by the using objct.
     * 
     * @param ezcPersistentObject $sourceObject
     * @param array(ezcPersistentObject) $relatedObjects 
     * @param string $setName 
     * @param bool $replaceIdentities
     * @return array(ezcPersistentObject)
     *
     * @throws ezcPersistentIdentityRelatedObjectsInconsistentException
     *         if an object in $relatedObjects is not of $relatedClass.
     */
    public function setRelatedObjectSet( $sourceObject, array $relatedObjects, $setName, $replaceIdentities = false )
    {
        $srcClass = get_class( $sourceObject );
        $srcDef   = $this->definitionManager->fetchDefinition( $srcClass );
        $srcState = $sourceObject->getState();
        $srcId    = $srcState[$srcDef->idProperty->propertyName];

        // Sanity checks

        if ( !isset( $this->identities[$srcClass][$srcId] ) )
        {
            throw new ezcPersistentIdentityMissingException(
                $srcClass,
                $srcId
            );
        }

        $identity = $this->identities[$srcClass][$srcId];

        // Remove references before replacing a set
        if ( isset( $identity->namedRelatedObjectSets[$setName] ) )
        {
            $this->removeReferences( $identity->namedRelatedObjectSets[$setName] );
        }

        $relDefs  = array();
        $relStore = new ArrayObject();

        foreach ( $relatedObjects as $relObj )
        {
            $relClass = get_class( $relObj );
            if ( !isset( $relDefs[$relClass] ) )
            {
                $relDefs[$relClass] = $this->definitionManager->fetchDefinition( $relClass );
            }

            $relState = $relObj->getState();
            $relId    = $relState[$relDefs[$relClass]->idProperty->propertyName];

            // Check and replace identities
            if ( !isset( $this->identities[$relClass][$relId] ) )
            {
                $this->identities[$relClass][$relId] = new ezcPersistentIdentity(
                    $relObj
                );
            }
            else if ( $replaceIdentities )
            {
                // Replace identities on re-fetch
                $newIdentity = new ezcPersistentIdentity( $relObj );
                $this->replaceIdentityReferences(
                    $this->identities[$relClass][$relId],
                    $newIdentity
                );
                $this->identities[$relClass][$relId] = $newIdentity;
            }
            else
            {
                $relObj = $this->identities[$relClass][$relId]->object;
            }

            $relStore[$relId] = $relObj;

            // Store reference
            $this->identities[$relClass][$relId]->references->attach( $relStore );
        }
        
        $identity->namedRelatedObjectSets[$setName] = $relStore;
        return $relStore->getArrayCopy();
    }

    /**
     * Appends a new $relatedObject to the relation set of $sourceObject.
     *
     * In case no relations have been recorded for $object, yet, the call is
     * ignored and related objects are newly fetched whenever {@link
     * getRelatedObjects()} is called.
     *
     * Note: All named sets for $relatedObject are automatically invalidated,
     * if this method is called, to avoid inconsistencies.
     *
     * @param ezcPersistentObject $sourceObject 
     * @param ezcPersistentObject $relatedObject 
     * @param string $relationName
     */
    public function addRelatedObject( $sourceObject, $relatedObject, $relationName = null )
    {
        $srcClass = get_class( $sourceObject );
        $relClass = get_class( $relatedObject );

        $srcDef   = $this->definitionManager->fetchDefinition( $srcClass );
        $relDef   = $this->definitionManager->fetchDefinition( $relClass );

        if ( !isset( $srcDef->relations[$relClass] ) )
        {
            throw new ezcPersistentRelationNotFoundException(
                $srcClass,
                $relClass
            );
        }
        if ( $relationName !== null && !isset( $srcDef->relations[$relClass] ) )
        {
            throw new ezcPersistentRelationNotFoundException(
                $srcClass,
                $relClass,
                $relationName
            );
        }

        $srcState = $sourceObject->getState();
        $srcId    = $srcState[$srcDef->idProperty->propertyName];

        if ( !isset( $this->identities[$srcClass][$srcId] ) )
        {
            throw new ezcPersistentIdentityMissingException(
                $srcClass,
                $srcId
            );
        }

        $relState = $relatedObject->getState();
        $relId    = $relState[$relDef->idProperty->propertyName];

        if ( !isset( $this->identities[$relClass][$relId] ) )
        {
            throw new ezcPersistentIdentityMissingException(
                $relClass,
                $relId
            );
        }

        $relationStoreName = $relClass
            . ( $relationName !== null ? "__{$relationName}" : '' );

        if ( !isset( $this->identities[$srcClass][$srcId]->relatedObjects[$relationStoreName] ) )
        {
            // Ignore call, since related objects for $relClass have not been stored, yet
            return null;
        }

        if ( isset( $this->identities[$srcClass][$srcId]->relatedObjects[$relationStoreName][$relId] ) )
        {
            throw new ezcPersistentIdentityRelatedObjectsAlreadyExistException(
                $srcClass, $srcId, $relClass
            );
        }

        $this->identities[$srcClass][$srcId]->relatedObjects[$relationStoreName][$relId] = $relatedObject;

        // Store new reference
        $this->identities[$relClass][$relId]->references->attach(
            $this->identities[$srcClass][$srcId]->relatedObjects[$relationStoreName]
        );
        
        // Invalidate all named sets, since they might be inconsistent now
        $this->removeAllReferences( 
            $this->identities[$srcClass][$srcId]->namedRelatedObjectSets
        );
        $this->identities[$srcClass][$srcId]->namedRelatedObjectSets = array();
    }

    /**
     * Removes a $relatedObject from the relation set of $sourceObject.
     *
     * Removes the $relatedObject from all recorded relation sets for
     * $sourceObject. This also includes named sets.
     *
     * Note: In contrast to {@link addRelatedObject()} a call to this method
     * does not invalidate all named related sets to $sourceObject.
     * 
     * @param ezcPersistentObject $sourceObject 
     * @param ezcPersistentObject $relatedObject 
     * @param string $relationName
     */
    public function removeRelatedObject( $sourceObject, $relatedObject, $relationName = null )
    {
        $srcClass = get_class( $sourceObject );
        $relClass = get_class( $relatedObject );

        $srcDef   = $this->definitionManager->fetchDefinition( $srcClass );
        $relDef   = $this->definitionManager->fetchDefinition( $relClass );

        $srcState = $sourceObject->getState();
        $srcId    = $srcState[$srcDef->idProperty->propertyName];

        $relState = $relatedObject->getState();
        $relId    = $relState[$relDef->idProperty->propertyName];

        if ( !isset( $this->identities[$srcClass][$srcId] ) )
        {
            throw new ezcPersistentIdentityMissingException(
                $srcClass,
                $srcId
            );
        }
        if ( !isset( $this->identities[$relClass][$relId] ) )
        {
            // Ignore call
            return null;
        }

        $relationStoreName = $relClass
            . ( $relationName !== null ? "__{$relationName}" : '' );

        $srcIdentity = $this->identities[$srcClass][$srcId];
        $relIdentity = $this->identities[$relClass][$relId];

        if ( isset( $srcIdentity->relatedObjects[$relationStoreName] ) )
        {
            unset( $srcIdentity->relatedObjects[$relationStoreName][$relId] );
            $relIdentity->references->detach( $srcIdentity->relatedObjects[$relationStoreName] );
        }

        foreach ( $srcIdentity->namedRelatedObjectSets as $setName => $rels )
        {
            if ( isset( $rels[$relId] ) && $rels[$relId] instanceof $relClass )
            {
                unset( $srcIdentity->namedRelatedObjectSets[$setName][$relId] );
                $relIdentity->references->detach(
                    $srcIdentity->namedRelatedObjectSets[$setName]
                );
            }
        }
    }

    /**
     * Returns the set of related objects of $relatedClass for $sourceObject.
     *
     * Returns the set of related objects of $relatedClass for $sourceObject.
     * This might also be an empty set (empty array returned). In case no
     * related objects are recorded, yet, null is returned.
     * 
     * @param ezcPersistentObject $sourceObject 
     * @param string $relatedClass 
     * @param string $relationName
     */
    public function getRelatedObjects( $sourceObject, $relatedClass, $relationName = null )
    {
        $srcClass = get_class( $sourceObject );
        $srcDef   = $this->definitionManager->fetchDefinition( $srcClass );
        $srcState = $sourceObject->getState();
        $srcId    = $srcState[$srcDef->idProperty->propertyName];

        if ( !isset( $srcDef->relations[$relatedClass] ) )
        {
            throw new ezcPersistentRelationNotFoundException(
                $srcClass,
                $relatedClass,
                $relationName
            );
        }

        $relationStoreName = $relatedClass
            . ( $relationName !== null ? "__{$relationName}" : '' );

        // Sanity checks

        if ( !isset( $this->identities[$srcClass][$srcId] ) )
        {
            // No object identity
            return null;
        }

        $identity = $this->identities[$srcClass][$srcId];

        if ( isset( $identity->relatedObjects[$relationStoreName] ) )
        {
            // Return a real array here, not the ArrayObject stored
            return $identity->relatedObjects[$relationStoreName]->getArrayCopy();
        }
        return null;
    }

    /**
     * Returns a named set of related objects for $sourceObject.
     *
     * Returns the named set of related objects for $sourceObject identified by
     * $setName. This might also be an empty set (empty array returned). In
     * case no related objects with this name are recorded, yet, null is
     * returned.
     * 
     * @param ezcPersistentObject $sourceObject 
     * @param string $setName 
     */
    public function getRelatedObjectSet( $sourceObject, $setName )
    {
        $srcClass = get_class( $sourceObject );
        $srcDef   = $this->definitionManager->fetchDefinition( $srcClass );
        $srcState = $sourceObject->getState();
        $srcId    = $srcState[$srcDef->idProperty->propertyName];

        if ( !isset( $this->identities[$srcClass][$srcId] ) )
        {
            return null;
        }
        $identity = $this->identities[$srcClass][$srcId];

        if ( isset( $identity->namedRelatedObjectSets[$setName] ) )
        {
            return $identity->namedRelatedObjectSets[$setName]->getArrayCopy();
        }
        return null;
    }

    /**
     * Resets the complete identity map.
     *
     * Removes all stored identities from the map.
     */
    public function reset()
    {
        $this->identities = array();
    }

    /**
     * Removes all references to all $sets from all objects in $sets.
     *
     * Removes all references to all object $sets from all objects contained in
     * each of the $sets.
     * 
     * @param array $sets 
     * @see removeReferences()
     */
    protected function removeAllReferences( array $sets )
    {
        foreach ( $sets as $set )
        {
            $this->removeReferences( $set );
        }
    }

    /**
     * Removes all references to $set from the objects in $set.
     *
     * Maintains the {ezcPersistentIdentity::$references} attribute by removing
     * all refereneces to $set from all objects identities contained in $set.
     *
     * @param ArrayObject $set 
     */
    protected function removeReferences( ArrayObject $set )
    {
        foreach ( $set as $obj )
        {
            $class = get_class( $obj );
            $def   = $this->definitionManager->fetchDefinition( $class );
            $state = $obj->getState();
            $id    = $state[$def->idProperty->propertyName];
            
            if ( $this->identities[$class][$id]->references->contains( $set ) )
            {
                $this->identities[$class][$id]->references->detach( $set );
            }
        }
    }

    protected function replaceIdentityReferences( $oldIdentity, $newIdentity )
    {
        foreach( $oldIdentity->references as $refList )
        {
            $replaceIds = array();
            // Needs iteration here, to determine key
            foreach ( $refList->getIterator() as $refId => $refItem )
            {
                if ( $refItem === $oldIdentity->object )
                {
                    $replaceIds[] = $refId;
                }
            }
            foreach ( $replaceIds as $replaceId )
            {
                // Replace object in related sets
                $refList[$replaceId] = $newIdentity->object;
            }
        }
    }

    protected function removeIdentityReferences( $identity )
    {
        foreach( $identity->references as $refList )
        {
            $removeIds = array();
            // Needs iteration here, to determine key
            foreach ( $refList->getIterator() as $refId => $refItem )
            {
                if ( $refItem === $identity->object )
                {
                    $removeIds[] = $refId;
                }
            }
            foreach ( $removeIds as $removeId )
            {
                // Remove object from related set
                unset( $refList[$removeId] );
            }
        }
    }
}

?>
