<!DOCTYPE html>
<html lang="pt-br">
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device-width, initial scale=1.0">
    <title>Coversor</title>
    <body>
        <h1>Seu dinheiro convertido</h1>
        
        <?php 
            $real = $_GET["DinReal"];
            $dolar = $real*0.20;

            echo " O valor de <strong>R$ $real</strong> convertido em dolares corresponde a <strong>$ $dolar dolares</strong>  
             " ;

            echo "<P>Considerando que a cotação do dolar foi correspondente a R$ 5,06, <br> no momento de desenvolvimento do exercício</P>";
        ?>
        <p><a href="index.html">Voltar</a></p>
    </body>
        
</html>
