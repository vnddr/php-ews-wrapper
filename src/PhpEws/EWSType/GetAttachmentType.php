<?php
/**
 * Definition of the GetAttachmentType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the GetAttachmentType type
 */
class GetAttachmentType extends EWSType
{
    /**
     * AttachmentShape property
     *
     * AttachmentResponseShapeType
     */
    public $AttachmentShape;

    /**
     * AttachmentIds property
     *
     * NonEmptyArrayOfRequestAttachmentIdsType
     */
    public $AttachmentIds;
}
