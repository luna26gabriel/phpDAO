<?php

spl_autoload_register(function($ClassName){

    $filename = $ClassName . ".php";

    if(file_exists($filename)){
        require_once($filename);
    }
})

?>