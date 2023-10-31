<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>desafio 9</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php

            $quadrada = $_GET['num'] ?? 0;
            $grauraiz = 3;
            $cubica = $quadrada ** (1/$grauraiz);
 
        ?>
        <main>
            <h1>Descubra a raiz quadrada e a cubica de um número</h1>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="$_GET">
                <label for="num">Digite um número</label>
                <input type="number" name="num" id="num" value="<?=$quadrada?>">
                <input type="submit" value="Calcular">
            </form>
            
        </main>
        <section>
            <?php 
    
                echo "<p>A raiz quadrada do número $quadrada é " . number_format(sqrt($quadrada), 3, ",", ".") . "</p>";
                echo "<p>A raiz cúbica do número $quadrada é " . number_format($cubica,3 , ",", "." ) . "<p/>";
            ?>

        </section>
    </body>
</html>