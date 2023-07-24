<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <pre>
            <?php 
                setcookie("dia-da-semana", "TERÇA", time() + 3600);

                session_start();
                $_SESSION["teste"] = "FUNCIONOU";

                echo "<h1>Superglobal GET</h1>"; // o get pega os dados apenas pela URL
                var_dump($_GET);

                echo "<h1>Superglobal POST</h1>"; // o post pega os dados apenas pelo cabeçalho
                var_dump($_POST);

                echo "<h1>Superglobal REQUEST</h1>"; // e o request pega os dois e gera um vetor com os dados de ambos
                var_dump($_REQUEST);

                echo "<h1>Superglobal REQUEST</h1>";
                var_dump($_COOKIE);

                echo "<h1>Superglobal SESSION</h1>";
                var_dump($_SESSION);

                echo "<h1>Superglobal ENV</h1>";
                var_dump($_ENV);
                echo "Normalmente essa superglobal mostra os dados do servidor, <br>mas como estamos em um servidor 'fajuto', ela não mostrará nada.";

                echo "<h1>Superglobal SERVER</h1>";
                var_dump($_SERVER);

                echo "<h1>Superglobal GLOBALS</h1>";
                var_dump($GLOBALS);
            ?>
        </pre>
    </main>
</body>
</html>