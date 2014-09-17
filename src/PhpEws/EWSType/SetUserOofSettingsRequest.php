<?php
/**
 * Definition of the SetUserOofSettingsRequest type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the SetUserOofSettingsRequest type
 */
class SetUserOofSettingsRequest extends EWSType
{
    /**
     * Mailbox property
     *
     * EmailAddress
     */
    public $Mailbox;

    /**
     * UserOofSettings property
     *
     * UserOofSettings
     */
    public $UserOofSettings;
}
