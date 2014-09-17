<?php
/**
 * Definition of the WellKnownResponseObjectType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the WellKnownResponseObjectType type
 */
class WellKnownResponseObjectType extends EWSType
{
    /**
     * ItemClass property
     *
     * ItemClassType
     */
    public $ItemClass;

    /**
     * Sensitivity property
     *
     * SensitivityChoicesType
     */
    public $Sensitivity;

    /**
     * Body property
     *
     * BodyType
     */
    public $Body;

    /**
     * Attachments property
     *
     * NonEmptyArrayOfAttachmentsType
     */
    public $Attachments;

    /**
     * InternetMessageHeaders property
     *
     * NonEmptyArrayOfInternetHeadersType
     */
    public $InternetMessageHeaders;

    /**
     * Sender property
     *
     * SingleRecipientType
     */
    public $Sender;

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
