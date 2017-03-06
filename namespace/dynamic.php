<?php

namespace NS\Test\Dynamic;

class TestClass {

    function __construct() {
        echo __METHOD__. '<br>';
    }

}

echo '__NAMESPACE__= '. __NAMESPACE__. '<br>';
$className = 'NS\Test\Dynamic\TestClass'; // просто 'TestClass' дает ошибку
$obj = new $className;
$obj = new TestClass;


$a = "dangerous\name"; // "***\n**" - это переход на новую строку внутри строки с двойными кавычками!
$a = "dangerous\\name"; //так безопасно
$a = 'dangerous\name';  //так безопасно
