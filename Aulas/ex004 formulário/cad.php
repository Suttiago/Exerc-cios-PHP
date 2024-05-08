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
            
            $nome = $_GET["nome"] ?? "sem nome";
            $sobre = $_GET["sobrenome"] ?? "desconhecido ";
            echo "<p> É um prazer de conhecer $nome $sobre, Esse é o meu site";    
        
        
        
        
        
        ?>

    </main>









</body>
</html>