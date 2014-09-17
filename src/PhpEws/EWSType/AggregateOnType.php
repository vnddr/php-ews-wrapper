<?php
/**
 * Definition of the AggregateOnType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the AggregateOnType type
 */
class AggregateOnType extends EWSType
{
    /**
     * FieldURI property
     *
     * PathToUnindexedFieldType
     */
    public $FieldURI;

    /**
     * IndexedFieldURI property
     *
     * PathToIndexedFieldType
     */
    public $IndexedFieldURI;

    /**
     * ExtendedFieldURI property
     *
     * PathToExtendedFieldType
     */
    public $ExtendedFieldURI;

    /**
     * Aggregate property
     *
     * AggregateType
     */
    public $Aggregate;
}
