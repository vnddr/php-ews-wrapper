<?php
/**
 * The IsLessThanOrEqualTo element represents a search expression that compares
 * a property with either a constant value or another property and returns true
 * if the first property is less than or equal to the second.
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the IsLessThanOrEqualToType type.
 */
class IsLessThanOrEqualToType extends EWSType
{
    /**
     * Identifies frequently referenced properties by URI.
     *
     * PathToUnindexedFieldType
     */
    public $FieldURI;

    /**
     * Identifies individual members of a dictionary.
     *
     * PathToIndexedFieldType
     */
    public $IndexedFieldURI;

    /**
     * Identifies MAPI properties.
     *
     * PathToExtendedFieldType
     */
    public $ExtendedFieldURI;

    /**
     * Represents either a property or a constant value to be used when
     * comparing with another property.
     *
     * FieldURIOrConstantType
     */
    public $FieldURIOrConstant;
}
