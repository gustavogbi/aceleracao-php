<?php
$var1 = NULL;
$var2 = "teste";
$var3 = 5;
$var4 = 1.1;
$var5 = array('teste', NULL, 1, 5);

if (is_null($var1)) echo "var1 é nula<br>";
else if (is_array($var1)) var_export($var1);
echo "<br>";

if (is_null($var2)) echo "var2 é nula<br>";
else if (is_array($var2)) var_export($var2);
echo "<br>";

if (is_null($var3)) echo "var3 é nula<br>";
else if (is_array($var3)) var_export($var3);
echo "<br>";

if (is_null($var4)) echo "var4 é nula<br>";
else if (is_array($var4)) var_export($var4);
echo "<br>";

if (is_null($var5)) echo "var5 é nula<br>";
else if (is_array($var5)) var_export($var5);
echo "<br>";


?>
