<?php
/**
 * Definition of the GetUserOofSettingsResponse type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the GetUserOofSettingsResponse type
 */
class GetUserOofSettingsResponse extends EWSType
{
    /**
     * ResponseMessage property
     *
     * ResponseMessageType
     */
    public $ResponseMessage;

    /**
     * OofSettings property
     *
     * UserOofSettings
     */
    public $OofSettings;

    /**
     * AllowExternalOof property
     *
     * ExternalAudience
     */
    public $AllowExternalOof;
}
