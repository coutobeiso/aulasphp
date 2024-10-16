<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php
    $dados = [
    "nome" => "chavez",
    "senha" => "102030",    
    "cidade" => "Santo André",    
    "idade" => "23",  
    "telefones" => ["11-2135-0300","11-91234-5678"] 
    ] 
    ?>
    <h1>Atividade 1</h1>
    <ol>
        <li>Nome de usuário: <?= $dados["nome"];?></li>
        <li>Idade: <?=$dados["idade"];?></li>
        <li>Senha: <?=$dados["senha"];?></li>
        <li>Cidade: <?=$dados["cidade"];?></li>
        <li>telefone: <?=$dados["telefones"][0]; ?></li>
        
    </ol>
    
</body>
</html>