<?php

for ($i=1; $i <= 150; $i++) { 
    @mkdir("Pasta" . $i);
    echo "Pasta{$i} criada<br>";
}

$dataAtual = date("d-m-H-i-s", time());

for ($i=1; $i <= 150; $i += 2) { 
    if (fopen("Pasta{$i}/log-{$dataAtual}.txt", "w+")) {
        echo "Pasta{$i}/log-{$dataAtual}.txt criado com sucesso<br>";
        $info = pathinfo("Pasta{$i}/log-{$dataAtual}.txt");
        echo "<pre>";
        print_r($info);
        echo "</pre>";
    }
}

?>
