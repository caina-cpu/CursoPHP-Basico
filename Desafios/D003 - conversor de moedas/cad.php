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
            /*
            $real = $_GET["numero"];
            $cotacao = 4.83;
            $dolar = $real / $cotacao;
            $dolarFormat = number_format($dolar, 2, ",", "."); // valor, número de casas decimais, separador de decimais, separador de milhar
            $realFormat = number_format($real, 2, ",", ".");

            echo "<p>Seus R$ $realFormat equivalem a <strong>US$ $dolarFormat</strong>.</p>";
            echo "<p><strong>* Cotação fixa de R\$4,83</strong></p>";
            */
            // OU
            $real = $_GET["numero"];
            $cotacao = 4.83;
            $dolar = $real / $cotacao;
            $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            $dolarFormat = numfmt_format_currency($padrão, $dolar, "USD");
            $realFormat = numfmt_format_currency($padrão, $real, "BRL");

            echo "<p>Seus R$ $realFormat equivalem a <strong>US$ $dolarFormat</strong>.</p>";
            echo "<p><strong>* Cotação fixa de R\$4,83</strong></p>";
        ?>
        <p class="voltar"><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>