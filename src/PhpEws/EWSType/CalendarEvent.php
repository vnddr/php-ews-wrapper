<?php
/**
 * Definition of the CalendarEvent type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the CalendarEvent type
 */
class CalendarEvent extends EWSType
{
    /**
     * Start date and time of the event in ISO 8601 format.
     *
     * @var string
     */
    public $Start;

    /**
     * End date and time of the event in ISO 8601 format.
     *
     * @var string
     */
    public $End;

    /**
     * BusyType property
     *
     * LegacyFreeBusyType
     */
    public $BusyType;

    /**
     * CalendarEventDetails property
     *
     * CalendarEventDetails
     */
    public $CalendarEventDetails;
}
