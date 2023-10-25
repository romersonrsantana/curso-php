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

                    setcookie("Dia-da-Semana", "SEGUNDA", time() + 3600); //Estou com um cookie que é o "Dia-da-semana" que está com um valor que é "segunda"

                    echo "<h1>Super Global _GET</h1>";
                    var_dump($_GET); //http://127.0.0.1/curso-php/ex005/superglobais.php?nome=Guanabara&idade=45 ==> passando valores pela url;'

                    echo "<h1>Super global _POST </h1>";
                    var_dump($_POST);

                    echo "<h1> Super global _REQUEST</h1>";
                    var_dump($_REQUEST);

                    echo "<h1> Super Global _COOKIE";
                    var_dump($_COOKIE);
                
                ?>      
            </pre>
        </main>
    </body>
</html>