<?php
/**
 * Definition of the GetUserAvailabilityRequestType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the GetUserAvailabilityRequestType type
 */
class GetUserAvailabilityRequestType extends EWSType
{
    /**
     * TimeZone property
     *
     * SerializableTimeZone
     */
    public $TimeZone;

    /**
     * MailboxDataArray property
     *
     * ArrayOfMailboxData
     */
    public $MailboxDataArray;

    /**
     * FreeBusyViewOptions property
     *
     * FreeBusyViewOptionsType
     */
    public $FreeBusyViewOptions;

    /**
     * SuggestionsViewOptions property
     *
     * SuggestionsViewOptionsType
     */
    public $SuggestionsViewOptions;
}
