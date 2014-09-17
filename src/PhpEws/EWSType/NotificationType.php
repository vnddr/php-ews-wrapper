<?php
/**
 * Definition of the NotificationType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the NotificationType type
 */
class NotificationType extends EWSType
{
    /**
     * SubscriptionId property
     *
     * SubscriptionIdType
     */
    public $SubscriptionId;

    /**
     * PreviousWatermark property
     *
     * WatermarkType
     */
    public $PreviousWatermark;

    /**
     * MoreEvents property
     *
     * @var boolean
     */
    public $MoreEvents;

    /**
     * CopiedEvent property
     *
     * MovedCopiedEventType
     */
    public $CopiedEvent;

    /**
     * CreatedEvent property
     *
     * BaseObjectChangedEventType
     */
    public $CreatedEvent;

    /**
     * DeletedEvent property
     *
     * BaseObjectChangedEventType
     */
    public $DeletedEvent;

    /**
     * ModifiedEvent property
     *
     * ModifiedEventType
     */
    public $ModifiedEvent;

    /**
     * MovedEvent property
     *
     * MovedCopiedEventType
     */
    public $MovedEvent;

    /**
     * NewMailEvent property
     *
     * BaseObjectChangedEventType
     */
    public $NewMailEvent;

    /**
     * StatusEvent property
     *
     * BaseNotificationEventType
     */
    public $StatusEvent;
}
