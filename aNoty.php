<?php

/*
 * При наследовании от абстрактного класса,
 * все методы, помеченные абстрактными в родительском классе, должны быть определены в классе-потомке;
 * кроме того, область видимости этих методов должна совпадать (или быть менее строгой).
 * Например, если абстрактный метод объявлен как protected,
 * то реализация этого метода должна быть либо protected либо public, но никак не private.
 * Более того, сигнатуры методов должны совпадать,
 * т.е. контроль типов (type hint) и количество обязательных аргументов должно быть одинаковым.
 * К примеру, если в дочернем классе указан необязательный параметр,
 * которого нет в сигнатуре абстрактного класса,
 * то в данном случае конфликта сигнатур не будет.
 */

abstract class aNoty implements iNoty {

    const VERSION = 'aNoty_1.0';

    private $_info = 'aNoty is abstract class for sending messages';

    //abstract
    abstract public function send($address, $message);

    //полиморфизм — это способность обьекта использовать методы производного класса, который не существует на момент создания базового
    public function polymorph_getVersion() {
        return $this->_getVersion();
    }

    protected function _getVersion() { //ONLY public can polymorph
        return self::VERSION;
    }

    //final
    final public function getInfo() {
        return $this->_info;
    }

}