<?php
namespace App;
require_once 'vendor/autoload.php';


$const = new magicClass; //Вызов __construct
$const->const(); //Вызываем недоступный метод, запускаем "__call" 
MagicClass::const(); //Вызываем недоступный метод в статическом контексте, запускаем "__callStatic"
$const1 = clone $const; //Клонируем объект, вызываем "_clone"
$get = new magicClass("Привет");
echo $get;//Выводим текст, вызываем "__tostring"
echo $get->test_get;//Читаем данные из защищённого поля, вызываем "__get"
$invoke = new magicClass;
$invoke(5); //Обращаемся к переменной как к функции, вызываем "__invoke"
isset($get->test_get); //Обращаемся "__isset" командой к защищённому полю
unset($get->test_get); //Обращаемся "__unset" командой к защищённому полю
$serialized_array = [1,2,3];
$original_array=serialize($invoke);//Выполняем сериализацию ранее созданного элемента класса, вызываем "__sleep"
$original_array1=unserialize($original_array);//Конвертируем сериализованную переменную обратно в значение PHP, вызываем "__wakeup"   




