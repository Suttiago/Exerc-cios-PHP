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
            $so = $_REQUEST ["num"];
            $dol = $so / 5.06;

            
            
            echo  "Seus R\$" . number_format($so,2) . " equivalem a  US\$" . number_format($dol,2) ;
        
        ?>

        <button onclick="javascript:window.location.href='index.html'">&#x2b05; Voltar</button>

    </main>
        


</body>
</html>