<?php

$var1 = 51;
$var2 = 90;
$var3 = 4;

while ($var1 <= 100 && $var2 <= 100 && $var3 <= 100) {
    if($var1 % 2 === 0) echo $var1 . "<br>";
    $var1++;

    if($var2 % 2 === 0) echo $var2 . "<br>";
    $var2++;

    if($var3 % 2 === 0) echo $var3 . "<br>";
    $var3++;
}

?>
