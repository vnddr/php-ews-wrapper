<?php
/**
 * Definition of the SuggestionsViewOptionsType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the SuggestionsViewOptionsType type
 */
class SuggestionsViewOptionsType extends EWSType
{
    /**
     * GoodThreshold property
     *
     * @var integer
     */
    public $GoodThreshold;

    /**
     * MaximumResultsByDay property
     *
     * @var integer
     */
    public $MaximumResultsByDay;

    /**
     * MaximumNonWorkHourResultsByDay property
     *
     * @var integer
     */
    public $MaximumNonWorkHourResultsByDay;

    /**
     * MeetingDurationInMinutes property
     *
     * @var integer
     */
    public $MeetingDurationInMinutes;

    /**
     * MinimumSuggestionQuality property
     *
     * SuggestionQuality
     */
    public $MinimumSuggestionQuality;

    /**
     * DetailedSuggestionsWindow property
     *
     * Duration
     */
    public $DetailedSuggestionsWindow;

    /**
     * CurrentMeetingTime property
     *
     * dateTime
     */
    public $CurrentMeetingTime;

    /**
     * GlobalObjectId property
     *
     * @var string
     */
    public $GlobalObjectId;
}
