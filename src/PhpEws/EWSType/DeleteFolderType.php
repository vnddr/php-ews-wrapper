<?php
/**
 * Definition of the DeleteFolderType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the DeleteFolderType type
 */
class DeleteFolderType extends EWSType
{
    /**
     * FolderIds property
     *
     * NonEmptyArrayOfBaseFolderIdsType
     */
    public $FolderIds;

    /**
     * DeleteType property
     *
     * DisposalType
     */
    public $DeleteType;
}
