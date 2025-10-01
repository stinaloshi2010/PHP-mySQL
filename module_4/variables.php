<?php
/*
$x = 5;

function localvariables(){
    $y = 10;
    echo $y;
}

localvariables();
echo" \n, $x";

"<br>"
*/

$x = 5;
$y = 7;
function sum(){
    global $x, $y;
    $y = $x + $y;
}
sum();
echo $y;

?>