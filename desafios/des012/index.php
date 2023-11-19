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
           $valor = $_GET['dinheiro'] ?? '0.5';
           $porcent = $_GET ['porcentagem'] ?? '1';

        ?>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <ul>
                    <li>
                        <label for="dinheiro">valor monetario (R$)</label>
                        <input type="number" name="dinheiro" id="dinheiro" step="0.01" min="0.5" value="<?=$valor?>">
                    </li>
                    <li>
                        <label for="porcentagem">Porcentagem (<strong><span id="p"> ? </span>% </strong>)
                        <!--<input type="number" name="porcentagem" id="porcentagem" min="1" max="100" value="-->
                        <input type="range" name="porcentagem" id="porcentagem" min="1" max="100" step="1" value="<?=$porcent?>" oninput="mudavalor()">
                    </li>
                    <li><input type="submit" value="Calcular"></li>
                </ul>
            </form>
            <?php 
                
                $reajuste = $valor*($porcent/100);
                $total1 = ($valor + $reajuste);

                print "Seu reajuste de $porcent% será de R$ " . number_format($reajuste, 2, ",",".") . " reais, indo para o total de R$ " . number_format($total1, 2, ",", ".") . " reais."

            ?>
        </main>
    <script>
            //Declarações automaticas são chamadas todas as vezes que a página é carregada.

            mudavalor()

        function mudavalor(){
            p.innerText = porcentagem.value;

        }
    </script>


    </body>
</html>
