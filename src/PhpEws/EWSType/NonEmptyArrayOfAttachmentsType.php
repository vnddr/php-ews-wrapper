<?php
/**
 * Definition of the NonEmptyArrayOfAttachmentsType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the NonEmptyArrayOfAttachmentsType type
 */
class NonEmptyArrayOfAttachmentsType extends EWSType
{
    /**
     * ItemAttachment property
     *
     * @var ItemAttachmentType
     */
    public $ItemAttachment;

    /**
     * FileAttachment property
     *
     * @var FileAttachmentType
     */
    public $FileAttachment;
}
