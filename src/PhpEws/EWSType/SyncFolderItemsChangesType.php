<?php
/**
 * Definition of the SyncFolderItemsChangesType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the SyncFolderItemsChangesType type
 */
class SyncFolderItemsChangesType extends EWSType
{
    /**
     * Create property
     *
     * SyncFolderItemsCreateOrUpdateType
     */
    public $Create;

    /**
     * Update property
     *
     * SyncFolderItemsCreateOrUpdateType
     */
    public $Update;

    /**
     * Delete property
     *
     * SyncFolderItemsDeleteType
     */
    public $Delete;

    /**
     * ReadFlagChange property
     *
     * SyncFolderItemsReadFlagType
     */
    public $ReadFlagChange;
}
