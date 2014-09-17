<?php
/**
 * Definition of the TimeChangeType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the TimeChangeType type
 */
class TimeChangeType extends EWSType
{
    /**
     * Offset property
     *
     * duration
     */
    public $Offset;

    /**
     * RelativeYearlyRecurrence property
     *
     * RelativeYearlyRecurrencePatternType
     */
    public $RelativeYearlyRecurrence;

    /**
     * AbsoluteDate property
     *
     * date
     */
    public $AbsoluteDate;

    /**
     * Time property
     *
     * time
     */
    public $Time;

    /**
     * TimeZoneName property
     *
     * @var string
     */
    public $TimeZoneName;
}
