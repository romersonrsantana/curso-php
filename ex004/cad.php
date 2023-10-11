<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset = "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento de dados</title>
</head>
<body>
    <header>
        <h1>Processamento de dados</h1>
        <?php 
        $nome = $_GET["nome"] ?? "sem nome";
        $sobrenome = $_GET["sobrenome"] ?? "sem sobrenome";

        echo "<p>É um prazer te conhecer $nome $sobrenome! Este é meu site!</p>"
        ?>

        <a href="javascript:history.go(-1)">Voltar a página anterior</a>
    </header>
</body>