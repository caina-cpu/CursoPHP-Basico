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
            $n = $_GET["numero"] ?? 0;
            $int = (int)$n;
            $fra = $n - $int;

            echo "<p>Analisando o número <strong>" . number_format($n, 3, ",", ".") . "</strong> informado pelo usuário:</p>";
            echo "<ul><li> A parte inteira do número é <strong>". number_format($int, 0, ",", ".") ."</strong></li>";
            echo "<li>A parte fracionária do número é <strong>" . number_format($fra, 3, ",", ".") . "</strong></li></ul>"
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>