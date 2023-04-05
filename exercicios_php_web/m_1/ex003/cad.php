<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../desafios_php/style.css">
    <title>Resultado</title>
</head>

<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php
        // var_dump($_GET); //"$_REQUEST" É A junçao das superglobal: $_GET ,$_POST $_COOKIES
        $n = $_GET["nome"] ?? "Sem nome";
        $s = $_GET["sobrenome"] ?? "Desconhecido"; //Operador de coalescência nula
        echo "<p>É um prazer te conhecer <strong>$n $s</strong>! Este é meu site!</p>"
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>

</html>