<html>
    <head></head>
    <body>
        <form action="exercicio8.php" method="POST">
            <span>Insira um valor: </span><input type="number" name="valor"><br>
            <button id="media" type="submit">Checar</button><br>
        </form>
        <?php
        if (isset($_POST['valor'])) {
            $valor = (int)$_POST['valor'];
            if ($valor < 0) echo "<strong>Negativo</strong>";
            else if ($valor == 0) echo "<strong>Zero</strong>";
            else if ($valor > 0) echo "<strong>Positivo</strong>";
        }
        ?>
    </body>
</html>
