<?php
/**
 * Definition of the MovedCopiedEventType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the MovedCopiedEventType type
 */
class MovedCopiedEventType extends EWSType
{
    /**
     * OldFolderId property
     *
     * FolderIdType
     */
    public $OldFolderId;

    /**
     * OldItemId property
     *
     * ItemIdType
     */
    public $OldItemId;

    /**
     * OldParentFolderId property
     *
     * FolderIdType
     */
    public $OldParentFolderId;
}
