<?php
function myAutoLoader($class)
{
    require $class . '.php';
}

spl_autoload_register('myAutoLoader');