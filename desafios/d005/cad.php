<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>

<body>
    <main>
        <h1>Resultado do processamento</h1>
        <p>
            <?php
            // var_dump($_GET); //"$_REQUEST" É A junçao das superglobal: $_GET ,$_POST $_COOKIES
            $n = $_GET["number"] ?? 0; //Operador de coalescência nula
            $antecessor = $n - 1;
            $sucessor = $n + 1;
            echo "O número escolhido foi<strong> $n</strong></br>";
            echo " O seu antecessor é<strong> $antecessor</strong></br>";
            echo " O seu sucessor é <strong> $sucessor</strong>"
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05;Voltar</button>
    </main>
</body>

</html>