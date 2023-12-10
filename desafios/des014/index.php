<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset = "UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Caixa eletrônico</title> 
    </head>
    <body>
        <main>
            <?php
            
            $dinheiro = $_GET["valor"] ?? 0;
            
            ?>
            <form action="" method="get">
                <label for="valor">Digite um valor para saque</label>
                <input type="number" name="valor" id="valor" step="5" min="0" max="1500" value="<?=$dinheiro?>">
                <input type="submit" value="sacar">
            </form>
        </main>
        <section>
            <h1>Saque</h1>
            <?php 
                echo"<p>O valor digitado corresponde há </p>" . $dinheiro . " reais";

                $calc1 = $dinheiro/100;
                $calc2 = ($dinheiro%100)/50;
                $calc3 = (($dinheiro%100)%50)/10;
                $calc4 = ((($dinheiro%100)%50)%10)/5;

            ?>
            <ul>
                <li>Notas de R$ 100,00: <?=(int)$calc1?> </li>
                <li>Notas de R$ 50,00:  <?=(int)$calc2?> </li>
                <li>Notas de R$ 10,00:  <?=(int)$calc3?> </li>
                <li>Notas de R$ 5,00:   <?=(int)$calc4?> </li>
            </ul>
            

        </section>
    </body>
</html>