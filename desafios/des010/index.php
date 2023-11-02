<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Desafio 10</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <main>
            <?php 
                $nota1 = $_GET['nota1'] ?? 0;
                $nota2 = $_GET['nota2'] ?? 0;
                $peso1 = $_GET['peso1'] ?? 1;
                $peso2 = $_GET['peso2'] ?? 1;
            
            ?>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="$_GET">
                 <header>
                    <h1>Portal do Aluno</h1>   
                    <p>média escolar</p>
                 </header>
                <ul>
                    <li><label for="nota1">1ª Nota</label></li>
                    <li class="n1"><input type="number" name="nota1" id="nota1" value="<?=$nota1?>"></li>
                    <li ><label for="peso1">Peso 1</label></li>
                    <li class="p1"><input type="number" name="peso1" id="peso1" value="<?=$peso1?>"></li>
                    <li><label for="nota2">2ª Nota</label></li>
                    <li class="n2"><input type="number" name="nota2" id="nota2" value="<?=$nota2?>"></li>
                    <li><label for="peso2">Peso 2</label></li>
                    <li class="p2"><input type="number" name="peso2" id="peso2" value="<?=$peso2?>"></li>
                    <li><input type="submit" value="Calcular"></li>
                </ul>
            </form>
        </main>
        <?php 
            $medsimp = ($nota1 + $nota2) / 2;
            $medpond = ($nota1 * $peso1 + $nota2 * $peso2) / ($peso1 + $peso2);
        ?>
        <section>
            <?php 
                echo "<p>Média simples é $medsimp</p>";
                echo "<p>Média ponderada é " . number_format($medpond, 3, "," , ".") . "</p>";
            ?>
        </section>
        
    </body>
</html>
