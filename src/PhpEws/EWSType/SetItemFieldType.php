<?php
/**
 * Definition of the SetItemFieldType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the SetItemFieldType type
 */
class SetItemFieldType extends EWSType
{
    /**
     * Represents an Exchange calendar item to update.
     *
     * CalendarItemType
     */
    public $CalendarItem;

    /**
     * Represents an Exchange contact item to update.
     *
     * ContactItemType
     */
    public $Contact;

    /**
     * Represents a distribution list to update.
     *
     * DistributionListType
     */
    public $DistributionList;

    /**
     * Identifies extended MAPI properties to set.
     *
     * PathToExtendedFieldType
     */
    public $ExtendedFieldURI;

    /**
     * Identifies frequently referenced properties by URI.
     *
     * PathToUnindexedFieldType
     */
    public $FieldURI;

    /**
     * Identifies individual members of a dictionary.
     *
     * PathToIndexedFieldType
     */
    public $IndexedFieldURI;

    /**
     * Represents an item in the Exchange store.
     *
     * ItemType
     */
    public $Item;

    /**
     * Represents a meeting cancellation to update.
     *
     * MeetingCancellationMessageType
     */
    public $MeetingCancellation;

    /**
     * Represents a meeting message to update.
     *
     * MeetingMessageType
     */
    public $MeetingMessage;

    /**
     * Represents a meeting request to update.
     *
     * MeetingRequestMessageType
     */
    public $MeetingRequest;

    /**
     * Represents a meeting response to update.
     *
     * MeetingResponseMessageType
     */
    public $MeetingResponse;

    /**
     * Represents an Exchange e-mail message to update.
     *
     * MessageType
     */
    public $Message;

    /**
     * represents a post item in the Exchange store.
     *
     * PostItemType
     */
    public $PostItem;

    /**
     * Represents a task to update.
     *
     * TaskType
     */
    public $Task;
}
