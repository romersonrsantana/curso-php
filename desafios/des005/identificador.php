<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Descrição dos números</title>
    </head>
    <body>
        <main>
            <h1>Descrição dos números:</h1>

            <?php 
                $descricao = $_GET["ident"];
                $numINT = round($descricao);
                $numDEC = fmod($descricao, 1);

                echo "<p>O número inteiro é $numINT </p><p> A parte decimal corresponde a " . number_format($numDEC, 3);
            ?>
        </main>
    </body>

</html>
