<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisando a divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

     <?php 
            $dividen = $_REQUEST["v1"] ?? 1;
            $divisor = $_REQUEST["v2"] ?? 1;
            $result = $dividen/$divisor;
            $resto = $dividen % $divisor;

        
        
        
        
        
        
        ?>





    <main>
        <h1>Anatomia de uma divisão</h1>

    
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="v1"> Dividendo</label>
            <input type="number" name="v1" id="v1" value="<?= $dividen ?>">   
            <label for="v2"> Divisor</label>
            <input type="number" name="v2" id="v2" value="<?= $divisor ?>">
            <input type="submit" value="dividir">
        </form>


        <br>
        <br>



        <section>
            <h2>Resultado da divisão</h2>
            <label for="s">divisão</label>
            <input type="number" name ="soma" id="s" value = "<?= $result?>">


        </section>

        <section>
            <h1>Estrutura da divisão</h1>
            <table class= "divisao">
                <tr>
                    <td><?= $dividen?></td>
                    <td><?= $divisor?></td>
                </tr>
                <tr>
                    <td><?= $resto?></td>/
                    <td><?= $result?></td>
                </tr>











            </table>




        </section>







    </main>
</body>
</html>