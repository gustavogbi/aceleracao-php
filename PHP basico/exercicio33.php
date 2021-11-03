<html>
    <head>
        <title>Preços</title>
    </head>
    <body>
        <?php
        $precos = array(12.54, 45.75, 56.23, 54.21, 85.69, 45.12, 89.14, 78.12, 55.55, 44.87, 56.25, 16.70);

        foreach($precos as $preco) {
            $valor1 = $preco * 0.9;
            $valor2 = $preco * 0.95;
            $valor4 = $preco * 1.1;

            echo "<p>Forma da pagamento escolhida: À vista em dinheiro ou cheque, 10% de desconto.";
            echo "Preço original: R\$ {$preco} - Valor final: R\$ {$valor1}</p>";

            echo "<p>Forma da pagamento escolhida: À vista no cartão de crédito, 5% de desconto.";
            echo "Preço original: R\$ {$preco} - Valor final: R\$ {$valor2}</p>";

            echo "<p>Forma da pagamento escolhida: Em 2 vezes, preço normal de etiqueta sem juros.";
            echo "Preço original: R\$ {$preco} - Valor final: R\$ {$preco}</p>";

            echo "<p>Forma da pagamento escolhida: Em 3 vezes, preço normal de etiqueita mais juros de 10%.";
            echo "Preço original: R\$ {$preco} - Valor final: R\$ {$valor4}</p>";

            echo "<br><br>";

        }
        ?>
    </body>
</html>
