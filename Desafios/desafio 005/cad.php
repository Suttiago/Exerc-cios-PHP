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
        <?php 
            $num = $_POST ["num"] ?? 0;
            $int = (int) $num;
            $fra = $num - $int;

            echo "<p>analisando o número " . number_format($num,3,",", "."). " informado pelo usuário <p>";

            echo "<ul><li> a parte inteira desse número é ". number_format($int);
            echo "<li> a parte fracionaria do número é $fra"
    
        ?>
          <button onclick="javascript:window.location.href='index.html'">&#x2b05; Voltar</button>









    </main>
   






</body>
</html>