<?php
/**
 * Definition of the GetEventsType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the GetEventsType type
 */
class GetEventsType extends EWSType
{
    /**
     * SubscriptionId property
     *
     * SubscriptionIdType
     */
    public $SubscriptionId;

    /**
     * Watermark property
     *
     * WatermarkType
     */
    public $Watermark;
}
