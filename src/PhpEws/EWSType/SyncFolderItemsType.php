<?php
/**
 * Definition of the SyncFolderItemsType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the SyncFolderItemsType type
 */
class SyncFolderItemsType extends EWSType
{
    /**
     * ItemShape property
     *
     * ItemResponseShapeType
     */
    public $ItemShape;

    /**
     * SyncFolderId property
     *
     * TargetFolderIdType
     */
    public $SyncFolderId;

    /**
     * SyncState property
     *
     * @var string
     */
    public $SyncState;

    /**
     * Ignore property
     *
     * ArrayOfBaseItemIdsType
     */
    public $Ignore;

    /**
     * MaxChangesReturned property
     *
     * MaxSyncChangesReturnedType
     */
    public $MaxChangesReturned;
}
