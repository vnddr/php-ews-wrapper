<?php
/**
 * Definition of the BaseSubscriptionRequestType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the BaseSubscriptionRequestType type
 */
class BaseSubscriptionRequestType extends EWSType
{
    /**
     * FolderIds property
     *
     * NonEmptyArrayOfBaseFolderIdsType
     */
    public $FolderIds;

    /**
     * EventTypes property
     *
     * NonEmptyArrayOfNotificationEventTypesType
     */
    public $EventTypes;

    /**
     * Watermark property
     *
     * WatermarkType
     */
    public $Watermark;
}
