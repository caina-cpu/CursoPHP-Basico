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
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            $dados = json_decode(file_get_contents($url), true);
            $cotacao = $dados["value"][0]["cotacaoCompra"];
            
            $real = $_GET["numero"];
            $dolar = $real / $cotacao;
            $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            $dolarFormat = numfmt_format_currency($padrão, $dolar, "USD");
            $realFormat = numfmt_format_currency($padrão, $real, "BRL");

            echo "<p>Seus $realFormat equivalem a <strong>$dolarFormat</strong>.</p>";
            echo "<p>A cotação foi de <strong>R\$ ". number_format($cotacao, 3, ",", ".") . "</strong>. *retirada automaticamento do site do Banco do Brasil.</p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>