<?php
/**
 * Definition of the CreateFolderType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the CreateFolderType type
 */
class CreateFolderType extends EWSType
{
    /**
     * ParentFolderId property
     *
     * TargetFolderIdType
     */
    public $ParentFolderId;

    /**
     * Folders property
     *
     * NonEmptyArrayOfFoldersType
     */
    public $Folders;
}
