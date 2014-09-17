<?php
/**
 * Definition of the ItemChangeType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the ItemChangeType type
 */
class ItemChangeType extends EWSType
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

    /**
     * Updates property
     *
     * NonEmptyArrayOfItemChangeDescriptionsType
     */
    public $Updates;
}
