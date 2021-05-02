<?php
function __autoload($class){
    require "C:/xampp/htdocs/admin/OOP/autoloading-YB/". $class. ".php";
}
$obj = new first();
$obj = new secound();
$obj = new third();