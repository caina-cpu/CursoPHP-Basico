<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $v1 = $_GET["v1"] ?? 1;
        $v2 = $_GET["v2"] ?? 1;
        $p1 = $_GET["p1"] ?? 1;
        $p2 = $_GET["p2"] ?? 1;
        $mediaAri = ($v1 + $v2) / 2;
        $mediaPon = ($v1 * $p1 + $v2 * $p2) / ($p1 + $p2);
        
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">1º Valor</label>
            <input type="number" name="v1" id="v1" value="<?=$v1?>">
            <label for="p1">1º Peso</label>
            <input type="number" name="p1" id="p1" value="<?=$p1?>">
            <label for="v2">2º Valor</label>
            <input type="number" name="v2" id="v2" value="<?=$v2?>">
            <label for="p2">2º Peso</label>
            <input type="number" name="p2" id="p2" value="<?=$p2?>">
            <input type="submit" value="Calcular médias">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado final</h2>
        <p>Analisando os valores <?= "<strong>$v1</strong>"?> e <?= "<strong>$v2</strong>"?>:</p>
        <ul>
            <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a <?= "<strong>" . number_format($mediaAri, 2, ",", ".") . "</strong>"?></li>
            <li>A <strong>Média Aritmética Ponderada</strong> com pesos <?= "<strong>$p1</strong>"?> e <?= "<strong>$p2</strong>"?> é igual a <?= "<strong>" . number_format($mediaPon, 2, ",", ".") . "</strong>"?></li>
        </ul>
    </section>
</body>
</html>