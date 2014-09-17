<?php
/**
 * Definition of the CreateManagedFolderRequestType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the CreateManagedFolderRequestType type
 */
class CreateManagedFolderRequestType extends EWSType
{
    /**
     * FolderNames property
     *
     * NonEmptyArrayOfFolderNamesType
     */
    public $FolderNames;

    /**
     * Mailbox property
     *
     * EmailAddressType
     */
    public $Mailbox;
}
