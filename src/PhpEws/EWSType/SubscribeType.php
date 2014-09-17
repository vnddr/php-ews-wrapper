<?php
/**
 * Definition of the SubscribeType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the SubscribeType type
 */
class SubscribeType extends EWSType
{
    /**
     * PullSubscriptionRequest property
     *
     * PullSubscriptionRequestType
     */
    public $PullSubscriptionRequest;

    /**
     * PushSubscriptionRequest property
     *
     * PushSubscriptionRequestType
     */
    public $PushSubscriptionRequest;
}
