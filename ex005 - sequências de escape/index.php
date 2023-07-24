<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequências de Escape</title>
</head>
<body>
    <h1>Sequências de Escape</h1>
    <?php 
    /*
    \n - nova linha
    \t - tabulação horizontal
    \\ - barra invertida
    \$ - sinal de cifrão
    \u{} - emogis ou similares
    */

    $nome = "Cainã";
    $sobrenome = "Mello";
    $apelido = "Caca";

    echo "Meu nome é $nome \"$apelido\" $sobrenome.\u{1F604} - \\ - \$";
    ?>
</body>
</html>