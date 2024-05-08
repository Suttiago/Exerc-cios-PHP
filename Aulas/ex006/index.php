<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <<?php 
        $v1 = $_REQUEST["v1"] ?? 0;
        $v2 = $_REQUEST["v2"] ?? 0;
        $soma = $v1 + $v2;
    
    
    
    
    
    ?>








    <main>
        <h1>Somador de valores</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1"> Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?= $v1?>">   
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?= $v2?>">
            <input type="submit" value="somar">
        </form>

        <br>
        <br>

        <section>
            <h2>Resultado da soma</h2>
            <label for="s">Soma</label>
            <input type="number" name ="soma" id="s" value = "<?= $soma?>">


        </section>







    </main>
</body>
</html>