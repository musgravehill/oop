<?php

abstract class aNoty implements iNoty {

    const VERSION = '';
    private $_info = 'class aNoty is abstract';

    abstract public function send();

    final public function getVersion() {
        return self::VERSION;
    }

    //полиморфизм — это способность обьекта использовать методы производного класса, который не существует на момент создания базового
    private function polymorph_getInfo(){

    }

    public function getInfo() {
        return $this->_info;
    }
}