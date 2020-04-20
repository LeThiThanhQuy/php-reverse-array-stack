<?php
include "Reverse.php";

$reverse = new Reverse();
$reverse->push("I");
$reverse->push("L");
$reverse->push("O");
$reverse->push("V");
$reverse->push("E");
$reverse->push("Y");
$reverse->push("O");
$reverse->push("U");
$arr = [];
for ($i = 0; $i<8;$i++){
    array_push($arr,$reverse->pop());
}
echo "<pre>";
print_r($arr);
echo "</pre>";