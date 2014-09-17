<?php
/**
 * Definition of the ArrayOfAttendeeConflictData type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the ArrayOfAttendeeConflictData type
 */
class ArrayOfAttendeeConflictData extends EWSType
{
    /**
     * UnknownAttendeeConflictData property
     *
     * UnknownAttendeeConflictData
     */
    public $UnknownAttendeeConflictData;

    /**
     * IndividualAttendeeConflictData property
     *
     * IndividualAttendeeConflictData
     */
    public $IndividualAttendeeConflictData;

    /**
     * TooBigGroupAttendeeConflictData property
     *
     * TooBigGroupAttendeeConflictData
     */
    public $TooBigGroupAttendeeConflictData;

    /**
     * GroupAttendeeConflictData property
     *
     * GroupAttendeeConflictData
     */
    public $GroupAttendeeConflictData;
}
