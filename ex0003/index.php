<!DOCTYPE html>
<html lang= "pt-br">
<head>
    <meta charset= "UTF-8">
    <meta name="viewport" content= "width=device-width, initial-scale=1.0">
    <title>Teste Strings</title>
</head>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $name='gustavo';
        $sobrenome='guanabara\u{1F596}';

        echo "Olá $name $sobrenome";
        
    ?>
    <p>Exemplo com aspas simples:</p>
    <?php 
        echo 'Olá $name $sobrenome';
    ?>
    <p>Exemplo com constante:</p>
    <?php 
        const CANAL = "Curso em Video \u{1F499}";
        echo "Eu amo aprendo muito com o ".CANAL;
    ?>
    <P>Outros exemplos:</P>
    <?php 
        echo "Estamos no ano de " .date('Y');
    ?>
    <p>Aspas simples dentro de aspas duplas:</p>
    <?php 
        $nom = "Rodrigo";
        $snom = "Nogueira";
        
        echo "O lutador $nom \"Minotauro\" $snom gosta de usar o apelido entre seu nome e sobrenome";
    ?>
    <p>Testando a string heredoc:</p>
    <?php 
        $canal = "Curso em Vídeo";
        $ano = date ('Y');

        echo <<< Teste
                Olá galera do $canal!
                        Tudo bem com vocês?
                    Como está sendo esse ano de $ano?
        Abraços! \u{1F596}
        
        Teste;
    ?>
    <p>Resultado em Nowdoc:</p>
    <?php 
        echo <<< 'Teste'
        Olá galera do $canal!
                Tudo bem com vocês?
            Como está sendo esse ano de $ano?
        Abraços! \u{1F596}

        Teste;
    ?>
</body>
</html>