<?php
/**
 * Definition of the SuggestionsResponseType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the SuggestionsResponseType type
 */
class SuggestionsResponseType extends EWSType
{
    /**
     * ResponseMessage property
     *
     * ResponseMessageType
     */
    public $ResponseMessage;

    /**
     * SuggestionDayResultArray property
     *
     * ArrayOfSuggestionDayResult
     */
    public $SuggestionDayResultArray;
}
