<?php
/**
 * Definition of the RelativeYearlyRecurrencePatternType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the RelativeYearlyRecurrencePatternType type
 */
class RelativeYearlyRecurrencePatternType extends EWSType
{
    /**
     * DaysOfWeek property
     *
     * DayOfWeekType
     */
    public $DaysOfWeek;

    /**
     * DayOfWeekIndex property
     *
     * DayOfWeekIndexType
     */
    public $DayOfWeekIndex;

    /**
     * Month property
     *
     * MonthNamesType
     */
    public $Month;
}
