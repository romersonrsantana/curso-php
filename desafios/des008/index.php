<!DOCTYPE html>
<htmal lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Desafio 8</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php 
            $salario = $_GET['renda'] ?? 0;
            $minimo = 1_380.00;
        ?>
        <main>
            <h1>Informe seu salário mínimo</h1>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="$_GET">
                <label for="renda">salário</label>
                <input type="number" name="renda" id="renda" min ="1380" value="<?=$salario?>" step="0.01"> <!--Em value devemos usar o php ->short -->
                <p>Considerando o salário mínimo de R$<?=number_format($minimo, 2,",",".");?></p> <!--Resolução guanabara-->
                <input type="submit" value="Calcular">
                
            </form>
        </main>
        <section>
            <?php 
                $total = (int) ($salario / 1380);
                $sobra = $salario % 1380;
                
                $padrao = numfmt_create("pt-br", NumberFormatter::CURRENCY);

                echo "<p>Você ganha <strong>" . numfmt_format_currency($padrao, $salario, "BRL") . "</strong> o correspondente a <strong> $total salários minimo </strong>   mais <strong> ". numfmt_format_currency($padrao, $sobra, "BRL") . " reais. </strong></p>";

                
            ?>


        </section>
    </body>
</htmal>