<?php
/**
 * Definition of the WorkingHours type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the WorkingHours type
 */
class WorkingHours extends EWSType
{
    /**
     * TimeZone property
     *
     * SerializableTimeZone
     */
    public $TimeZone;

    /**
     * WorkingPeriodArray property
     *
     * ArrayOfWorkingPeriod
     */
    public $WorkingPeriodArray;
}
