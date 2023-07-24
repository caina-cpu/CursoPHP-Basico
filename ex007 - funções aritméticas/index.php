<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções aritméticas</title>
</head>
<body>
    <h1>Funções aritméticas</h1>
    <?php 
        $a1 = min(5, 2, 9 ,7 ,8); //mostra o valor mínimo entre os números
        $a2 = max(5,2, 9, 7, 8); //mostra o valor máximo entre os números
        $a3 = ceil(10.2); // arredonda pra cima
        $a4 = floor(10.2); // arredonda pra baixo
        $a5 = round(10.7); // arredondamento padrão
        $a6 = intdiv(13,2); // pega o número divisível mais próximo dessa divisão
        $a7 = sqrt(9); // ou 9 ** (1/2) // calcula a raiz quadrada

        echo "<p>A resposta é $a1</p>";
        echo "<p>A resposta é $a2</p>";
        echo "<p>A resposta é $a3</p>";
        echo "<p>A resposta é $a4</p>";
        echo "<p>A resposta é $a5</p>";
        echo "<p>A resposta é $a6</p>";
        echo "<p>A resposta é $a7</p>";
    ?>
</body>
</html>