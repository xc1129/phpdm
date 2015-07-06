<?php

namespace Mydm;

class Loader
{
    static function autoload($class)
    {
        require BASEDIR.'/'.str_replace('\\','/',$class).'.php';
    }
}
