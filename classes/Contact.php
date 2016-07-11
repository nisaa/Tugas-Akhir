<?php
namespace App;

use PDO;
use Exception;

class Contact
{
    private $name;
    private $email;
    private $subject;
    private $message;
    private $to = 'demo@localhost.com';

    public function __construct($name = "", $email = "", $subject = "", $message = "")
    {
        $this->setName($name);
        $this->setEmail($email);
        $this->setSubject($subject);
        $this->setMessage($message);
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getSubject()
    {
        return $this->subject;
    }

    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function sendEmail()
    {
        // To send HTML mail, the Content-type header must be set
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        // Additional headers
        $headers .= 'From ' . $this->name . $this->email . "\r\n";

        if (mail('demo@localhost.com', $this->subject, $this->message, $headers)) {
            return 'Pesan telah terkirim';
        } else {
            $this->error = 'Server can not sending email';

            return false;
        }
    }
}
