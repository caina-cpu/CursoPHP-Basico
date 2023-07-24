<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis</title>
</head>
<body>
    <h1>Variáveis e constantes em PHP</h1>
    <h2>Variáveis:</h2>
    <?php 
    date_default_timezone_set("America/Sao_Paulo"); // GMT-3 (timezone SP/BR)
    $data = date("d/M/Y");
    $hora = date("G:i:s");

    echo "<p>Hoje é dia <strong>$data</strong>.</p>";
    echo "<p>E a hora atual é <strong>$hora</strong>.</p>";
    ?>

    <h2>Constantes:</h2>
    <?php 
    const NOME = "Cainã";
    const SOBRENOME = "Mello";

    echo "Oi, meu nome é" . " " . NOME . " " . SOBRENOME . ".";
    ?>
</body>
</html>