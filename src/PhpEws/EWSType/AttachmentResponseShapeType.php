<?php
/**
 * Definition of the AttachmentResponseShapeType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the AttachmentResponseShapeType type
 */
class AttachmentResponseShapeType extends EWSType
{
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
