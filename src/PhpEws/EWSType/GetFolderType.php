<?php
/**
 * Definition of the GetFolderType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the GetFolderType type
 */
class GetFolderType extends EWSType
{
    /**
     * FolderShape property
     *
     * FolderResponseShapeType
     */
    public $FolderShape;

    /**
     * FolderIds property
     *
     * NonEmptyArrayOfBaseFolderIdsType
     */
    public $FolderIds;
}
