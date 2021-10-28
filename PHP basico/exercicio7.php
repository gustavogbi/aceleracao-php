<html>
    <head></head>
    <body>
        <form action="exercicio7.php" method="POST">
            <span>Nome </span><input type="text" name="nome"><br>
            <span>Nota 1 (peso 2) </span><input type="number" name="nota1">
            <span>Nota 2 (peso 3) </span><input type="number" name="nota2">
            <span>Nota 3 (peso 5) </span><input type="number" name="nota3"><br>
            <button id="media" type="submit">Calcular Média</button><br>
        </form>
        <?php
        if (isset($_POST["nota1"]) and isset($_POST["nota2"]) and isset($_POST["nota3"]) and isset($_POST["nome"])) {
                $media = ((int)$_POST["nota1"] * 2 + (int)$_POST["nota2"] * 3 + (int)$_POST["nota3"]) * 5 / 60;
                echo "<strong>Média de {$_POST['nome']} = {$media}";
        }
        else echo "Insira números em todos os campos.";
        ?>

    </body>
</html>
