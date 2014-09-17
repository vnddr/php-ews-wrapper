<?php
/**
 * Definition of the NonEmptyArrayOfFolderChangeDescriptionsType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the NonEmptyArrayOfFolderChangeDescriptionsType type
 */
class NonEmptyArrayOfFolderChangeDescriptionsType extends EWSType
{
    /**
     * AppendToFolderField property
     *
     * AppendToFolderFieldType
     */
    public $AppendToFolderField;

    /**
     * SetFolderField property
     *
     * SetFolderFieldType
     */
    public $SetFolderField;

    /**
     * DeleteFolderField property
     *
     * DeleteFolderFieldType
     */
    public $DeleteFolderField;
}
