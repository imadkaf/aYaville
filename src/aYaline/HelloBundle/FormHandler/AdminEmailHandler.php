<?php
// src/aYaline/HelloBundle/FormHandler/AdminEmailHandler.php
namespace aYaline\HelloBundle\FormHandler;
use Heliopsis\eZFormsBundle\FormHandler\SwiftMailer\AbstractHandler;
use aYaline\HelloBundle\Model\Feedback;
class AdminEmailHandler extends AbstractHandler
{
/**
* @var string
*/
private $recipientEmail;
/**
* @var string
*/
private $recipientName;
/**
* @param $email
* @param string $name
*/
public function setRecipient( $email, $name = '' )
{
$this->recipientEmail = $email;
$this->recipientName = $name;
}
/**
* @return void
*/
protected function addRecipients( \Swift_Message $message )
{
if ( !$this->recipientEmail )
{
throw new \RuntimeException( "Recipient unknown" );
}
$message->addTo( $this->recipientEmail, $this->recipientName );
}
/**
* @return mixed
*/
protected function addSender( \Swift_Message $message )
{
$data = $this->getData();
if ( !$data instanceof Feedback )
{
throw new \RuntimeException( "Data should be of the feedback type" );
}
$message->addFrom( $data->email, $data->fullName );
}
/**
* @return array
*/
protected function getTemplateParameters()
{
return array(
'subject' => $this->getSubject(),
);
}
/**
* @param \Swift_Message $message
*/
protected function addAttachments( \Swift_Message $message )
{
}
} 