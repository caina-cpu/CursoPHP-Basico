<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa eletrônico</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $n1 = $_GET["v1"] ?? 0;
    $nota100 = intdiv($n1,100);
    $nota50 = intdiv(($n1 % 100), 50);
    $nota10 = intdiv(($n1 % 50), 10);
    $nota5 = intdiv(($n1 % 10), 5);

    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="v1" id="v1" value="<?= $n1 ?>" step="5">
            <p>*Notas disponíveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>

    <section id="resultado">
        <h2>Saque de <?= "R\$" . number_format($n1, 2, ",", ".") ?> realizado</h2>
        
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <p><img src="./imagens/100-reais.jpg" alt="">x <?="<strong>$nota100</strong>"?></p>
        <p><img src="./imagens/50-reais.jpg" alt="">x <?="<strong>$nota50</strong>"?></p>
        <p><img src="./imagens/10-reais.jpg" alt="">x <?="<strong>$nota10</strong>"?></p>
        <p><img src="./imagens/5-reais.jpg" alt="">x <?="<strong>$nota5</strong>"?></p>
            
    </section>
</body>

</html>