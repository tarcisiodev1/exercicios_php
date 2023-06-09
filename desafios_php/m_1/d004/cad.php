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

        <h1>Conversor de Moedas v1.0</h1>



        <?php



        //cotação vinda da api do banco central
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim =  date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=%27' .  $inicio . '%27&@dataFinalCotacao=%27' . $fim . '%27&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        $dados = json_decode(file_get_contents($url), true);
        $cotacao = $dados["value"][0]["cotacaoCompra"];
        $n = $_GET["number"] ?? 0;

        //usando formatação baśica:
        // o separador americano de milha, milhao é a "," e o de decimal é o ".", mas como no brazil é ao contrario, tem que inverter
        $dolar = $n / $cotacao;
        // usando formatação de moedas com internacionalização!
        //biblioteca intl(internallization PHP)
        // mas tem que colocar para funcionar no php.ini
        // $dolar = $n / $cotacao;
        // $padrao = numfmt_create("us", NumberFormatter::CURRENCY);


        // echo "Seus R$" . numfmt_format_currency($padrao, $n, "BRL") . "equivalem a<strong>US$" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong></br>";
        // echo "<strong>Cotação fixa de \$ $cotacao</strong> informada diretamente no código";

        echo "Seus R$" . $n . " equivalem a<strong> US$" . number_format($dolar, 2, ",", ".") . "</strong></br>";
        echo "<strong>Cotação de \$" . number_format($cotacao, 2, ", ", " . ") . "</strong>  informada <a
        href='https://dadosabertos.bcb.gov.br/dataset/dolar-americano-usd-todos-os-boletins-diarios'>da api do banco
        central</a>";
        ?>
        <button onclick="javascript:history.go(-1)">&#x2B05;Voltar</button>




    </main>
</body>

</html>