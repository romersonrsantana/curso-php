<!DOCTYPE html>
<html lang = pt-br>
    <head>
        <meta charset = "UTF-8">
        <meta name="viewport" content = "width=device-width, initial-scale=1.0">
        <title>Valor Rândomico</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <main>
            <h1>Gerando um número aleatório...</h1>
            <p>Entre 1 e 99...</p>
            <?php
            $NumAleatorio = random_int(1,99);
            
            echo "<p>O número aleatório é $NumAleatorio</p>";
            ?>
            
            <button><a href="gerando-numeros.php">Gerando um outro valor</a></button>
        </main>
    </body>
</html>