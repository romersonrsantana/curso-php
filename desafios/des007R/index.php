<!DOCTYPE html>
<html lang="pt-br">
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resolução metodo Guanaba</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php       
            $dividendo = $_GET['d1'] ?? 0; // inicialização das variáveis;
            $divisor = $_GET['d2'] ?? 1; // Se não passar nenhum valor, os valores padrão serão 0 e 1, informados na querystring -> url;
        ?>
        <main>
            <h1>Anatomia de uma Divisão</h1>
            <form action="" method="get">
                <label for="d1">Dividendo</label> <!--Verificar como colocar o label na parte de cima do input-->
                <input type="number" name="d1" id="d1" min="0" value="<?=$dividendo?>"> <!--A utilidade do atributo "value" é receber o valor do php que vai vim do formulário, fazendo com que os valores fiquem na tela para o usuário-->
                <label for="d2">Divisor</label>
                <input type="number" name="d2" id="d2" min="1" value="<?=$divisor?>"> <!--Atenção ao fazer a short-tag. Ao atribuir ->min usamos a lógica por não existir divisão por zero -->
                <input type="submit" value="Analisar">

            </form>
        </main>
        <section>
            <h2>Estrutura da Divisão</h2>
            <?php
                $quociente = intdiv($dividendo,$divisor);
                $resto = $dividendo % $divisor ;

                /*
                echo "<ul>";
                echo "<li>Dividendo: $dividendo</li>";
                echo "<li>Divisor: $divisor</li>";
                echo "<li>Quociente: $quociente</li>";
                echo "<li>Resto: $resto</li>";
                echo "</ul>";
                */
            ?>
            <table class="divisao"> <!--Para que não seja utilizado muitos escos é possivél criar short tags direto no html-->
                <tr>
                    <td><?=$dividendo?></td> <!-- entender as configurações do css na classe divisao -->
                    <td><?=$divisor?></td>
                </tr>
                <tr>
                    <td><?=$resto?></td>
                    <td><?=$quociente?></td>
                </tr>
            </table>
        </section>

    
    </body>
</html>