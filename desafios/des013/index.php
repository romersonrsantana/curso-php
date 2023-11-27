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
            //7 dias 604.800 segundos
            
            $tempoSegund = $_GET['segundos'] ?? 60;
            
            //declarando as variáveis --> inicio
                //$semana="";
                $dia="0";
                $horas="0";
                $minutos="0";
                //$segundos="0";
            
            //fim das declarações

        ?>
        <main>
            <h1>Calculadora de tempo</h1>
        
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                
                <label for="segundos"></label>
                <input type="number" name="segundos" id="segundos" min="60" value="<?=$tempoSegund?>">
                
                <input type="submit" value="Calcular"> <!--botão de enviar-->
            
            </form> 
        </main>

        <section>
            <?php 

                $semana = ($tempoSegund/(86400*7));
                $dia = ($tempoSegund%(86400*7));
                


            ?>
            <h2>Vamos ao resultado</h2>
            <p>São <?=$semana?> semanas!!</p>
            <p></p>
        </section>
    </body>

</html>
