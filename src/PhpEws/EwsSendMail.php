<?php

namespace PhpEws;

use PhpEws\EWSType as TYPE;
use PhpEws\ExchangeWebServices;

/**
 * Description of EwsSendMail
 *
 * @author François Greze
 */
class EwsSendEmail
{

    public function __construct()
    {
        $this->sendEmail();
    }

    protected function sendEmail($_server = null, $_username = null, $_password = null)
    {
        $server = $_server;
        $username = $_username;
        $password = $_password;


        $ews = new ExchangeWebServices($server, $username, $password);

        $msg = new TYPE\MessageType();

        $toAddresses = array();
        $toAddresses[0] = new TYPE\EmailAddressType();
        $toAddresses[0]->EmailAddress = 'admin@devmeup.net';
        $toAddresses[0]->Name = 'Test d\'email';

        // Multiple recipients
        //$toAddresses[1] = new TYPE\EmailAddressType();
        //$toAddresses[1]->EmailAddress = 'sara.smith@domain.com';
        //$toAddresses[1]->Name = 'Sara Smith';

        $msg->ToRecipients = $toAddresses;

        $fromAddress = new TYPE\EmailAddressType();
        $fromAddress->EmailAddress = 'admin@devmeup.net';
        $fromAddress->Name = 'Administrateur';

        $msg->From = new TYPE\SingleRecipientType();
        $msg->From->Mailbox = $fromAddress;

        $msg->Subject = 'Test email message';

        $msg->Body = new TYPE\BodyType();
        $msg->Body->BodyType = 'HTML';
        $msg->Body->_ = '<p style="font-size: 18px; font-weight: bold;">Test email message from php ews library.</p>';

        $msgRequest = new TYPE\CreateItemType();
        $msgRequest->Items = new TYPE\NonEmptyArrayOfAllItemsType();
        $msgRequest->Items->Message = $msg;
        $msgRequest->MessageDisposition = 'SendAndSaveCopy';
        $msgRequest->MessageDispositionSpecified = true;

        $response = $ews->CreateItem($msgRequest);
        var_dump($response);
    }

}
