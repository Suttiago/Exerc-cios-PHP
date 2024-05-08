<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="syle.css">
</head>
<body>
    <main>  

        <h1>Conversor de moedas</h1>




        <?php 
            //dinheiro em real
            $so = $_REQUEST ["num"];

            //cotação
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio.'\'&@dataFinalCotacao=\''. $fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        
        
            $dados =json_decode(file_get_contents($url), true);
        
           
        
            $cotação  = $dados["value"][0]["cotacaoCompra"];

            //conversão em dolar

            $dol = $so/ $cotação;
            
            
            echo  "Seus R\$" . number_format($so,2) . " equivalem a  US\$" . number_format($dol,2) ;
        
        ?>

        <button onclick="javascript:window.location.href='index.html'">&#x2b05; Voltar</button>

    </main>
        


</body>
</html>