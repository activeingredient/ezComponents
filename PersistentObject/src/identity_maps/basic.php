<?php
/**
 * File containing the ezcPersistentSession class.
 *
 * @package PersistentObject
 * @version //autogen//
 * @copyright Copyright (C) 2005-2009 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */
/**
 * Default identity map used in ezcPersistentIdentitySession.
 *
 * An instance of this class is used in {@link ezcPersistentIdentitySession}
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

        $this->identities[$class][$id] = new ezcPersistentIdentity( $object );
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
     * If $relatedObjects are to be added, for which no identity has been
     * recorded, yet, an exception is thrown.
     * 
     * @param ezcPersistentObject $sourceObject
     * @param array(ezcPersistentObject) $relatedObjects 
     * @param string $relatedClass 
     * @param string $relationName 
     *
     * @throws ezcPersistentIdentityRelatedObjectsAlreadyExistException
     *         if the set of related objects already exists.
     * @throws ezcPersistentIdentityMissingException
     *         if no identity exists for $sourceObject or an object in
     *         $relatedObjects.
     * @throws ezcPersistentIdentityRelatedObjectsInconsistentException
     *         if an object in $relatedObjects is not of $relatedClass.
     *
    */
    public function setRelatedObjects( $sourceObject, array $relatedObjects, $relatedClass )
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

        $relStore = new ArrayObject();
        foreach ( $relatedObjects as $relObj )
        {
            if ( !( $relObj instanceof $relatedClass ) )
            {
                throw new ezcPersistentIdentityRelatedObjectsInconsistentException(
                    $srcClass, $srcId, $relatedClass, get_class( $relObj )
                );
            }

            $relState = $relObj->getState();
            $relId    = $relState[$relDef->idProperty->propertyName];

            if ( !isset( $this->identities[$relatedClass][$relId] ) )
            {
                throw new ezcPersistentIdentityMissingException(
                    $relatedClass,
                    $relId
                );
            }

            $relStore[$relId] = $relObj;

            // Store reference
            $this->identities[$relatedClass][$relId]->references->attach( $relStore );
        }
        
        $this->identities[$srcClass][$srcId]->relatedObjects[$relatedClass] = $relStore;
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
     * If $relatedObjects are to be added, for which no identity has been
     * recorded, yet, an exception is thrown.
     * 
     * @param ezcPersistentObject $sourceObject
     * @param array(ezcPersistentObject) $relatedObjects 
     * @param string $setName 
     *
     * @throws ezcPersistentIdentityRelatedObjectsAlreadyExistException
     *         if the set of related objects already exists.
     * @throws ezcPersistentIdentityMissingException
     *         if no identity exists for $sourceObject or an object in
     *         $relatedObjects.
     * @throws ezcPersistentIdentityRelatedObjectsInconsistentException
     *         if an object in $relatedObjects is not of $relatedClass.
     *
    */
    public function setRelatedObjectSet( $sourceObject, array $relatedObjects, $setName )
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

            if ( !isset( $this->identities[$relClass][$relId] ) )
            {
                throw new ezcPersistentIdentityMissingException(
                    $relatedClass,
                    $relState[$relDef->idProperty->propertyName]
                );
            }
            $relStore[$relId] = $relObj;

            // Store reference
            $this->identities[$relClass][$relId]->references->attach( $relStore );
        }
        
        $identity->namedRelatedObjectSets[$setName] = $relStore;
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
     */
    public function addRelatedObject( $sourceObject, $relatedObject )
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

        if ( !isset( $this->identities[$srcClass][$srcId]->relatedObjects[$relClass] ) )
        {
            // Ignore call, since related objects for $relClass have not been stored, yet
            return null;
        }

        if ( isset( $this->identities[$srcClass][$srcId]->relatedObjects[$relClass][$relId] ) )
        {
            throw new ezcPersistentIdentityRelatedObjectsAlreadyExistException(
                $srcClass, $srcId, $relClass
            );
        }

        $this->identities[$srcClass][$srcId]->relatedObjects[$relClass][$relId] = $relatedObject;

        // Store new reference
        $this->identities[$relClass][$relId]->references->attach(
            $this->identities[$srcClass][$srcId]->relatedObjects[$relClass]
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
     */
    public function removeRelatedObject( $sourceObject, $relatedObject )
    {
        $srcClass = get_class( $sourceObject );
        $relClass = get_class( $relatedObject );

        $srcDef   = $this->definitionManager->fetchDefinition( $srcClass );
        $relDef   = $this->definitionManager->fetchDefinition( $relClass );

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
            // Ignore call
            return null;
        }
        $srcIdentity = $this->identities[$srcClass][$srcId];
        $relIdentity = $this->identities[$relClass][$relId];

        if ( isset( $srcIdentity->relatedObjects[$relClass] ) )
        {
            unset( $srcIdentity->relatedObjects[$relClass][$relId] );
            $relIdentity->references->detach( $srcIdentity->relatedObjects[$relClass] );
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
     */
    public function getRelatedObjects( $sourceObject, $relatedClass )
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
            // No object identity
            return null;
        }

        $identity = $this->identities[$srcClass][$srcId];

        if ( isset( $identity->relatedObjects[$relatedClass] ) )
        {
            // Return a real array here, not the ArrayObject stored
            return $identity->relatedObjects[$relatedClass]->getArrayCopy();
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
}

?>
