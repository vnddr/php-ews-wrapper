<?php
/**
 * The Excludes element performs a bitwise mask of the specified property and a
 * supplied value.
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the ExcludesType type.
 */
class ExcludesType extends EWSType
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
     * Represents a hexadecimal or decimal mask to be used during an Excludes
     * restriction operation. If the bitmask represents a hexadecimal number, it
     * must be prefixed by 0x or 0X. Otherwise, it will be considered a decimal
     * number.
     *
     * ExcludesValueType
     */
    public $Bitmask;
}
