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

    private $_aboutNoty = 'aNoty is abstract class';
    protected $_servicePost;

    //abstract
    abstract public function send($params);

    public function __construct($servicePost) {
        $this->_servicePost = $servicePost;
        return true;
    }

    //полиморфизм — это способность обьекта использовать методы производного класса, который не существует на момент создания базового
    public function getMan() {
        return $this->_getMan(); //функция будет реализована в наследнике
    }

    //final
    final public function aboutNoty() {
        return $this->_aboutNoty;
    }

}