<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercícios php</title>
    </head>
    <body>
        <main>
            <pre>
                <?php
                    echo "<h1>Super Global GET</h1>";
                    var_dump($_GET); //http://127.0.0.1/curso-php/ex005/superglobais.php?nome=Guanabara&idade=45 ==> passando valores pela url;'
                
                ?>      
            </pre>
        </main>
    </body>
</html>