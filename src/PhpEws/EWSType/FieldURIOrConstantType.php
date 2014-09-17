<?php
/**
 * The FieldURIOrConstant element represents either a property or a constant
 * value to be used when comparing with another property.
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the FieldURIOrConstantType type.
 */
class FieldURIOrConstantType extends EWSType
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
     * Identifies a constant value in a restriction.
     *
     * ConstantValueType
     */
    public $Constant;
}
