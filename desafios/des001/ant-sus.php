<!DOCTYPE hmtl>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php-dados</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <main>
        <h1>Resultado Final</h1>
        <?php
            $numero = $_GET["numero"];
            $antess = $numero - 1;
            $sucess = $numero + 1;
            echo "<p>O número escolhido foi: <strong>$numero</strong></p>";
            echo "<p>Seu antecessor é: <strong>$antess</strong></p>";
            echo "<p>Seu sucessor é: <strong>$sucess</strong></p>";
        ?>
        <a href="index.html">voltar</a>
    </main>
</html>
