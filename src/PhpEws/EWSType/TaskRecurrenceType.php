<?php
/**
 * Definition of the TaskRecurrenceType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the TaskRecurrenceType type
 */
class TaskRecurrenceType extends EWSType
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
     * DailyRegeneration property
     *
     * DailyRegeneratingPatternType
     */
    public $DailyRegeneration;

    /**
     * WeeklyRegeneration property
     *
     * WeeklyRegeneratingPatternType
     */
    public $WeeklyRegeneration;

    /**
     * MonthlyRegeneration property
     *
     * MonthlyRegeneratingPatternType
     */
    public $MonthlyRegeneration;

    /**
     * YearlyRegeneration property
     *
     * YearlyRegeneratingPatternType
     */
    public $YearlyRegeneration;

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
