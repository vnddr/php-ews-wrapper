<?php
/**
 * Definition of the Suggestion type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the Suggestion type
 */
class Suggestion extends EWSType
{
    /**
     * MeetingTime property
     *
     * dateTime
     */
    public $MeetingTime;

    /**
     * IsWorkTime property
     *
     * @var boolean
     */
    public $IsWorkTime;

    /**
     * SuggestionQuality property
     *
     * SuggestionQuality
     */
    public $SuggestionQuality;

    /**
     * AttendeeConflictDataArray property
     *
     * ArrayOfAttendeeConflictData
     */
    public $AttendeeConflictDataArray;
}
