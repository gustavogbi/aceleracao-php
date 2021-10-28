<html>
    <head></head>
    <body>
        <form action="exercicio9.php" method="POST">
            <h1>Tabuada</h1>
            <span>Número: </span><input type="number" name="numero"><br><br>
            <button type="submit">Calcular</button><br>
        </form>
        <?php
        if (isset($_POST['numero'])) {
            $numero = (int)$_POST['numero'];
            for($i = 1; $i <= 10; $i++) {
                $resultado = $i * $numero;
                echo "{$i} x {$numero} = {$resultado}<br>";
            }
        }
        ?>
    </body>
</html>
