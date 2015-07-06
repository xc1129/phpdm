<?php

define('BASEDIR',__DIR__);
include BASEDIR.'/Mydm/Loader.php';
spl_autoload_register('\\Mydm\\Loader::autoload');

/*
Mydm\Object::test();
App\Controller\Home\Index::test();

echo "\n";
$obj=new Mydm\Object;
$obj->title="hello";
echo $obj->title;
echo "\n";
echo $obj->testmc("hello",123);
echo Mydm\Object::testmcs("hello1",123);
echo $obj;
echo $obj("test1");
 */

$db=Mydm\Database::getInstance();
