<?php
/**
 * Definition of the NonEmptyArrayOfAlternateIdsType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the NonEmptyArrayOfAlternateIdsType type
 */
class NonEmptyArrayOfAlternateIdsType extends EWSType
{
    /**
     * AlternateId property
     *
     * AlternateIdType
     */
    public $AlternateId;

    /**
     * AlternatePublicFolderId property
     *
     * AlternatePublicFolderIdType
     */
    public $AlternatePublicFolderId;

    /**
     * AlternatePublicFolderItemId property
     *
     * AlternatePublicFolderItemIdType
     */
    public $AlternatePublicFolderItemId;
}
