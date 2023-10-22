<!DOCTYPE html>
<html lan = "pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dinheiro convertido</title>
        <link rel="stylesheet" href="conver-estil/style.css">
    </head>
    <body>
        <main>
            <?php

            /*$cotacao = 5.17;

            $real = 1000;

            $dolar = $real / $cotacao;*/

            //echo "Seu dinheiro convertido é $dolar";

            //resposta completa

            //echo "Seus R\$" . number_format($real, 2, ",", ".") . "equivalem a US\$" . number_format          ($dolar, 2, "," , ".");

            $real = $_GET["dinheiro"];
            $dolar = $real / 5.17;

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " .  numfmt_format_currency ($padrao, $dolar, "USD");
        ?>
        <p><a href="index.html">Voltar</a></p>
        </main>
    </body>

</html>






