<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro simples</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <header>
           <strong> <h1>Gerador de números aleatórios</h1> </strong>
        </header>
        <?php 
          $max = 100;
          $min = 0;
          $num = rand($min,$max);
        
         echo "<p>gerando número aletórios de 0 a 100
         <BR> o número gerado foi $num<p>"

         ?>

         <button onclick="javascript:document.location.reload()">&#x1F504; De novo</button>
    </main>
    
</body>
</html>