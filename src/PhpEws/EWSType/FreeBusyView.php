<?php
/**
 * Definition of the FreeBusyView type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the FreeBusyView type
 */
class FreeBusyView extends EWSType
{
    /**
     * FreeBusyViewType property
     *
     * FreeBusyViewType
     */
    public $FreeBusyViewType;

    /**
     * MergedFreeBusy property
     *
     * @var string
     */
    public $MergedFreeBusy;

    /**
     * CalendarEventArray property
     *
     * ArrayOfCalendarEvent
     */
    public $CalendarEventArray;

    /**
     * WorkingHours property
     *
     * WorkingHours
     */
    public $WorkingHours;
}
