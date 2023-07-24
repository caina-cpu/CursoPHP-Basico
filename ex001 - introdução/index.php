<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livrando da maldição</title>
</head>
<body>
    <h1>
        <?php 
            echo "Olá, mundo! \u{1F30E}"
        ?>
    </h1>
    <p>Vamos tentar nos livrar da maldição</p>
    <p>
        <?php 
            $nome = 'Cainã Mello';

            echo "<p>Oi, meu nome é <strong>$nome</strong>.</p>";
            phpinfo();
        ?>
    </p>
</body>
</html>