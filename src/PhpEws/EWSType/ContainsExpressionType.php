<?php
/**
 * The Contains element represents a search expression that determines whether a
 * given property contains the supplied constant string value.
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the ContainsExpressionType type.
 */
class ContainsExpressionType extends EWSType
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

    /**
     * Identifies the boundaries of a search.
     *
     * ContainmentModeType
     */
    public $ContainmentMode;

    /**
     * Determines whether the search ignores cases and spaces.
     *
     * ContainmentComparisonType
     */
    public $ContainmentComparison;
}
