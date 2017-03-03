<?php

class myNoty extends aNoty {

    const VERSION = 'myNoty_1.0';

    public function __get($name) {
        
    }

    public function __set($name, $value) {
        
    }

    public function __call($name, $arguments) {
        
    }

    public function getVersion() { //ONLY public can polymorph
        return self::VERSION;
    }

    public function send($address, $message) {

    }

}
