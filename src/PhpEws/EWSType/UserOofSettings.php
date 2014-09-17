<?php
/**
 * Definition of the UserOofSettings type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the UserOofSettings type
 */
class UserOofSettings extends EWSType
{
    /**
     * OofState property
     *
     * OofState
     */
    public $OofState;

    /**
     * ExternalAudience property
     *
     * ExternalAudience
     */
    public $ExternalAudience;

    /**
     * Duration property
     *
     * Duration
     */
    public $Duration;

    /**
     * InternalReply property
     *
     * ReplyBody
     */
    public $InternalReply;

    /**
     * ExternalReply property
     *
     * ReplyBody
     */
    public $ExternalReply;
}
