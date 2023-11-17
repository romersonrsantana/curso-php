<!Doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Desafio 12</title>
    </head>
    <body>
        <?php 
           //var_dump($_SERVER);
           $valor = $_GET['dinheiro'] ?? 1;
           $porcent = $_GET ['porcentagem'] ?? 1;

        ?>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <ul>
                    <li>
                        <label for="dinheiro">valor monetario (R$)</label>
                        <input type="number" name="dinheiro" id="dinheiro" value="<?=$valor?>">
                    </li>
                    <li>
                        <label for="porcentagem">Porcentagem</label>
                        <!--<input type="number" name="porcentagem" id="porcentagem" min="1" max="100" value="-->
                        <input type="range" name="porcentagem" id="porcentagem" min="1" max="100" value="<?=$porcent?>">
                    </li>
                    <li><input type="submit" value="Calcular"></li>
                </ul>
            </form>
            <?php 
                
                $reajuste = $valor*($porcent/100);
                $total1 = ($valor + $reajuste);

                print "Seu reajuste será de $reajuste reais, indo para o total de $total1 reais."

            ?>
        </main>
    </body>
</html>
