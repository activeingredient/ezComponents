<?php
/**
 * File containing the abstract ezcWebdavSimpleBackend class.
 *
 * @package Webdav
 * @version //autogentag//
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */
/**
 * Abstract base class for common backend operations.
 *
 * This base backend provides the generic handling of requests and dispatches the
 * required actions to some basic manipulation methods, which you are required
 * to implement, when extending this base class.
 *
 * This backend does not provide support for extended Webdav features, like
 * compression, or lock handling by the backend, therefore the {@link
 * getFeatures()} method is final. If you want to develop a backend which is
 * capable of manual handling those features directly extend from {@link
 * ezcWebdavBackend}.
 *
 * @version //autogentag//
 * @package Webdav
 * @mainclass
 */
abstract class ezcWebdavSimpleBackend
    extends
        ezcWebdavBackend
    implements
        ezcWebdavBackendPut,
        ezcWebdavBackendChange,
        ezcWebdavBackendMakeCollection
{
    /**
     * Create a new collection.
     *
     * Creates a new collection at the given $path.
     * 
     * @param string $path 
     * @return void
     */
    abstract protected function createCollection( $path );

    /**
     * Create a new resource.
     *
     * Creates a new resource at the given $path, optionally with the given
     * $content.
     * 
     * @param string $path 
     * @param string $content 
     * @return void
     */
    abstract protected function createResource( $path, $content = null );

    /**
     * Changes contents of a resource.
     *
     * This method is used to change the contents of the resource identified by
     * $path to the given $content.
     * 
     * @param string $path 
     * @param string $content 
     * @return void
     */
    abstract protected function setResourceContents( $path, $content );

    /**
     * Returns the content of a resource.
     *
     * Returns the content of the resource identified by $path.
     * 
     * @param string $path 
     * @return string
     */
    abstract protected function getResourceContents( $path );

    /**
     * Manually sets a property on a resource.
     *
     * Sets the given $propertyBackup for the resource identified by $path.
     * 
     * @param string $path 
     * @param ezcWebdavProperty $property
     * @return bool
     */
    abstract public function setProperty( $path, ezcWebdavProperty $property );

    /**
     * Manually removes a property from a resource.
     *
     * Removes the given $property form the resource identified by $path.
     * 
     * @param string $path 
     * @param ezcWebdavProperty $property
     * @return bool
     */
    abstract public function removeProperty( $path, ezcWebdavProperty $property );

    /**
     * Resets the property storage for a resource.
     *
     * Discardes the current {@link ezcWebdavPropertyStorage} of the resource
     * identified by $path and replaces it with the given $properties.
     * 
     * @param string $path 
     * @param ezcWebdavPropertyStorage $properties
     * @return bool
     */
    abstract public function resetProperties( $path, ezcWebdavPropertyStorage $properties );

    /**
     * Returns a property of a resource.
     * 
     * Returns the property with the given $propertyName, from the resource
     * identified by $path. You may optionally define a $namespace to receive
     * the property from.
     *
     * @param string $path 
     * @param string $propertyName 
     * @param string $namespace 
     * @return ezcWebdavProperty
     */
    abstract public function getProperty( $path, $propertyName, $namespace = 'DAV:' );

    /**
     * Returns all properties for a resource.
     * 
     * Returns all properties for the resource identified by $path as a {@link
     * ezcWebdavBasicPropertyStorage}.
     *
     * @param string $path 
     * @return ezcWebdavPropertyStorage
     */
    abstract public function getAllProperties( $path );

    /**
     * Copies resources recursively from one path to another.
     *
     * Copies the resourced identified by $fromPath recursively to $toPath with
     * the given $depth, where $depth is one of {@link
     * ezcWebdavRequest::DEPTH_ZERO}, {@link ezcWebdavRequest::DEPTH_ONE},
     * {@link ezcWebdavRequest::DEPTH_INFINITY}.
     *
     * Returns an array with {@link ezcWebdavErrorResponse}s for all subtrees,
     * where the copy operation failed. Errors for subsequent resources in a
     * subtree should be ommitted.
     *
     * If an empty array is return, the operation has been completed
     * successfully.
     * 
     * @param string $fromPath 
     * @param string $toPath 
     * @param int $depth
     * @return array(ezcWebdavErrorResponse)
     */
    abstract protected function performCopy( $fromPath, $toPath, $depth = ezcWebdavRequest::DEPTH_INFINITY );

    /**
     * Deletes everything below a path.
     *
     * Deletes the resource identified by $path recursively. Returns an
     * instance of {@link ezcWebdavErrorResponse} if the deletion failed, and
     * null on success.
     * 
     * @param string $path 
     * @return ezcWebdavErrorResponse
     */
    abstract protected function performDelete( $path );

    /**
     * Returns if a resource exists.
     *
     * Returns if a the resource identified by $path exists.
     * 
     * @param string $path 
     * @return bool
     */
    abstract protected function nodeExists( $path );

    /**
     * Returns if resource is a collection.
     *
     * Returns if the resource identified by $path is a collection resource
     * (true) or a non-collection one (false).
     * 
     * @param string $path 
     * @return bool
     */
    abstract protected function isCollection( $path );

    /**
     * Returns members of collection.
     *
     * Returns an array with the members of the collection identified by $path.
     * The returned array can contain {@link ezcWebdavCollection}, and {@link
     * ezcWebdavResource} instances and might also be empty, if the collection
     * has no members.
     * 
     * @param string $path 
     * @return array(ezcWebdavResource|ezcWebdavCollection)
     */
    abstract protected function getCollectionMembers( $path );

    /**
     * Returns additional features supported by the backend.
     *
     * Returns a bitmap of additional features supported by the backend, referenced
     * by constants from the basic {@link ezcWebdavBackend} class.
     * 
     * @return int
     */
    public final function getFeatures()
    {
        return 0;
    }

    /**
     * Serves GET requests.
     *
     * The method receives a {@link ezcWebdavGetRequest} object containing all
     * relevant information obout the clients request and will return an {@link
     * ezcWebdavErrorResponse} instance on error or an instance of {@link
     * ezcWebdavGetResourceResponse} or {@link ezcWebdavGetCollectionResponse}
     * on success, depending on the type of resource that is referenced by the
     * request.
     *
     * @param ezcWebdavGetRequest $request
     * @return ezcWebdavResponse
     */
    public function get( ezcWebdavGetRequest $request )
    {
        $source = $request->requestUri;

        // Check if resource is available
        if ( !$this->nodeExists( $source ) )
        {
            return new ezcWebdavErrorResponse(
                ezcWebdavResponse::STATUS_404,
                $source
            );
        }

        if ( !$this->isCollection( $source ) )
        {
            // Just deliver file
            return new ezcWebdavGetResourceResponse(
                new ezcWebdavResource(
                    $source,
                    $this->getAllProperties( $source ),
                    $this->getResourceContents( $source )
                )
            );
        }

        // Return collection with contained childs
        return new ezcWebdavGetCollectionResponse(
            new ezcWebdavCollection(
                $source,
                $this->getAllProperties( $source ),
                $this->getCollectionMembers( $source )
            )
        );
    }

    /**
     * Serves HEAD requests.
     *
     * The method receives a {@link ezcWebdavHeadRequest} object containing all
     * relevant information obout the clients request and will return an {@link
     * ezcWebdavErrorResponse} instance on error or an instance of {@link
     * ezcWebdavHeadResponse} on success.
     * 
     * @param ezcWebdavHeadRequest $request
     * @return ezcWebdavResponse
     */
    public function head( ezcWebdavHeadRequest $request )
    {
        $source = $request->requestUri;

        // Check if resource is available
        if ( !$this->nodeExists( $source ) )
        {
            return new ezcWebdavErrorResponse(
                ezcWebdavResponse::STATUS_404,
                $source
            );
        }

        if ( !$this->isCollection( $source ) )
        {
            // Just deliver file without contents
            return new ezcWebdavHeadResponse(
                new ezcWebdavResource(
                    $source,
                    $this->getAllProperties( $source )
                )
            );
        }
        else
        {
            // Just deliver collection without childs
            return new ezcWebdavHeadResponse(
                new ezcWebdavCollection(
                    $source,
                    $this->getAllProperties( $source )
                )
            );
        }
    }

    /**
     * Returns all child nodes.
     *
     * Get all nodes from the resource identified by $source up to the given
     * depth. Reuses the method {@link getCollectionMembers()}, but you may
     * want to overwrite this implementation by somethings which fits better
     * with your backend.
     * 
     * @param string $source 
     * @param int $depth 
     * @return array(ezcWebdavResource|ezcWebdavCollection)
     */
    protected function getNodes( $source, $depth )
    {
        // No special handling for plain ressources
        if ( !$this->isCollection( $source ) )
        {
            return array( new ezcWebdavResource( $source ) );
        }

        // For zero depth just return the collection
        if ( $depth === ezcWebdavRequest::DEPTH_ZERO )
        {
            return array( new ezcWebdavCollection( $source ) );
        }

        $nodes = array( new ezcWebdavCollection( $source ) );
        $recurseCollections = array( $source );

        // Collect children for all collections listed in $recurseCollections.
        for ( $i = 0; $i < count( $recurseCollections ); ++$i )
        {
            $source = $recurseCollections[$i];
            $childs = $this->getCollectionMembers( $source );

            foreach ( $childs as $child )
            {
                $nodes[] = $child;

                // Check if we should recurse deeper, and add collections to
                // processing list in this case.
                if ( ( $child instanceof ezcWebdavCollection ) && 
                     ( $depth === ezcWebdavRequest::DEPTH_INFINITY ) )
                {
                    $recurseCollections[] = $child->path;
                }
            }
        }

        return $nodes;
    }

    /**
     * Returns properties, fetched by name.
     *
     * Fetch properties as defined by the passed $request for the resource
     * referenced. Properties are fetched by their names.
     * 
     * @param ezcWebdavPropFindRequest $request 
     * @return ezcWebdavResponse
     */
    protected function fetchProperties( ezcWebdavPropFindRequest $request )
    {
        $source = $request->requestUri;

        // Get list of all affected node, depeding on source and depth
        $nodes = $this->getNodes( $source, $request->getHeader( 'Depth' ) );

        // Get requested properties for all files
        $responses = array();
        foreach ( $nodes as $node )
        {
            // We only check if a property could not be found. Normally there
            // are more other errors which could occur when retrieving a
            // property, like 403 (Forbidden), which are not handled by this
            // simple backend. Overwrite this method to handle them.

            // Get all properties form node ...
            $nodeProperties = $this->getAllProperties( $node->path );

            // ... and diff the with the requested properties.
            $notFound = $request->prop->diff( $nodeProperties );
            $valid = $nodeProperties->intersect( $request->prop );

            $nodeResponses = array();
            // Add propstat sub response for valid responses
            if ( count( $valid ) )
            {
                $nodeResponses[] = new ezcWebdavPropStatResponse( $valid );
            }

            // Only create error response, when some properties could not be
            // found.
            if ( count( $notFound ) )
            {
                $nodeResponses[] = new ezcWebdavPropStatResponse(
                    $notFound,
                    ezcWebdavResponse::STATUS_404
                );
            }

            // Create response
            $responses[] = new ezcWebdavPropFindResponse(
                $node,
                $nodeResponses
            );
        }

        return new ezcWebdavMultistatusResponse(
            $responses
        );
    }

    /**
     * Returns names of all available properties for a resource.
     *
     * Fetches the names of all properties assigned to the reosource referenced
     * in $request and, if the resozurce is a collection, also returns property
     * names for its children, depending on the depth header of the $request.
     * 
     * @param ezcWebdavPropFindRequest $request 
     * @return ezcWebdavResponse
     */
    protected function fetchPropertyNames( ezcWebdavPropFindRequest $request )
    {
        $source = $request->requestUri;

        // Get list of all affected node, depeding on source and depth
        $nodes = $this->getNodes( $source, $request->getHeader( 'Depth' ) );

        // Get requested properties for all files
        $responses = array();
        foreach ( $nodes as $node )
        {
            // Get all properties form node ...
            $nodeProperties = $this->getAllProperties( $node->path );

            // ... and clear and add them to the property name storage.
            $propertyNames = new ezcWebdavBasicPropertyStorage();
            foreach ( $nodeProperties->getAllProperties() as $namespace => $properties )
            {
                foreach ( $properties as $name => $property )
                {
                    // Clear property, because the client only want the names
                    // of the available properties.
                    $property = clone $property;
                    $property->clear();
                    $propertyNames->attach( $property );
                }
            }

            // Add response
            $responses[] = new ezcWebdavPropFindResponse(
                $node,
                new ezcWebdavPropStatResponse( $propertyNames )
            );
        }

        return new ezcWebdavMultistatusResponse(
            $responses
        );
    }

    /**
     * Returns all available properties for a resource.
     *
     * Fetches all available properties assigned to the reosource referenced in
     * $request and, if the resource is a collection, also returns properties
     * for its children, depending on the depth header of the $request. The
     * instances of {@link ezcWebdavPropFindResponse} generated by this method
     * are encapsulated in a {@link ezcWebdavMultistatusResponse} object.
     * 
     * @param ezcWebdavPropFindRequest $request 
     * @return ezcWebdavMultistatusResponse
     */
    protected function fetchAllProperties( ezcWebdavPropFindRequest $request )
    {
        $source = $request->requestUri;

        // Get list of all affected node, depeding on source and depth
        $nodes = $this->getNodes( $source, $request->getHeader( 'Depth' ) );

        // Get requested properties for all files
        $responses = array();
        foreach ( $nodes as $node )
        {
            // Just create response from properties
            $responses[] = new ezcWebdavPropFindResponse(
                $node,
                new ezcWebdavPropStatResponse( 
                    $this->getAllProperties( $node->path )
                )
            );
        }

        return new ezcWebdavMultistatusResponse(
            $responses
        );
    }
    
    /**
     * Serves PROPFIND requests.
     * 
     * The method receives a {@link ezcWebdavPropFindRequest} object containing
     * all relevant information obout the clients request and will either
     * return an instance of {@link ezcWebdavErrorResponse} to indicate an error
     * or a {@link ezcWebdavPropFindResponse} on success. If the referenced
     * resource is a collection or if some properties produced errors, an
     * instance of {@link ezcWebdavMultistatusResponse} may be returned.
     *
     * The {@link ezcWebdavPropFindRequest} object contains a definition to
     * find one or more properties of a given collection or non-collection
     * resource.
     *
     * @param ezcWebdavPropFindRequest $request
     * @return ezcWebdavResponse
     */
    public function propFind( ezcWebdavPropFindRequest $request )
    {
        $source = $request->requestUri;

        // Check if resource is available
        if ( !$this->nodeExists( $source ) )
        {
            return new ezcWebdavErrorResponse(
                ezcWebdavResponse::STATUS_404,
                $source
            );
        }

        // Check the exact type of propfind request and dispatch to
        // corresponding method.
        switch ( true )
        {
            case $request->prop:
                return $this->fetchProperties( $request );

            case $request->propName:
                return $this->fetchPropertyNames( $request );

            case $request->allProp:
                return $this->fetchAllProperties( $request );
        }

        // This should really never happen, because the request class itself
        // should have ensured, that on of those options is set. Untestable.
        return new ezcWebdavErrorResponse(
            ezcWebdavResponse::STATUS_500
        );
    }

    /**
     * Serves PROPPATCH requests.
     * 
     * The method receives a {@link ezcWebdavPropPatchRequest} object
     * containing all relevant information obout the clients request and will
     * return an instance of {@link ezcWebdavErrorResponse} on error or a
     * {@link ezcWebdavPropPatchResponse} response on success. If the
     * referenced resource is a collection or if only some properties produced
     * errors, an instance of {@link ezcWebdavMultistatusResponse} may be
     * returned.
     *
     * @param ezcWebdavPropPatchRequest $request
     * @return ezcWebdavResponse
     */
    public function propPatch( ezcWebdavPropPatchRequest $request )
    {
        $source = $request->requestUri;

        // Check if resource is available
        if ( !$this->nodeExists( $source ) )
        {
            return new ezcWebdavErrorResponse(
                ezcWebdavResponse::STATUS_404,
                $source
            );
        }

        // Store proeprties, to be able to revert all changes later
        $propertyBackup = clone $this->getAllProperties( $source );

        $errors = array(
            ezcWebdavResponse::STATUS_403 => new ezcWebdavBasicPropertyStorage(),
            ezcWebdavResponse::STATUS_409 => new ezcWebdavBasicPropertyStorage(),
            ezcWebdavResponse::STATUS_424 => new ezcWebdavBasicPropertyStorage(),
        );
        $errnous = false;

        // Update properties, like requested
        foreach ( $request->updates as $property )
        {
            // If there already has been some error, issue failed
            // dependency errors for everything else.
            if ( $errnous )
            {
                $errors[ezcWebdavResponse::STATUS_424]->attach( $property );
                continue;
            }

            // Check for property validation errors and add a 409 for this.
            if ( $property->hasError )
            {
                $errors[ezcWebdavResponse::STATUS_409]->attach( $property );
                $errnous = true;
                continue;
            }

            switch ( $request->updates->getFlag( $property->name, $property->namespace ) )
            {
                case ezcWebdavPropPatchRequest::REMOVE:
                    if ( !$this->removeProperty( $source, $property ) )
                    {
                        // If update failed, we assume the access has been denied.
                        $errors[ezcWebdavResponse::STATUS_403]->attach( $property );
                        $errnous = true;
                    }
                    break;

                case ezcWebdavPropPatchRequest::SET:
                    if ( !$this->setProperty( $source, $property ) )
                    {
                        // If update failed, we assume the access has been denied.
                        // 
                        // @TODO: This assumptions is not particular correct.
                        // In case of live properties, which were tried to
                        // update a 409 error would be correct.
                        $errors[ezcWebdavResponse::STATUS_403]->attach( $property );
                        $errnous = true;
                    }
                    break;

                default:
                    // This may happen, when a broken flag has been assigned
                    // during request generation. This SHOULD never happen.
                    $this->resetProperties( $source, $propertyBackup );

                    return new ezcWebdavErrorResponse(  
                        ezcWebdavResponse::STATUS_500
                    );
            }
        }

        // Create node from source for response
        if ( $this->isCollection( $source ) )
        {
            $node = new ezcWebdavCollection( $source );
        }
        else
        {
            $node = new ezcWebdavResource( $source );
        }

        if ( $errnous )
        {
            // Revert all changes
            $this->resetProperties( $source, $propertyBackup );

            // Create response
            return new ezcWebdavPropPatchResponse(
                $node,
                new ezcWebdavPropStatResponse(
                    $errors[ezcWebdavResponse::STATUS_403],
                    ezcWebdavResponse::STATUS_403
                ),
                new ezcWebdavPropStatResponse(
                    $errors[ezcWebdavResponse::STATUS_409],
                    ezcWebdavResponse::STATUS_409
                ),
                new ezcWebdavPropStatResponse(
                    $errors[ezcWebdavResponse::STATUS_424],
                    ezcWebdavResponse::STATUS_424
                )
            );
        }

        return new ezcWebdavPropPatchResponse(
            $node
        );
    }

    /**
     * Serves PUT requests.
     *
     * The method receives a {@link ezcWebdavPutRequest} objects containing all
     * relevant information obout the clients request and will return an
     * instance of {@link ezcWebdavErrorResponse} on error or {@link
     * ezcWebdavPutResponse} on success.
     * 
     * @param ezcWebdavPutRequest $request 
     * @return ezcWebdavResponse
     */
    public function put( ezcWebdavPutRequest $request )
    {
        $source = $request->requestUri;

        // Check if parent node exists and throw a 409 otherwise
        if ( !$this->nodeExists( dirname( $source ) ) )
        {
            return new ezcWebdavErrorResponse(
                ezcWebdavResponse::STATUS_409,
                $source
            );
        }

        // Check if parent node is a collection, and throw a 409 otherwise
        if ( !$this->isCollection( dirname( $source ) ) )
        {
            return new ezcWebdavErrorResponse(
                ezcWebdavResponse::STATUS_409,
                $source
            );
        }

        // Check if resource to be updated or created does not exists already
        // AND is a collection
        if ( $this->nodeExists( $source ) &&
             $this->isCollection( $source ) )
        {
            return new ezcWebdavErrorResponse(
                ezcWebdavResponse::STATUS_409,
                $source
            );
        }

        // @TODO: RFC2616 Section 9.6 PUT requires us to send 501 on all
        // Content-* we don't support.

        // Everything is OK, create or update resource.
        if ( !$this->nodeExists( $source ) )
        {
            $this->createResource( $source );
        }
        $this->setResourceContents( $source, $request->body );

        // Return success response
        return new ezcWebdavPutResponse(
            $source
        );
    }

    /**
     * Serves DELETE requests.
     *
     * The method receives a {@link ezcWebdavDeleteRequest} objects containing
     * all relevant information obout the clients request and will return an
     * instance of {@link ezcWebdavErrorResponse} on error or {@link
     * ezcWebdavDeleteResponse} on success.
     * 
     * @param ezcWebdavDeleteRequest $request 
     * @return ezcWebdavResponse
     */
    public function delete( ezcWebdavDeleteRequest $request )
    {
        $source = $request->requestUri;

        // Check if resource is available
        if ( !$this->nodeExists( $source ) )
        {
            return new ezcWebdavErrorResponse(
                ezcWebdavResponse::STATUS_404,
                $source
            );
        }

        // Delete
        $deletion = $this->performDelete( $source );
        if ( $deletion !== null )
        {
            return $deletion;
        }

        // Send proper response on success
        return new ezcWebdavDeleteResponse(
            $source
        );
    }

    /**
     * Serves COPY requests.
     *
     * The method receives a {@link ezcWebdavCopyRequest} objects containing
     * all relevant information obout the clients request and will return an
     * instance of {@link ezcWebdavErrorResponse} on error or {@link
     * ezcWebdavCopyResponse} on success. If only some operations failed, this
     * method may return an instance of {@link ezcWebdavMultistatusResponse}.
     * 
     * @param ezcWebdavCopyRequest $request 
     * @return ezcWebdavResponse
     */
    public function copy( ezcWebdavCopyRequest $request )
    {
        // Indicates wheather a destiantion resource has been replaced or not.
        // The success response code depends on this.
        $replaced = false;

        // Extract paths from request
        $source = $request->requestUri;
        $dest = $request->getHeader( 'Destination' );

        // Check if resource is available
        if ( !$this->nodeExists( $source ) )
        {
            return new ezcWebdavErrorResponse(
                ezcWebdavResponse::STATUS_404,
                $source
            );
        }

        // If source and destination are equal, the request should always fail.
        if ( $source === $dest )
        {
            return new ezcWebdavErrorResponse(
                ezcWebdavResponse::STATUS_403,
                $source
            );
        }

        // Check if destination resource exists and throw error, when
        // overwrite header is F
        if ( ( $request->getHeader( 'Overwrite' ) === 'F' ) &&
             $this->nodeExists( $dest ) )
        {
            return new ezcWebdavErrorResponse(
                ezcWebdavResponse::STATUS_412,
                $dest
            );
        }

        // Check if the destination parent directory already exists, otherwise
        // bail out.
        if ( !$this->nodeExists( dirname( $dest ) ) )
        {
            return new ezcWebdavErrorResponse(
                ezcWebdavResponse::STATUS_409,
                $dest
            );
        }

        // The destination resource should be deleted if it exists and the
        // overwrite headers is T
        if ( ( $request->getHeader( 'Overwrite' ) === 'T' ) &&
             $this->nodeExists( $dest ) )
        {
            $replaced = true;
            $this->performDelete( $dest );
        }

        // All checks are passed, we can actuall copy now.
        // 
        // @TODO: handle keepalive setting somehow - even the RFC is quite
        // vague how to handle them exactly.
        $errors = $this->performCopy( $source, $dest, $request->getHeader( 'Depth' ) );

        if ( !count( $errors ) )
        {
            // No errors occured during copy. Just response with success.
            return new ezcWebdavCopyResponse(
                $replaced
            );
        }

        // Send proper response on success
        return new ezcWebdavMultistatusResponse(
            $errors
        );
    }

    /**
     * Serves MOVE requests.
     *
     * The method receives a {@link ezcWebdavMoveRequest} objects containing
     * all relevant information obout the clients request and will return an
     * instance of {@link ezcWebdavErrorResponse} on error or {@link
     * ezcWebdavMoveResponse} on success. If only some operations failed, this
     * method may return an instance of {@link ezcWebdavMultistatusResponse}.
     * 
     * @param ezcWebdavMoveRequest $request 
     * @return ezcWebdavResponse
     */
    public function move( ezcWebdavMoveRequest $request )
    {
        // Indicates wheather a destiantion resource has been replaced or not.
        // The success response code depends on this.
        $replaced = false;

        // Extract paths from request
        $source = $request->requestUri;
        $dest = $request->getHeader( 'Destination' );

        // Check if resource is available
        if ( !$this->nodeExists( $source ) )
        {
            return new ezcWebdavErrorResponse(
                ezcWebdavResponse::STATUS_404,
                $source
            );
        }

        // If source and destination are equal, the request should always fail.
        if ( $source === $dest )
        {
            return new ezcWebdavErrorResponse(
                ezcWebdavResponse::STATUS_403,
                $source
            );
        }

        // Check if destination resource exists and throw error, when
        // overwrite header is F
        if ( ( $request->getHeader( 'Overwrite' ) === 'F' ) &&
             $this->nodeExists( $dest ) )
        {
            return new ezcWebdavErrorResponse(
                ezcWebdavResponse::STATUS_412,
                $dest
            );
        }

        // Check if the destination parent directory already exists, otherwise
        // bail out.
        if ( !$this->nodeExists( dirname( $dest ) ) )
        {
            return new ezcWebdavErrorResponse(
                ezcWebdavResponse::STATUS_409,
                $dest
            );
        }

        // The destination resource should be deleted if it exists and the
        // overwrite headers is T
        if ( ( $request->getHeader( 'Overwrite' ) === 'T' ) &&
             $this->nodeExists( $dest ) )
        {
            $replaced = true;
            if ( count( $delteErrors = $this->performDelete( $dest ) ) > 0 )
            {
                return new ezcWebdavMultistatusResponse(
                    $delteErrors
                );
            }
        }

        // All checks are passed, we can actuall copy now.
        // 
        // MOVEd contents should always be copied using infinity depth.
        // 
        // @TODO: handle keepalive setting somehow - even the RFC is quite
        // vague how to handle them exactly.
        $errors = $this->performCopy( $source, $dest, ezcWebdavRequest::DEPTH_INFINITY );

        // If an error occured we skip deletion of source.
        // 
        // @IMPORTANT: This is a definition / assumption made by us, because it
        // is not defined in the RFC how to handle such a case.
        if ( count( $errors ) )
        {
            // We need a multistatus response, because some errors occured for some
            // of the resources.
            return new ezcWebdavMultistatusResponse(
                $errors
            );
        }

        // Delete the source, COPY has been successful
        $deletion = $this->performDelete( $source );

        // If deletion failed, this has again been caused by the automatic
        // error causing facilities of the backend. Send 423 by choice.
        // 
        // @TODO: The error generated here should depend on the actual backend
        // implementation and  not be generated guessing what may fit.
        if ( count( $deletion ) > 0 )
        {
            var_dump( $deletion );
            return new ezcWebdavMultistatusResponse(
                $deletion
            );
        }

        // Send proper response on success
        return new ezcWebdavMoveResponse(
            $replaced
        );
    }

    /**
     * Serves MKCOL (make collection) requests.
     *
     * The method receives a {@link ezcWebdavMakeCollectionRequest} objects
     * containing all relevant information obout the clients request and will
     * return an instance of {@link ezcWebdavErrorResponse} on error or {@link
     * ezcWebdavMakeCollectionResponse} on success.
     * 
     * @param ezcWebdavMakeCollectionRequest $request 
     * @return ezcWebdavResponse
     */
    public function makeCollection( ezcWebdavMakeCollectionRequest $request )
    {
        $collection = $request->requestUri;

        // If resource already exists, the collection cannot be created and a
        // 405 is thrown.
        if ( $this->nodeExists( $collection ) )
        {
            return new ezcWebdavErrorResponse(
                ezcWebdavResponse::STATUS_405,
                $collection
            );
        }

        // Check if the parent node already exists, otherwise throw a 409
        // error.
        if ( !$this->nodeExists( dirname( $collection ) ) )
        {
            return new ezcWebdavErrorResponse(
                ezcWebdavResponse::STATUS_409,
                $collection
            );
        }

        // If the parent node exists, but is a resource, which obviously can
        // not accept any members, throw a 403 error.
        if ( !$this->isCollection( dirname( $collection ) ) )
        {
            return new ezcWebdavErrorResponse(
                ezcWebdavResponse::STATUS_403,
                $collection
            );
        }

        // As the handling of request bodies is not described in RFC 2518, we
        // skip their handling and always return a 415 error.
        if ( $request->body )
        {
            return new ezcWebdavErrorResponse(
                ezcWebdavResponse::STATUS_415,
                $collection
            );
        }

        // Cause error, if requested?

        // All checks passed, we can create the collection
        $this->createCollection( $collection );

        // Return success
        return new ezcWebdavMakeCollectionResponse(
            $collection
        );
    }
}

?>
