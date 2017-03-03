<?php

abstract class aNoty implements iNoty {

    const VERSION = 'aNoty_1.0';

    private $_info = 'aNoty is abstract class';

    //abstract
    abstract public function send($address, $message);

    //полиморфизм — это способность обьекта использовать методы производного класса, который не существует на момент создания базового
    public function polymorph_getVersion() {
        return $this->getVersion();
    }

    public function getVersion() { //ONLY public can polymorph
        return self::VERSION;
    }

    //final
    final public function getInfo_aNoty() {
        return $this->_info;
    }

}