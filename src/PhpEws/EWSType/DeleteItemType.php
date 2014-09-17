<?php
/**
 * Definition of the DeleteItemType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the DeleteItemType type
 */
class DeleteItemType extends EWSType
{
    /**
     * ItemIds property
     *
     * NonEmptyArrayOfBaseItemIdsType
     */
    public $ItemIds;

    /**
     * DeleteType property
     *
     * DisposalType
     */
    public $DeleteType;

    /**
     * SendMeetingCancellations property
     *
     * CalendarItemCreateOrDeleteOperationType
     */
    public $SendMeetingCancellations;

    /**
     * AffectedTaskOccurrences property
     *
     * AffectedTaskOccurrencesType
     */
    public $AffectedTaskOccurrences;
}
