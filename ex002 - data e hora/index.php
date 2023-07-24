<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php
        date_default_timezone_set("America/Sao_Paulo"); // GMT-3 (timezone SP/BR)
        $data = date("d/M/Y");
        $hora = date("G:i:s");

        echo "<p>Hoje é dia <strong>$data</strong>.</p>";
        echo "<p>E a hora atual é <strong>$hora</strong>.</p>";
    ?>
</body>
</html>