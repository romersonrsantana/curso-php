<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Desafio 7</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <main>
            <?php 
                $valor1 = $_GET['dividendo'] ?? 0; //qualicence obrigatório
                $valor2 = $_GET['divisor'] ?? 1; //não é possivel dividir qualquer número por zero;

                $total = intdiv($valor1, $valor2);
                $resto = $valor1 % $valor2;
            ?>

            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
                <ul>
                    <li>
                        <label for="dividendo">Dividendo</label>
                        <input type="number" name="dividendo" id="IDdividendo" min = "0" value="<?=$valor1?>"> <!-- Para resolver o exercício é necessário considerar as regras que envolvem a divisão, como exemplo é necessário estipular um valor mínimo para a divisão, pois não existe divisão por zero -->
                    </li>
                    
                    <li>
                        <label for="divisor">Divisor</label>
                        <input type="number" name="divisor" id="IDdivisor" min = "1" value="<?=$valor2?>">
                    </li>
                    
                    <input type="submit" value="Dividir">
                </ul>
    
            </form>


        </main>
        <section>
        <h1>Estrutura da divisão</h1>
            <div class="dividendo"><?php print "$valor1"; ?></div>
            <div class="divisor"><?php print "$valor2";?></div>
            <div class="quociente"><?php print "$total"; ?></div>
            <div class="resto"><?php print "$resto"; ?></div>

        </section>
    </body>
</html>