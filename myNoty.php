<?php

class myNoty extends Noty {

    function sendSms() {
        parent::sendSms();
        echo 'ok';
    }

    public function __get($name) {
        
    }

    public function __set($name, $value) {
        
    }

    public function __call($name, $arguments) {
        
    }
}
