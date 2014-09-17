<?php
/**
 * Definition of the CalendarViewType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the CalendarViewType type
 */
class CalendarViewType extends EWSType
{
    /**
     * StartDate property
     *
     * dateTime
     */
    public $StartDate;

    /**
     * EndDate property
     *
     * dateTime
     */
    public $EndDate;
}
