<?php
/**
 * Definition of the NonEmptyArrayOfBaseItemIdsType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the NonEmptyArrayOfBaseItemIdsType type
 */
class NonEmptyArrayOfBaseItemIdsType extends EWSType
{
    /**
     * ItemId property
     *
     * ItemIdType
     */
    public $ItemId;

    /**
     * OccurrenceItemId property
     *
     * OccurrenceItemIdType
     */
    public $OccurrenceItemId;

    /**
     * RecurringMasterItemId property
     *
     * RecurringMasterItemIdType
     */
    public $RecurringMasterItemId;
}
