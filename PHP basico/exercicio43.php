<?php

$scanArray = scandir("imagens");

# Remove as duas primeiras entradas do array ['.', '..']
array_splice($scanArray, 0, 2);

foreach ($scanArray as $imageName) {
    #print($imageName);
    echo "<pre>";
    print_r(pathinfo('./' . $imageName));
    echo "</pre>";
}

?>
