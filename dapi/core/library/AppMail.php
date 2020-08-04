<?php

require_once __DIR__ . '/swiftmailer/lib/swift_required.php';

use \Phalcon\Mvc\User\Component,
    \Phalcon\Mvc\View;

class AppMail extends Component{

    protected $_transport;

    /*
     * sends email after register
     * 
     * @param string $to
     * @param string $subject
     * @param string $message
     *
     */
    
    ### Added on 13-JUN-2019, To Send Mail. Starts Here. ###
    public function sendMail($email,$subject, $message){
        $msg=$message;
        $mailSettings = $this->config->mail;
        #print_r($mailSettings);
        // Create the message
        //echo $mailSettings->smtp->server," ",$mailSettings->smtp->port," ",$mailSettings->smtp->security," ",$mailSettings->fromEmail," ", $mailSettings->fromName;
        $message = Swift_Message::newInstance()
            ->setSubject($subject)
            
            ->setTo(array($email))
            ->setFrom(array(
                $mailSettings->fromEmail => $mailSettings->fromName
            ))
            ->setBody($message, 'text/html');

            if (!$this->_transport) {
                $this->_transport = Swift_SmtpTransport::newInstance(
                    $mailSettings->smtp->server,
                    $mailSettings->smtp->port,
                    $mailSettings->smtp->security
                )
                    ->setUsername($mailSettings->smtp->username)
                    ->setPassword($mailSettings->smtp->password);
            }
            // Create the Mailer using your created Transport
            $emailsentdatetime = date('Y-m-d H:i:s');
            $createddatatime = date('Y-m-d H:i:s');
            #$emaillogobj = new Templatemaillog();
            
            $mailer = Swift_Mailer::newInstance($this->_transport);
            $emailstatus = $mailer->send($message);
         
            return $emailstatus;
    }
    ### To Send Mail. Ends Here. ###


    /*
     * sends email after register
     * 
     * @param string $to
     * @param string $subject
     * @param string $message
     *
     */
    
    public function sendadmincronrunreportMail($subject, $message){
        $msg=$message;
        $mailSettings = $this->config->mail;
        #print_r($mailSettings);
        // Create the message
        echo $mailSettings->smtp->server," ",$mailSettings->smtp->port," ",$mailSettings->smtp->security," ",$mailSettings->fromEmail," ", $mailSettings->fromName;
        $message = Swift_Message::newInstance()
            ->setSubject($subject)
            
            ->setTo(array('chetan.nage@brand-scapes.com'))
            ->setFrom(array(
                $mailSettings->fromEmail => $mailSettings->fromName
            ))
            ->setBody($message, 'text/html');

            if (!$this->_transport) {
                $this->_transport = Swift_SmtpTransport::newInstance(
                    $mailSettings->smtp->server,
                    $mailSettings->smtp->port,
                    $mailSettings->smtp->security
                )
                    ->setUsername($mailSettings->smtp->username)
                    ->setPassword($mailSettings->smtp->password);
            }
            // Create the Mailer using your created Transport
            $emailsentdatetime = date('Y-m-d H:i:s');
            $createddatatime = date('Y-m-d H:i:s');
            #$emaillogobj = new Templatemaillog();
            
            $mailer = Swift_Mailer::newInstance($this->_transport);
            $emailstatus = $mailer->send($message);
         
            return $emailstatus;
    }
}
