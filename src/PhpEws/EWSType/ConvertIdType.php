<?php
/**
 * Definition of the ConvertIdType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the ConvertIdType type
 */
class ConvertIdType extends EWSType
{
    /**
     * SourceIds property
     *
     * NonEmptyArrayOfAlternateIdsType
     */
    public $SourceIds;

    /**
     * DestinationFormat property
     *
     * IdFormatType
     */
    public $DestinationFormat;
}
