<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulário Retroalimentado</title>
    </head>
    <body>
        <?php 
            //Capturando os dados do formulário retroslimentado
            $valor1 = $_GET['v1'] ??0; //uso do operador de qualicense necessário
            $valor2 = $_GET["v2"] ??0;
        ?>
        <main>
            <h1>Somando valores</h1>
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
                <ul>
                    <li>
                        <label for="v1">Valor 1</label>
                        <input type="number" name="v1" id="idv1" value="<?=$valor1?>">
                    </li>
                    <li>
                        <label for="v2">Valor 2</label>
                        <input type="number" name="v2" id="idv2" value="<?=$valor2?>">
                    </li>
                    <input type="submit" value="Somar">
                </ul>
            </form>
        </main>
        <section>
            <h2>Resultado da soma</h2>
            <?php 
                $soma = $valor1 + $valor2;

                print "A soma dos valores $valor1 com $valor2 é <strong>igual a $soma</strong>";
            ?>

        </section>
    </body>

</html>
