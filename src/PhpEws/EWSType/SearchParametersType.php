<?php
/**
 * Definition of the SearchParametersType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the SearchParametersType type
 */
class SearchParametersType extends EWSType
{
    /**
     * Restriction property
     *
     * RestrictionType
     */
    public $Restriction;

    /**
     * BaseFolderIds property
     *
     * NonEmptyArrayOfBaseFolderIdsType
     */
    public $BaseFolderIds;

    /**
     * Traversal property
     *
     * SearchFolderTraversalType
     */
    public $Traversal;
}
