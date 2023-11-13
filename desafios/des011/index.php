<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Desafio 10</title>
        <link rel="stylesheet" media="all" href="style.css" > <!--Para todos os tipos de midia-->
        <link rel="stylesheet" media="only screen and (min-width: 320px) and (max-width: 991px)" href="cell-phone.css"> <!--Tentar criar uma regra para portrait e landscape dentro da olha de estilo -->
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
                    </li><?php print "<p>Estamos no ano de $data</p>;"?></li>

                    <li>
                        <label for="data">Seu ano de nascimento </label>
                        <input type="number" name="data" id="data" min="<?=$data-126?>" max="<?=$data-1?>" value="<?=$nasciment?>">
                    <li>
                    <li><input type="submit" value="Calcular"></li>
                </ul>
            </form>   
                
            <?php 
               $idade= ($data - $nasciment );
               $meses= ($idade*12);

               print "<p>Você terá em <strong>$date</strong>, $idade ano(s) de idade</p> <p>Considerando seu ano de nascimento e sua idade posso te dizer que nesse ano você terá completado $meses meses de vida !! O equivalente a " . number_format($idade*360, 0, ',','.')  . " dias</p><p>As contas não param por aqui meu amigo(a) você terá " . number_format(($idade*360)*24,2,',','.') . " horas de experiência no simples ato de viver. Como tem sido gasto todas essas <strong>" . number_format(($idade*360)*24, 0, ',' , '.') . " horas?</strong> <p>Não sei em que ponto da vida você se encontra nesse instante, o que posso te dizer é que de certa forma você já acumulou mais de " . number_format((($idade*360)*24)*60,2, ',','.') . " minutos de vida, o que nos permite compreender que cada minuto tem um valor e um peso, por essa razão espero que você entenda a importância de aproveitar cada instânte para lutar pelo seu propósito, que todo tempo gastado até aqui, sirva de combustível, de experiência para todas as lutas que  ainda estão por vim. E não se esqueça de agradecer a Deus por todo esse tempo que já tem e de Coloca-lo à frente de todos os seus projetos!!Amém. </p>"
            ?>

        </main>
    </body>

</html>
