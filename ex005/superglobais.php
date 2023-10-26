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
                    
                    session_start();
                    $_SESSION["teste"] = "Funcionou";
        

                    echo "<p>Super Global _GET</p>";
                    var_dump($_GET); //http://127.0.0.1/curso-php/ex005/superglobais.php?nome=Guanabara&idade=45 ==> passando valores pela url;'

                    echo "<p>Super global _POST </p>";
                    var_dump($_POST);

                    echo "<p> Super global _REQUEST</p>";
                    var_dump($_REQUEST);

                    echo "<p> Super Global _COOKIE</p>";
                    var_dump($_COOKIE); //São pequenas variáveis que ficam salvas dentro do navegador, por um periodo de tempo pré estabelecido.

                    echo "<p> Super Global _SESSION1</p>";
                    var_dump($_SESSION);
                
                ?>      
            </pre>
        </main>
    </body>
</html>