<?php
namespace App;
class MagicClass{
    protected $test_get = 1;

    public function __construct() //вызывается при создании экземпляра класса (объекта).
    {
        $this->test = "abc";
        echo "__construct  ";
    }
    public function __destruct() // будет вызван при освобождении всех ссылок на определенный объект или при завершении скрипта.
    {
        echo "__destruct  ";
    }
    public function __call($a,$b) //запускается при вызове недоступных методов в контексте объект.
    {
        echo "__call  ";
    }
    public static function __callStatic($a,$b) //запускается при вызове недоступных методов в статическом контексте.
    {
        echo "__callStatic  ";
    }

    public function __get($a)//будет выполнен при чтении данных из недоступных (защищенных или приватных) или несуществующих свойств.
    {
        echo "__get  ";
    }

    public function __set($a, $b)//будет выполнен при записи данных в недоступные (защищенные или приватные) или несуществующие свойства.
    {
        echo "__set  ";
    }

    public function __isset($a)//будет выполнен при использовании isset() или empty() на недоступных (защищенных или приватных) или несуществующих свойствах.
    {
        echo "__isset  ";
    }
    
    public function __unset($a)//будет выполнен при вызове unset() на недоступном (защищенном или приватном) или несуществующем свойстве.
    {
        echo "__unset  ";
    }

    public function __sleep()//очищает объект и возвращает массив с именами всех переменных этого объекта, которые должны быть сериализованы.
    {
        echo "__sleep  ";
        return [];
    }

    public function __wakeup()//восстанавливает любые ресурсы, которые может иметь объект
    {
        echo "__wakeup  ";
    }

    public function __serialize():array//должна создать и вернуть ассоциативный массив пар ключ/значение, которые представляют сериализованную форму объекта (выполняется при “serialize()”)
    {
        echo "__serialize  ";
        return [];       
    }

    public function __unserialize()//возвращает восстановленный массив, который был возвращен из __serialize().
    {
        echo "__unserialize  ";
        return [];
    }

    public function __tostring()//позволяет классу решать, как он должен реагировать при преобразовании в строку.
    {
        echo "__tostring()  ";
        return ' ';
    }

    public function __invoke()//вызывается, когда скрипт пытается выполнить объект как функцию.
    {
        echo "__invoke  ";
    }

    public function __clone()//при клонировании объекта.
    {
        echo "__clone  ";
    }
}






?>