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
                    $_SESSION["teste"] = "Funcionou"; //variável "teste", com um valor "string".
        

                    echo "<p>Super Global _GET</p>";
                    var_dump($_GET); //http://127.0.0.1/curso-php/ex005/superglobais.php?nome=Guanabara&idade=45 ==> passando valores pela url;'

                    echo "<p>Super global _POST </p>";
                    var_dump($_POST);

                    echo "<p> Super global _FILES </p>";
                    var_dump($_FILES); //pega as informações que foram enviadas por upload;

                    echo "<p> Super global _REQUEST</p>";
                    var_dump($_REQUEST);

                    echo "<p> Super Global _COOKIE</p>";
                    var_dump($_COOKIE); //São pequenas variáveis que ficam salvas dentro do navegador, por um periodo de tempo pré estabelecido.

                    echo "<p> Super Global _SESSION1</p>"; //permite que as variáveis que não são perdidas entre uma troca de páginas sejam utilizadas.
                    var_dump($_SESSION);

                    echo "<p> Super Global _ENV</p>"; //Variaveis de ambientes do servidor.

                    var_dump($_ENV);
                    //foreach (getenv() as $C => $v) { echo "<br> $c -> $v";}

                    echo "<p> Super Global _SERVER</p>"; // mostra variáveis que possui informações do servidor.
                    var_dump($_SERVER);

                    echo "<p>Super Global globals</p>";
                    var_dump($GLOBALS);
                
                ?>      
            </pre>
        </main>
    </body>
</html>