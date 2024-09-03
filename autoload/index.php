<?php
spl_autoload_register(function($class){
    if(file_exists('classes/'.$class.'.php')) {
        require 'classes/'.$class.'.php';
    }
});

$m = new Matematica();
echo $m->somar(8,10);

