<html>
    <head>
        <title>Cardápio</title>
        <?php require_once("cardapioFunctions.php"); ?>
    </head>
    <body>
        <form action="exercicio32.php" method="POST">
            <h1>Cardápio</h1>
            <span>Salgados:</span>
            <ul>
                <?php foreach ($salgados as $salgado) echo "<li>{$salgado}</li>"; ?>
            </ul>
            <span>Acompanhamentos:</span>
            <ul>
                <?php foreach ($acompanhamentos as $acompanhamento) echo "<li>{$acompanhamento}</li>"; ?>
            </ul>
            <span>Refrigerantes:</span>
            <ul>
                <?php foreach ($refrigerantes as $refrigerante) echo "<li>{$refrigerante}</li>"; ?>
            </ul>
            <button type="submit">Calcular</button><br>
        </form>
        <?php
        require_once("cardapioFunctions.php");

        if (sizeof($salgados) < 3) {
            echo "A categoria salgados não obedece a quantidade mínima de itens, cadastre mais itens.";
        } else if (sizeof($salgados) > 6) {
            echo "A categoria salgados não obedece a quantidade máxima de itens, remova mais itens.";
        }

        if (sizeof($acompanhamentos) < 3) {
            echo "A categoria acompanhamentos não obedece a quantidade mínima de itens, cadastre mais itens.";
        } else if (sizeof($acompanhamentos) > 6) {
            echo "A categoria acompanhamentos não obedece a quantidade máxima de itens, remova mais itens.";
        }

        if (sizeof($refrigerantes) < 3) {
            echo "A categoria refrigerantes não obedece a quantidade mínima de itens, cadastre mais itens.";
        } else if (sizeof($refrigerantes) > 6) {
            echo "A categoria refrigerantes não obedece a quantidade máxima de itens, remova mais itens.";
        }
        ?>
    </body>
</html>
