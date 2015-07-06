<?php

namespace Mydm;

class Factory
{
    static function createDatabase()
    {
        $db=new Database;
        return $db;
    }
}
