<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $n = $_GET["numero"];
            $n2 = $n - 1;
            $n3 = $n + 1;

            echo "<p>O número escolhido foi <strong>$n</strong></p>";
            echo "<p>O seu sucessor é <strong>$n3</strong></p>";
            echo "<p>O seu antecessor é <strong>$n2</strong></p>";
        ?>
        <p class="voltar"><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>