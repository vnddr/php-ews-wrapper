<?php
/**
 * Definition of the PathToExtendedFieldType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the PathToExtendedFieldType type
 */
class PathToExtendedFieldType extends EWSType
{
    /**
     * DistinguishedPropertySetId property
     *
     * DistinguishedPropertySetType
     */
    public $DistinguishedPropertySetId;

    /**
     * PropertySetId property
     *
     * GuidType
     */
    public $PropertySetId;

    /**
     * PropertyTag property
     *
     * PropertyTagType
     */
    public $PropertyTag;

    /**
     * PropertyName property
     *
     * @var string
     */
    public $PropertyName;

    /**
     * PropertyId property
     *
     * @var integer
     */
    public $PropertyId;

    /**
     * PropertyType property
     *
     * MapiPropertyTypeType
     */
    public $PropertyType;
}
