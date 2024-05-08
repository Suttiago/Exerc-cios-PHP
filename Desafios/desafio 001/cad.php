<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>

    <main>
        <?php 
            
            $num = $_REQUEST ["num"];       
            $su = $num + 1;
            $ant = $num -1;
            
            
            echo "<p> o número escolhido foi $num 
                <br> o sucessor é $su
                <br> e o antecessor é $ant <p>"
        
        
        
        
        ?>
        <button onclick="javascript:window.location.href='index.html'">&#x2b05;Voltar</button>
    </main>









</body>
</html>