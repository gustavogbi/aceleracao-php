<?php

$pastas = [];

for ($i=1; $i <= 150; $i++) { 
    if (is_dir("Pasta{$i}")) {

        if (sizeof(scandir("Pasta{$i}")) <= 2) {
            rmdir("Pasta{$i}");
            echo "Pasta{$i} excluída pois estava vazia.<br>";
        } else {
            $arquivos = scandir("Pasta{$i}");
            array_splice($arquivos, 0, 2);
            $pastas["Pasta{$i}"] = $arquivos;
        }
    }
}

echo "<pre>";
print_r($pastas);
echo "</pre>";

?>
