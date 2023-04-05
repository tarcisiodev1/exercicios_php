<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Resultado</title>
</head>

<body>
    <main>
        <h1>Trabalahndo com números aleatórios</h1>

        <?php
        $min = 0;
        $max = 100;
        $n = mt_rand($min, $max);
        // rand() = 1951 - Linear Congrential Generator
        // mt_rand() = 1997 - Mersenne Twister - mais rapido que o rand normal
        // A partir do PHP 7.1, rand() é um simples apontamento para mt_rand()
        //random_int() gera números aleatórios criptograficamente seguros- obs:mais lento de todos
        echo "Gerando número aleatório entre $min e $max...</br>";
        echo "O número gerado foi <strong> $n </strong></br>";

        ?>
        <button onclick="javascript:history.go(0)">&#x1F504;Gerar outro</button>
    </main>
</body>

</html>