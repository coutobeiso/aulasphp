<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisão HTML e PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1>Revisando o básico</h1>
    <hr>

<?php
/* criar duas variaveis e/ou constantes */
const NOME = "Chapolin Colorado";
$idade = 25;
?>

<!-- Exibir no html uma frase de seguinte forma -->

<!-- olá! meu nome é Chapolin Colorado e tenho 25 anos. -->

<!-- desafios:
 -o nome deve aparecer em italico e com cor diferente no texto
 -a idade deve aparecer apenas com cor de fundo diferente
-->

  <p>Olá! Meu nome é <i class=text-danger><?=NOME?></i> e tenho <span class=text-bg-warning ><?=$idade?></span>  anos. </p>

  <p class="">Qualquer coisa</p>




</body>
</html>