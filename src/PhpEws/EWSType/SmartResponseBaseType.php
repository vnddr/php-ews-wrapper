<?php
/**
 * Definition of the SmartResponseBaseType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the SmartResponseBaseType type
 */
class SmartResponseBaseType extends EWSType
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
     * ToRecipients property
     *
     * ArrayOfRecipientsType
     */
    public $ToRecipients;

    /**
     * CcRecipients property
     *
     * ArrayOfRecipientsType
     */
    public $CcRecipients;

    /**
     * BccRecipients property
     *
     * ArrayOfRecipientsType
     */
    public $BccRecipients;

    /**
     * IsReadReceiptRequested property
     *
     * @var boolean
     */
    public $IsReadReceiptRequested;

    /**
     * IsDeliveryReceiptRequested property
     *
     * @var boolean
     */
    public $IsDeliveryReceiptRequested;

    /**
     * From property
     *
     * SingleRecipientType
     */
    public $From;

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
