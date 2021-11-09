<?php

setcookie("cookie1", "3fd6b90411449ec718b1fa929c1ba72c52d89f2540c8b3a56ca9cb95fb63d00d", time() + 1 * 60 * 60);
setcookie("cookie2", "dea377cac0fb2c6bfe8793ae282bf008b65b3aef6687d315200740ffa0847b4f", time() + 1 * 60 * 60);
setcookie("cookie3", "ea3d5e5a5c627788779ba92e2f95260ea27e5653801cead2e7cd91351bb3b526", time() + 2 * 60 * 60);
setcookie("cookie4", "9ea2f240c6fbaf4c9bdafbae7b5f1940d36f0ee169798363dba3b8120ee33812", time() + 2 * 60 * 60);

$cookiesArray = [];
$cookiesArray['cookie1'] = $_COOKIE['cookie1'];
$cookiesArray['cookie2'] = $_COOKIE['cookie2'];
$cookiesArray['cookie3'] = $_COOKIE['cookie3'];
$cookiesArray['cookie4'] = $_COOKIE['cookie4'];

$cookiesJson = json_encode($cookiesArray);

$arquivo = fopen("cookies.txt", "w+");
fwrite($arquivo, $cookiesJson);
fclose($arquivo);

echo "<a href=\"cookies.txt\">cookies.txt</a>";

?>
