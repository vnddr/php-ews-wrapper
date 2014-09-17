<?php
/**
 * Definition of the NonEmptyArrayOfResponseObjectsType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the NonEmptyArrayOfResponseObjectsType type
 */
class NonEmptyArrayOfResponseObjectsType extends EWSType
{
    /**
     * AcceptItem property
     *
     * AcceptItemType
     */
    public $AcceptItem;

    /**
     * TentativelyAcceptItem property
     *
     * TentativelyAcceptItemType
     */
    public $TentativelyAcceptItem;

    /**
     * DeclineItem property
     *
     * DeclineItemType
     */
    public $DeclineItem;

    /**
     * ReplyToItem property
     *
     * ReplyToItemType
     */
    public $ReplyToItem;

    /**
     * ForwardItem property
     *
     * ForwardItemType
     */
    public $ForwardItem;

    /**
     * ReplyAllToItem property
     *
     * ReplyAllToItemType
     */
    public $ReplyAllToItem;

    /**
     * CancelCalendarItem property
     *
     * CancelCalendarItemType
     */
    public $CancelCalendarItem;

    /**
     * RemoveItem property
     *
     * RemoveItemType
     */
    public $RemoveItem;

    /**
     * SuppressReadReceipt property
     *
     * SuppressReadReceiptType
     */
    public $SuppressReadReceipt;

    /**
     * PostReplyItem property
     *
     * PostReplyItemType
     */
    public $PostReplyItem;
}
