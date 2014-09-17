<?php
/**
 * Definition of the SyncFolderHierarchyChangesType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the SyncFolderHierarchyChangesType type
 */
class SyncFolderHierarchyChangesType extends EWSType
{
    /**
     * Create property
     *
     * SyncFolderHierarchyCreateOrUpdateType
     */
    public $Create;

    /**
     * Update property
     *
     * SyncFolderHierarchyCreateOrUpdateType
     */
    public $Update;

    /**
     * Delete property
     *
     * SyncFolderHierarchyDeleteType
     */
    public $Delete;
}
