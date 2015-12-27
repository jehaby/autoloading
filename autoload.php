<?php


//require_once 'vendor/autoload.php';


///**
// * Процедура для автоматической загрузки файлов с описанием искомого класса
// *
// * @param string $className название класса
// */
function oldAutoload ($className) {
    $file = str_replace('\\', '/', str_replace('_', '/', ltrim($className, '\\')));

    // Примочка чтобы учесть регистр папки "class"
    if (substr($file, 0, 1) == "C") {
        $file = "c" . substr($file, 1);
    }

    // Если файл не найден, пытаемся найти его в ThirdParty

    if (!file_exists("{$file}.php")) {
        $file = 'class/ThirdParty/' . $file;
    }

    if(file_exists("{$file}.php")){
        include_once "{$file}.php";
    }
};

require_once 'vendor/autoload.php';

spl_autoload_register('oldAutoload', true, true);

