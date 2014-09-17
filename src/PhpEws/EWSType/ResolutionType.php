<?php
/**
 * Definition of the ResolutionType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the ResolutionType type
 */
class ResolutionType extends EWSType
{
    /**
     * Mailbox property
     *
     * EmailAddressType
     */
    public $Mailbox;

    /**
     * Contact property
     *
     * ContactItemType
     */
    public $Contact;
}
