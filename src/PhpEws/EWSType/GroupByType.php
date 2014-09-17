<?php
/**
 * Definition of the GroupByType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the GroupByType type
 */
class GroupByType extends EWSType
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
     * AggregateOn property
     *
     * AggregateOnType
     */
    public $AggregateOn;

    /**
     * Order property
     *
     * SortDirectionType
     */
    public $Order;
}
