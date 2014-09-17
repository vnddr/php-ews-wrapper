<?php
/**
 * Definition of the FolderChangeType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the FolderChangeType type
 */
class FolderChangeType extends EWSType
{
    /**
     * FolderId property
     *
     * FolderIdType
     */
    public $FolderId;

    /**
     * DistinguishedFolderId property
     *
     * DistinguishedFolderIdType
     */
    public $DistinguishedFolderId;

    /**
     * Updates property
     *
     * NonEmptyArrayOfFolderChangeDescriptionsType
     */
    public $Updates;
}
