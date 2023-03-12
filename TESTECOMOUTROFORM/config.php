<?php

$print= function($class){
    if (file_exists('classes/'.$class.'.php')) {
        include_once('classes/'.$class.'.php');

    }spl_autoload_register($print);

};


//$conn = new mysqli("localhost","root","","DB_HAIR_CHANCE");


?>