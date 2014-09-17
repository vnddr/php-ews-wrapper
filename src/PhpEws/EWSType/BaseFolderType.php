<?php
/**
 * Definition of the BaseFolderType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the BaseFolderType type
 */
class BaseFolderType extends EWSType
{
    /**
     * FolderId property
     *
     * FolderIdType
     */
    public $FolderId;

    /**
     * ParentFolderId property
     *
     * FolderIdType
     */
    public $ParentFolderId;

    /**
     * FolderClass property
     *
     * @var string
     */
    public $FolderClass;

    /**
     * DisplayName property
     *
     * @var string
     */
    public $DisplayName;

    /**
     * TotalCount property
     *
     * @var integer
     */
    public $TotalCount;

    /**
     * ChildFolderCount property
     *
     * @var integer
     */
    public $ChildFolderCount;

    /**
     * ExtendedProperty property
     *
     * ExtendedPropertyType
     */
    public $ExtendedProperty;

    /**
     * ManagedFolderInformation property
     *
     * ManagedFolderInformationType
     */
    public $ManagedFolderInformation;

    /**
     * EffectiveRights property
     *
     * EffectiveRightsType
     */
    public $EffectiveRights;
}
