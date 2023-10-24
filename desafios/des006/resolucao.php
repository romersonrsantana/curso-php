<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resolução</title>
    </head>
    <body>
        <h1>O número que você digitou: </h1>
        <?php 
            $numb = $_GET["numUSUAR"];
            $int = (int)$numb;
            $frac = $numb - $int;

            echo "<p> A parte inteira do número informado é <strong> " . number_format($int, 0, "," , ".") . "</strong><br> Já a parte fracionada correponde a <strong>" . number_format($frac, 3, "," , "."); "</strong></p>";
        ?>
    </body>
</html>