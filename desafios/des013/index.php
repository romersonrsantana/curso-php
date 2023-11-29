<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculadora de tempo</title>
        <link rel="stylesheet" href="style.css">
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
                
                <label for="segundos">Segundos</label>
                <input type="number" name="segundos" id="segundos" min="60" value="<?=$tempoSegund?>">
                
                <input type="submit" value="Calcular"> <!--botão de enviar-->
            
            </form> 
        </main>

        <section>
            <?php 

                $semana = ($tempoSegund/(86400*7));
                $dia = ($tempoSegund%(86400*7)/86400);
                $horas = (($tempoSegund%(86400*7))%86400)/3600;
                $minutos = ((($tempoSegund%(86400*7))%86400)%3600)/60;
                $segundos = ((($tempoSegund%(86400*7))%86400)%3600)%60;


            ?>
            <h2>Vamos ao resultado convertido:</h2>
            <p>São <?=(int)$semana?> semanas!!</p>
            <p>São <?=(int)$dia?> dias</p>
            <p>São <?=(int)$horas?> horas</p>
            <p>São <?=(int)$minutos?> minutos</p>
            <p>São <?=(int)$segundos?> segundos</p>
        </section>
    </body>

</html>
