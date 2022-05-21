<?php

$num1 = 17;

function globalScope()
{

    $num1 = 10;

    echo $GLOBALS['num1'];
    echo "<br/>";
    echo $num1;
}

globalScope();
