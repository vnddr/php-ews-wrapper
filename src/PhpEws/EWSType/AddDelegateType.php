<?php
/**
 * Definition of the AddDelegateType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the AddDelegateType type
 */
class AddDelegateType extends EWSType
{
    /**
     * DelegateUsers property
     *
     * ArrayOfDelegateUserType
     */
    public $DelegateUsers;

    /**
     * DeliverMeetingRequests property
     *
     * DeliverMeetingRequestsType
     */
    public $DeliverMeetingRequests;
}
