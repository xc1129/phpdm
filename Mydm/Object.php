<?php

namespace Mydm;

class Object
{
    protected $array=array();

    static function test()
    {
        echo __METHOD__;
    }

    function __set($key,$value)
    {
        $this->array[$key]=$value;
    }

    function __get($key)
    {
        return $this->array[$key];
    }

    function __call($func,$param)
    {
        return "magic function\n";
    }

    static function __callStatic($func,$param)
    {
        return "static call\n";
    }

    function __toString()
    {
        echo "oh";
        return __CLASS__;
    }

    function __inVoke($param)
    {
        var_dump($param);
        return "invoke";
    }
}
