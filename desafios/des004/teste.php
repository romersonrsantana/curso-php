<pre>
    <?php

        $inicio = date("m-d-Y" , strtotime("-3 days"));
        $fim = date("m-d-Y");

        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        //10-17-2023 A 10-20-2023
    
    
        //Para tratar os dados da url do bcb, criamos uma variável dados com a função que trata dados no formato json.
    
        $dados = json_decode(file_get_contents($url), true);
    
        //var_dump($dados); mostra a estrutura da variavel;

        $cotacao = $dados ["value"] [0] ["cotacaoCompra"];

        echo "A cotação foi de $cotacao";
    
    ?>
</pre>