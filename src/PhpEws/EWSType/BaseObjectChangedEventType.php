<?php
/**
 * Definition of the BaseObjectChangedEventType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the BaseObjectChangedEventType type
 */
class BaseObjectChangedEventType extends EWSType
{
    /**
     * TimeStamp property
     *
     * dateTime
     */
    public $TimeStamp;

    /**
     * FolderId property
     *
     * FolderIdType
     */
    public $FolderId;

    /**
     * ItemId property
     *
     * ItemIdType
     */
    public $ItemId;

    /**
     * ParentFolderId property
     *
     * FolderIdType
     */
    public $ParentFolderId;
}
