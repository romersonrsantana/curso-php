<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculadora de tempo</title>
    </head>
    <body>
        <?php 
            //1 hora tem 3.600 segundos
            //1 dia tem 86.400 segundos
            $semana=0;
            $dias=0;
            $horas=0;
            $minutos=0;
            $segundos=0;

            $resultado=(3000000%(86400*7)/86400);

            echo"o resultado será $resultado";
        ?>
        <main>
            <h1>Calculadora de tempo</h1>
            <label for="segundos"></label>
            <input type="number" name="segundos" id="segundos">
            <input type="submit" value="Calcular">
        </main>
    </body>

</html>
