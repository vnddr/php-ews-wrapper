<?php
/**
 * The Period element defines the name, time offset, and unique identifier for a
 * specific stage of the time zone.
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the NonEmptyArrayOfPeriodsType type.
 */
class NonEmptyArrayOfPeriodsType extends EWSType
{
    /**
     * The name, time offset, and unique identifier for a specific stage of the
     * time zone.
     *
     * PeriodType
     */
    public $Period;
}
