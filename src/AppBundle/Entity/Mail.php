<?php

namespace AppBundle\Entity;

Class Mail{

    private $_to = 'sebastien.vallet89@gmail.com';
    private $_subject = 'Message envoyé depuis le portfolio <trodix.ddns.net>';
    private $_message;
    private $_headers = 'MIME-Version: 1.0' . "\r\n" .
                        'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
                        'From: trodix.ddns.net';

    /**
     * Constructeur
     */
	public function __construct(){
    }

    public function to(){
        return $this->_to;
    }

    public function setTo($to){
        $this->_to = $to;
    }

    public function subject(){
        return $this->_subject;
    }

    public function setSubject($subject){
        $this->_subject = $subject;
    }

    public function message(){
        return $this->_message;
    }

    public function setMessage($message){
        $this->_message = $message;
    }

    public function headers(){
        return $this->_headers;
    }

    public function setHeaders($headers){
        $this->_headers = $headers;
    }

    public function appendMessage($lignes){
        foreach($lignes as $ligne){
            $this->_message .= "<br/>" . $ligne;
        }
    }

    /**
     * Permet d'envoyer message
     *
     * @param [string] $message
     * @return void
     */
    function envoyer(){
        mail($this->_to, $this->_subject, $this->_message, $this->_headers);
    }
}