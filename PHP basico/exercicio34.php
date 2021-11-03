<html>
    <head></head>
    <body>
        <?php
        $valores = array(0, 10, 20, 30, 40, 50, 60, 70, 80, 90);

        echo "<ul>";
        for ($i = sizeof($valores) - 1; $i >= 0; $i--) {
            echo "<li>" . $valores[$i] . "</li>";
        }
        echo "</ul>";
        ?>
    </body>
</html>
