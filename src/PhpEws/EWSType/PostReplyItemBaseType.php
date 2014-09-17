<?php
/**
 * Definition of the PostReplyItemBaseType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the PostReplyItemBaseType type
 */
class PostReplyItemBaseType extends EWSType
{
    /**
     * Subject property
     *
     * @var string
     */
    public $Subject;

    /**
     * Body property
     *
     * BodyType
     */
    public $Body;

    /**
     * ReferenceItemId property
     *
     * ItemIdType
     */
    public $ReferenceItemId;

    /**
     * ObjectName property
     *
     * @var string
     */
    public $ObjectName;
}
