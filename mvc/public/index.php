<?php

function __autoload($class_name)
{
    if(file_exists("../lib/{$class_name}.php")){
        require_once "../lib/{$class_name}.php";
    } elseif (stristr($class_name, "controller")) {
        $module = stristr($class_name, "admin_") ? "admin" : "default";
        $class_name = str_ireplace("admin_", "", $class_name);

        if(file_exists("../app/modules/$module/controllers/{$class_name}.php")){
            require_once "../app/modules/$module/controllers/{$class_name}.php";
        }
    } else {
        throw new Exception("Class $class_name not found");
    }
}

App::run($_SERVER['REQUEST_URI']);