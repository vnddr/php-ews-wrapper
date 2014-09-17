<?php
/**
 * Definition of the UpdateItemType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the UpdateItemType type
 */
class UpdateItemType extends EWSType
{
    /**
     * SavedItemFolderId property
     *
     * TargetFolderIdType
     */
    public $SavedItemFolderId;

    /**
     * ItemChanges property
     *
     * NonEmptyArrayOfItemChangesType
     */
    public $ItemChanges;

    /**
     * ConflictResolution property
     *
     * ConflictResolutionType
     */
    public $ConflictResolution;

    /**
     * MessageDisposition property
     *
     * MessageDispositionType
     */
    public $MessageDisposition;

    /**
     * SendMeetingInvitationsOrCancellations property
     *
     * CalendarItemUpdateOperationType
     */
    public $SendMeetingInvitationsOrCancellations;
}
