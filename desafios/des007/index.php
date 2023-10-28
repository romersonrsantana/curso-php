<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Desafio 7</title>
    </head>
    <body>
        <main>
            <?php 
                $valor1 = $_GET["dividendo"];
                $valor2 = $_GET["divisor"];
                
            ?>


            <h1>Estrutura da divisão</h1>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <label for="dividendo">Dividendo</label>
                <input type="number" name="dividendo" id="IDdividendo">
                <label for="divisor">Divisor</label>
                <input type="number" name="divisor" id="IDdivisor">
                <input type="submit" value="Dividir">
    
            </form>


        </main>
        <section>
            <div><?php print "$valor1"; ?></div>
            <div><?php print "$valor2";?></div>
            <div><?php print "$total"; ?></div>
            <div><?php print "$resto= fmod($valor1,$valor2)"; ?></div>

        </section>
    </body>
</html>