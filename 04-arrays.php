<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">




</head>

<body>
    <h1>Arrays do PHP</h1>
    <hr>

    <?php

    $bandas = ["Slayer", "Nightwish", "Pink Floyd", "Savatage"];
    $cursos = array ("Node.js", "Design", "Nutrição");
    ?>
        <h2>Acessando os dados do array</h2>
        <p>Rock Progressivo: <?$bandas[2]?> </p>
        <p>Ontem tivemos com a turma de <?=$cursos[2]?>.</p>

        <?php
// Array associativo
$filme = [
    "titulo" => "Senhor dos Aneis",
    "autor" => "J. R. R. Tolkien",
    "lancamento" => 2001,
    "genero" => "Fantasia",

]
?>
        <h2>Acessando os dados do array associativo</h2>
        <p>O filme <?=$filme["titulo"]?> foi lançado em <?=$filme["lancamento"]?>.</p>

        <hr>

        <h2>Comandos úteis (para programadores) para análise de arrays</h2>

        <h3>print_r(nomeArray)</h3>
        <pre><?=print_r($bandas)?></pre>
        

        <h3>var_dump(nomeArray)</h3>
        <pre><?=print_r($bandas)?></pre>


</body>

</html>