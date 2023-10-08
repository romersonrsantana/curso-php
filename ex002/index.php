<!DOCTYPE html>
<html language= "pt-br">
<head>
    <meta charset= "UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <?php
        date_default_timezone_set("America/Sao_Paulo");
        echo "Hoje é dia " . date("d/M/Y");
        echo " e a hora atual é " . date("G:i:s T");
    ?>
    <br>
    <?php 
        $nome = "Romerson";
        $sobrenome = "Rodrigues Santana";
        const PAIS = "Brasil";
         echo "Muito prazer $nome $sobrenome! Você mora no " . PAIS;
    ?>
    <?php ?>
</body>