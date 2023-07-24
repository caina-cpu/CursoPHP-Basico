<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos</title>
</head>
<body>
    <h1>Tipos primitivos em PHP</h1>
    <?php 
        $a1 = 5; // int
        $a2 = "oi"; // string
        $a3 = true; // boolean
        $a4 = 5.2; // float

        echo "<p></p>" . var_dump($a1); // funciona como um "typeof" do php
        echo "<p></p>" . var_dump($a2);
        echo "<p></p>" . var_dump($a3);
        echo "<p></p>" . var_dump($a4);

        echo "<p>Pausa</p>";

        $a4 = (int) 5.2; // isso se chama COERÇÃO (que é quando você força um tipo para uma variável)
        echo "<p></p>" . var_dump($a4);   
    ?>
</body>
</html>