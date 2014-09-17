<?php
/**
 * Definition of the BaseMoveCopyFolderType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the BaseMoveCopyFolderType type
 */
class BaseMoveCopyFolderType extends EWSType
{
    /**
     * ToFolderId property
     *
     * TargetFolderIdType
     */
    public $ToFolderId;

    /**
     * FolderIds property
     *
     * NonEmptyArrayOfBaseFolderIdsType
     */
    public $FolderIds;
}
