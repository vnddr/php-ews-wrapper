<?php
/**
 * Definition of the SuggestionDayResult type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the SuggestionDayResult type
 */
class SuggestionDayResult extends EWSType
{
    /**
     * Date property
     *
     * dateTime
     */
    public $Date;

    /**
     * DayQuality property
     *
     * SuggestionQuality
     */
    public $DayQuality;

    /**
     * SuggestionArray property
     *
     * ArrayOfSuggestion
     */
    public $SuggestionArray;
}
