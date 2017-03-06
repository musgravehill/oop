<?php

class Noty_SMS extends aNoty {

    use trHelperContact,
        trHelperString; //traits

    const MAN = 'Manual for Noty_SMS_1.0';

    //Overloading  перегрузка
    public function __get($name) {
        
    }

    //Overloading  перегрузка
    public function __set($name, $value) {
        
    }

    //Overloading  перегрузка
    public function __call($name, $arguments) {
        
    }

    protected function _getMan() { //not private for polymorph
        return self::MAN;
    }

    public function send($params) {
        if (!$params['phone']) {
            $params['phone'] = $this->_getDefaultPhone(); //by trait trHelperContact
        }
        $params['message'] = self::_WDS($params['message']); //by trait trHelperString

        $this->_servicePost->sms($params['phone'], $params['message']);

        return true;
    }

}
