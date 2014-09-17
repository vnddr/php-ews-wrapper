<?php
/**
 * Definition of the DistinguishedFolderIdType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the DistinguishedFolderIdType type
 */
class DistinguishedFolderIdType extends EWSType
{
    /**
     * Mailbox property
     *
     * EmailAddressType
     */
    public $Mailbox;

    /**
     * Id property
     *
     * DistinguishedFolderIdNameType
     */
    public $Id;

    /**
     * ChangeKey property
     *
     * @var string
     */
    public $ChangeKey;
}
