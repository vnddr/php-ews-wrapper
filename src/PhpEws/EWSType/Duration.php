<?php
/**
 * Definition of the Duration type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the Duration type
 */
class Duration extends EWSType
{
    /**
     * StartTime property
     *
     * dateTime
     */
    public $StartTime;

    /**
     * EndTime property
     *
     * dateTime
     */
    public $EndTime;
}
