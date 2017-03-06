<?php

class A {

    public static function who() {
        echo 'PARENT';
    }

    public static function info() {
        self::who();
    }

}

class B extends A {

    public static function who() {
        echo 'CHILD';
    }

}

B::info();  // 'PARENT'  - хотя В переопределил who(), но уже было поздно


/*
 *
 * Позднее статическое связывание пытается устранить это ограничение
 * предоставляя ключевое слово, которое ссылается на класс, вызванный непосредственно в ходе выполнения.
 * Попросту говоря, ключевое слово, которое позволит вам ссылаться на B из test() в предыдущем примере.
 * Было решено не вводить новое ключевое слово, а использовать static, которое уже зарезервировано.
 */

class AA {

    public static function who() {
        echo 'PARENT';
    }

    public static function info() {
        static::who(); // Здесь действует позднее статическое связывание
    }

}

class BB extends AA {

    public static function who() {
        echo 'CHILD';
    }

}

BB::info();  // 'CHILD'   