<!DOCTYPE html>
<html lang = "pt-br">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-width,inicial-scale=1.0">
    <title>Tipos primitivos em php</title>
</head>
<body>
    <h1>Teste tipos primitivos</h1>
   
    <p>
       $num = 0x1A;
       $num = 0b1010;
       $num = 010;
       $num = 3e2;
   </p>


    <?php
        $num = 0x1A;
        var_dump($num);
    
        echo "O valor da variável é $num;" 
    ?> 
    
    <p>Testando coerções</p>

    <?php 
        $numero = (boolean)28;
        var_dump($numero);

        echo "O número é $numero sendo portanto um valor verdadeiro;"
    ?>

    <p>Testando arrays</p>

    <?php 
        $vet = [6, 2, 9, 3, 5];
        var_dump($vet);
    ?>
        
</body>
    
