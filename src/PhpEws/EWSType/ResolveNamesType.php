<?php
/**
 * Definition of the ResolveNamesType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the ResolveNamesType type
 */
class ResolveNamesType extends EWSType
{
    /**
     * ParentFolderIds property
     *
     * NonEmptyArrayOfBaseFolderIdsType
     */
    public $ParentFolderIds;

    /**
     * UnresolvedEntry property
     *
     * NonEmptyStringType
     */
    public $UnresolvedEntry;

    /**
     * ReturnFullContactData property
     *
     * @var boolean
     */
    public $ReturnFullContactData;

    /**
     * SearchScope property
     *
     * ResolveNamesSearchScopeType
     */
    public $SearchScope;
}
