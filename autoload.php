<?php

function __autoload($class) {
   $class_name = strtolower($class);
   $path       = "{$class}.php";
   if (file_exists($path)) {
       require_once($path);
   } else {
       die("The file {$class}.php could not be found!");
   }
}