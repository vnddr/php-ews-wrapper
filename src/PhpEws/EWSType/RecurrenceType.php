<?php
/**
 * Definition of the RecurrenceType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the RecurrenceType type
 */
class RecurrenceType extends EWSType
{
    /**
     * RelativeYearlyRecurrence property
     *
     * RelativeYearlyRecurrencePatternType
     */
    public $RelativeYearlyRecurrence;

    /**
     * AbsoluteYearlyRecurrence property
     *
     * AbsoluteYearlyRecurrencePatternType
     */
    public $AbsoluteYearlyRecurrence;

    /**
     * RelativeMonthlyRecurrence property
     *
     * RelativeMonthlyRecurrencePatternType
     */
    public $RelativeMonthlyRecurrence;

    /**
     * AbsoluteMonthlyRecurrence property
     *
     * AbsoluteMonthlyRecurrencePatternType
     */
    public $AbsoluteMonthlyRecurrence;

    /**
     * WeeklyRecurrence property
     *
     * WeeklyRecurrencePatternType
     */
    public $WeeklyRecurrence;

    /**
     * DailyRecurrence property
     *
     * DailyRecurrencePatternType
     */
    public $DailyRecurrence;

    /**
     * NoEndRecurrence property
     *
     * NoEndRecurrenceRangeType
     */
    public $NoEndRecurrence;

    /**
     * EndDateRecurrence property
     *
     * EndDateRecurrenceRangeType
     */
    public $EndDateRecurrence;

    /**
     * NumberedRecurrence property
     *
     * NumberedRecurrenceRangeType
     */
    public $NumberedRecurrence;
}
