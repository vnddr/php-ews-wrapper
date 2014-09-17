<?php
/**
 * Definition of the EmailAddressType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the EmailAddressType type
 */
class EmailAddressType extends EWSType
{
    /**
     * Name property
     *
     * @var string
     */
    public $Name;

    /**
     * EmailAddress property
     *
     * @var NonEmptyStringType
     */
    public $EmailAddress;

    /**
     * RoutingType property
     *
     * @var NonEmptyStringType
     */
    public $RoutingType;

    /**
     * MailboxType property
     *
     * @var MailboxTypeType
     */
    public $MailboxType;

    /**
     * ItemId property
     *
     * @var ItemIdType
     */
    public $ItemId;
}
