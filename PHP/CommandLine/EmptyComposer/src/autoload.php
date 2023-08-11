<?php
spl_autoload_register(function ($classname)
{
    $path = explode('\\', $classname);
    $len = count($path);
    include 'src/' . $path[$len - 1] . '.php';
});