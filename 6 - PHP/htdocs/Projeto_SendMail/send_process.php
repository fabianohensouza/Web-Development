<?php

    class Message {
        private $to = null;
        private $subject = null;
        private $message = null;

        public function __get($attr) {
            return $this->$attr;
        } 

        public function __set($attr, $value) {
            $this->$attr = $value;
        } 

        public function validateMessage() {
            if(empty($this->to) || empty($this->subject) || empty($this->message)) {
                return false;
            }
            return true;
        } 
    }

    $message = new Message();

    $message->__set('to', $_POST['to']);
    $message->__set('subject', $_POST['subject']);
    $message->__set('message', $_POST['message']);

    if($message->validateMessage()) {
        echo 'Mensagem válida.';
    } else {
        
        echo 'Mensagem inválida.';
    }
    
?>