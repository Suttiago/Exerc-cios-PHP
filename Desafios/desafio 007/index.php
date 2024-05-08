<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php 
        $sal = $_REQUEST["sal"] ?? 0;
        $div = $sal / 1412;
        $rest = $sal % 1412;

    ?>


    <section>
        <h1>Informe seu salário</h1>
        <form action="" method="post">
            <label for="sal"> Digite seu salário: </label>
            <input type="number" name="sal" id="sal" value="<?= $sal ?>">
            <p>Considerando o salário mínimo de <strong>R$ 1.412</strong></p>
            <input type="submit" value="Calcular">
    </section>
            
    <section>
    <h1>Resultado final</h1>

        
        <?php 
            echo "Quem recebe o salário de R$$sal, ganha " .number_format( $div). " salários mínimos + $rest reais"
        ?>
    </section>








</body>
</html>