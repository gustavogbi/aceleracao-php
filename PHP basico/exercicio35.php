<html>
    <head></head>
    <body>
        <p>
            <?php
            $contribuintes = array(
                array(
                    "Nome" => "Fulano",
                    "CPF" => "0000000000",
                    "Dependentes" => 1,
                    "Renda" => 1550.90
                ),
                array(
                    "Nome" => "Ciclano",
                    "CPF" => "0000000000",
                    "Dependentes" => 2,
                    "Renda" => 2451.88
                ),
                array(
                    "Nome" => "Beltrano",
                    "CPF" => "0000000000",
                    "Dependentes" => 3,
                    "Renda" => 4621.54
                )
            );

            foreach($contribuintes as $contribuinte) {
                $nome = $contribuinte["Nome"];
                $cpf = $contribuinte["CPF"];
                $dependentes = $contribuinte["Dependentes"];
                $renda = $contribuinte["Renda"];
                $imposto = 0;

                if ($renda < 2000) $imposto = $renda;
                else if ($renda < 3000) $imposto = $renda * 0.05;
                else if ($renda < 5000) $imposto = $renda * 0.10;

                echo "Nome: {$nome}. CPF: {$cpf}. Depdendentes: {$dependentes}. Renda: {$renda}. Imposto: {$imposto}.<br><br>";
            }
            
            ?>
        </p>
    </body>
</html>
