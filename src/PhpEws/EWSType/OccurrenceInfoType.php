<?php
/**
 * Definition of the OccurrenceInfoType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the OccurrenceInfoType type
 */
class OccurrenceInfoType extends EWSType
{
    /**
     * ItemId property
     *
     * ItemIdType
     */
    public $ItemId;

    /**
     * Start property
     *
     * dateTime
     */
    public $Start;

    /**
     * End property
     *
     * dateTime
     */
    public $End;

    /**
     * OriginalStart property
     *
     * dateTime
     */
    public $OriginalStart;
}
