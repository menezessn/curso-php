<?php
$x = 10;
$y = 15;

function soma(){
    echo $GLOBALS ['x'] + $GLOBALS ['y'];
}

echo $_SERVER['PHP_SELF']. "</br>";
echo $_SERVER['SERVER_NAME'];
