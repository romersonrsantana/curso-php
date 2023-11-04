<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Desafio 10</title>
    </head>
    <body>
        <?php 
            //var_dump($_SERVER);

            $nasciment = $_GET ['data'] ?? 0;
            $data = date("Y");


        ?>
        <main>
            <h1>Calculando sua idade </h1>

            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

                <ul>
                    <li>
                        <label for="data">Seu ano de nascimento </label>
                        <input type="number" name="data" id="data" value="<?=$nasciment?>">
                    </li>
                    <li>
                        <label for="anoAtual">Digite um ano, considerando que estamos em <?php print "$data";?></label>
                        <input type="number" name="anoAtual" id="anoAtual">
                    </li>
                    <li>
                        <input type="submit" value="Calcular">
                    </li>
                </ul>
            </form>
            <?php 
               
            ?>

        </main>
    </body>

</html>
