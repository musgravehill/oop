<?php

class Noty_SMS extends aNoty {

    use trHelperContact,
        trHelperString; //traits

    const VERSION = 'Noty_SMS_1.0';

    public function __get($name) {
        
    }

    public function __set($name, $value) {
        
    }

    public function __call($name, $arguments) {
        
    }

    protected function _getVersion() { //not private for polymorph
        return self::VERSION;
    }

    public function send($phone, $message) {
        if (!$phone) {
            $phone = $this->_getDefaultPhone(); //by trait trHelperContact
        }
        $message = self::_WDS($message); //by trait trHelperString
        echo "SEND '$message' TO '$phone'";
    }

}
