<?php
/**
 * Definition of the FindItemType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the FindItemType type
 */
class FindItemType extends EWSType
{
    /**
     * ItemShape property
     *
     * ItemResponseShapeType
     */
    public $ItemShape;

    /**
     * IndexedPageItemView property
     *
     * IndexedPageViewType
     */
    public $IndexedPageItemView;

    /**
     * FractionalPageItemView property
     *
     * FractionalPageViewType
     */
    public $FractionalPageItemView;

    /**
     * CalendarView property
     *
     * CalendarViewType
     */
    public $CalendarView;

    /**
     * ContactsView property
     *
     * ContactsViewType
     */
    public $ContactsView;

    /**
     * GroupBy property
     *
     * GroupByType
     */
    public $GroupBy;

    /**
     * DistinguishedGroupBy property
     *
     * DistinguishedGroupByType
     */
    public $DistinguishedGroupBy;

    /**
     * Restriction property
     *
     * RestrictionType
     */
    public $Restriction;

    /**
     * SortOrder property
     *
     * NonEmptyArrayOfFieldOrdersType
     */
    public $SortOrder;

    /**
     * ParentFolderIds property
     *
     * NonEmptyArrayOfBaseFolderIdsType
     */
    public $ParentFolderIds;

    /**
     * Traversal property
     *
     * ItemQueryTraversalType
     */
    public $Traversal;
}
