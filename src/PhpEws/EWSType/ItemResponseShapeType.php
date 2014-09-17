<?php
/**
 * Definition of the ItemResponseShapeType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the ItemResponseShapeType type
 */
class ItemResponseShapeType extends EWSType
{
    /**
     * BaseShape property
     *
     * DefaultShapeNamesType
     */
    public $BaseShape;

    /**
     * IncludeMimeContent property
     *
     * @var boolean
     */
    public $IncludeMimeContent;

    /**
     * BodyType property
     *
     * BodyTypeResponseType
     */
    public $BodyType;

    /**
     * AdditionalProperties property
     *
     * NonEmptyArrayOfPathsToElementType
     */
    public $AdditionalProperties;
}
