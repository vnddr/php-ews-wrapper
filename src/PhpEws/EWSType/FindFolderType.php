<?php
/**
 * Definition of the FindFolderType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the FindFolderType type
 */
class FindFolderType extends EWSType
{
    /**
     * FolderShape property
     *
     * FolderResponseShapeType
     */
    public $FolderShape;

    /**
     * IndexedPageFolderView property
     *
     * IndexedPageViewType
     */
    public $IndexedPageFolderView;

    /**
     * FractionalPageFolderView property
     *
     * FractionalPageViewType
     */
    public $FractionalPageFolderView;

    /**
     * Restriction property
     *
     * RestrictionType
     */
    public $Restriction;

    /**
     * ParentFolderIds property
     *
     * NonEmptyArrayOfBaseFolderIdsType
     */
    public $ParentFolderIds;

    /**
     * Traversal property
     *
     * FolderQueryTraversalType
     */
    public $Traversal;
}
