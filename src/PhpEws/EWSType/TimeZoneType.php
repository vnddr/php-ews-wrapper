<?php
/**
 * Definition of the TimeZoneType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the TimeZoneType type
 */
class TimeZoneType extends EWSType
{
    /**
     * BaseOffset property
     *
     * duration
     */
    public $BaseOffset;

    /**
     * Standard property
     *
     * TimeChangeType
     */
    public $Standard;

    /**
     * Daylight property
     *
     * TimeChangeType
     */
    public $Daylight;

    /**
     * TimeZoneName property
     *
     * @var string
     */
    public $TimeZoneName;
}
