<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raiz Quadrada</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $numero = $_GET["v1"] ?? 0;
        $raiz2 = $numero ** (1/2);
        $raiz3 = $numero ** (1/3);
        
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Número</label>
            <input type="number" name="v1" id="v1" value="<?=$numero?>">
            <input type="submit" value="Calcular raízes">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado final</h2>
        <?php 
            echo "<p>Analisando o número <strong>$numero</strong>, temos:</p>";
            echo "<ul><li>A sua raiz quadrada é <strong>" . number_format($raiz2, 2, ",", ".") . "</strong></li>";
            echo "<li>A sua raiz cúbica é <strong>" . number_format($raiz3, 2, ",", ".") . "</strong></li></ul>";
        ?>
    </section>
</body>
</html>