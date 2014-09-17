<?php
/**
 * Definition of the SerializedSecurityContextType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the SerializedSecurityContextType type
 */
class SerializedSecurityContextType extends EWSType
{
    /**
     * UserSid property
     *
     * @var string
     */
    public $UserSid;

    /**
     * GroupSids property
     *
     * NonEmptyArrayOfGroupIdentifiersType
     */
    public $GroupSids;

    /**
     * RestrictedGroupSids property
     *
     * NonEmptyArrayOfRestrictedGroupIdentifiersType
     */
    public $RestrictedGroupSids;

    /**
     * PrimarySmtpAddress property
     *
     * @var string
     */
    public $PrimarySmtpAddress;
}
