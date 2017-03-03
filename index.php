<?php

/*
  В то время как функция __autoload() также может быть использована для автоматической загрузки классов и интерфейсов,
 * следует отдать предпочтение spl_autoload_register(),
 * потому, что она предоставляет гораздо более гибкую альтернативу,
 * позволяя регистрировать необходимое количество автозагрузчиков,
 * например для корректной работы сторонних библиотек.
 * В связи с этим, использование __autoload() не рекомендуется и она может быть объявлена устаревшей в будущем.
 */
spl_autoload_register(
        function ($class_name) {
            include $class_name . '.php';
        }
);

$servicePost = new servicePost_unisender();
$notySMS = new Noty_SMS($servicePost);

echo $notySMS->getMan();
echo '<br>';
echo $notySMS->aboutNoty();
echo '<br>';
$notySMS->send(array(
    'phone' => '',
    'message' => 'Hello, my dear friend!',
));



