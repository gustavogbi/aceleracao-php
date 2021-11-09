<?php

$nomes = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];

if ($nomes[0] % 2 === 0) {
    echo "número par<br>";
}
else {
    throw new Exception("Número não válido para essa operação", 535);
}

?>
