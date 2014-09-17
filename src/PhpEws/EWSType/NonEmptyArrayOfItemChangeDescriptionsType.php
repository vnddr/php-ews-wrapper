<?php
/**
 * Definition of the NonEmptyArrayOfItemChangeDescriptionsType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the NonEmptyArrayOfItemChangeDescriptionsType type
 */
class NonEmptyArrayOfItemChangeDescriptionsType extends EWSType
{
    /**
     * AppendToItemField property
     *
     * AppendToItemFieldType
     */
    public $AppendToItemField;

    /**
     * SetItemField property
     *
     * SetItemFieldType
     */
    public $SetItemField;

    /**
     * DeleteItemField property
     *
     * DeleteItemFieldType
     */
    public $DeleteItemField;
}
