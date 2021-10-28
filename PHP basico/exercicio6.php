<html>
    <head></head>
    <body>
        <form action="exercicio6.php" method="POST">
            <span>Número 1 </span><input type="number" name="numero1"><br>
            <span>Número 2 </span><input type="number" name="numero2"><br>
            <span>Número 3 </span><input type="number" name="numero3"><br>
            <span>Número 4 </span><input type="number" name="numero4"><br>
            <span>Número 5 </span><input type="number" name="numero5"><br>
            <span>Número 6 </span><input type="number" name="numero6"><br>
            <br>
            <button id="media" type="submit">Calcular Média</button>
            <br>
        </form>
        <?php
        if (isset($_POST["numero1"]) and isset($_POST["numero2"]) and isset($_POST["numero3"])
        and isset($_POST["numero4"]) and isset($_POST["numero5"]) and isset($_POST["numero6"])) {
                $media = ( (int)$_POST["numero1"] + (int)$_POST["numero2"] + (int)$_POST["numero3"]
                + (int)$_POST["numero4"] + (int)$_POST["numero5"] + (int)$_POST["numero6"] ) / 6;
                echo "<strong>Média = {$media}";
        }
        else echo "Insira números em todos os campos.";
        ?>

    </body>
</html>
