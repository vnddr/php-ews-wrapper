<?php
/**
 * Definition of the PostItemType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the PostItemType type
 */
class PostItemType extends EWSType
{
    /**
     * ConversationIndex property
     *
     * base64Binary
     */
    public $ConversationIndex;

    /**
     * ConversationTopic property
     *
     * @var string
     */
    public $ConversationTopic;

    /**
     * From property
     *
     * SingleRecipientType
     */
    public $From;

    /**
     * InternetMessageId property
     *
     * @var string
     */
    public $InternetMessageId;

    /**
     * IsRead property
     *
     * @var boolean
     */
    public $IsRead;

    /**
     * PostedTime property
     *
     * dateTime
     */
    public $PostedTime;

    /**
     * References property
     *
     * @var string
     */
    public $References;

    /**
     * Sender property
     *
     * SingleRecipientType
     */
    public $Sender;
}
