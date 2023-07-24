<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $dividendo = $_GET["v1"] ?? 0;
        $divisor = $_GET["v2"] ?? 1;
        $resultado = intdiv($dividendo, $divisor);
        $resto = $dividendo % $divisor;
    ?>
    <main>
        <h1>Anatomia de uma divisão</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Dvidendo</label>
            <input type="number" name="v1" id="v1" min="0" value="<?=$dividendo?>">
            <label for="v2">Divisor</label>
            <input type="number" name="v2" id="v2" min="1" value="<?=$divisor?>">
            <input type="submit" value="Dividir">
        </form>
    </main>

    <section id="resultado">
        <h2>Estrutura da divisão</h2>
        <?php 
            /* Modo padrão:
            echo "<p>Analisando a divisão <strong>$dividendo</strong> por <strong>$divisor</strong>, temos os valores:</p>";
            echo "<ul><li>Dividendo = <strong>$dividendo</strong></li>";
            echo "<li>Divisor = <strong>$divisor</strong></li>";
            echo "<li>Resultado da divisão = <strong>" . number_format($resultado, 3, ",", ".") . " </strong></li>";
            echo "<li>Resto da divisão = <strong>" . number_format($resto, 3, ",", ".") . " </strong></li></ul>";
            */

            // Modo mais bonito:
        ?>
        <table class="divisao">
            <tr>
                <td><?= $dividendo ?></td>
                <td><?= $divisor ?></td>
            </tr>
            <tr>
                <td><?= $resto ?></td>
                <td><?= $resultado ?></td>
            </tr>
        </table>
    </section>
</body>
</html>