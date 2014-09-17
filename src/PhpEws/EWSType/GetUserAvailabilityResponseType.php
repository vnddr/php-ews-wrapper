<?php
/**
 * Definition of the GetUserAvailabilityResponseType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the GetUserAvailabilityResponseType type
 */
class GetUserAvailabilityResponseType extends EWSType
{
    /**
     * FreeBusyResponseArray property
     *
     * ArrayOfFreeBusyResponse
     */
    public $FreeBusyResponseArray;

    /**
     * SuggestionsResponse property
     *
     * SuggestionsResponseType
     */
    public $SuggestionsResponse;
}
