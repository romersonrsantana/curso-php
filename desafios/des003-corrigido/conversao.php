<?php

$cotacao = 5.17;

$real = 1000;

$dolar = $real / $cotacao;

//echo "Seu dinheiro convertido é $dolar";

//resposta completa

//echo "Seus R\$" . number_format($real, 2, ",", ".") . "equivalem a US\$" . number_format($dolar, 2, "," , ".");

$padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency ($padrao, $dolar, "USD");

?>