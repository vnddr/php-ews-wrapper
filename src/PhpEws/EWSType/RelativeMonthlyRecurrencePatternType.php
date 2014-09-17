<?php
/**
 * Definition of the RelativeMonthlyRecurrencePatternType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the RelativeMonthlyRecurrencePatternType type
 */
class RelativeMonthlyRecurrencePatternType extends EWSType
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
}
