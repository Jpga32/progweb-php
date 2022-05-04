<?php include "recursos.php"; ?>
 <!-- ao digitar o arquivo de importaçao errado ele dara erro apenas no texto. -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inclusão de Recurso</title>
</head>

<body>
    <h1>Inclusão de Recurso</h1>
    <hr>

    <h2><?= ESCOLA ?></h2>
    <p>estamos no curso de <?= $curso ?></p>
    <ol>
    <?php
    foreach ($tec as $tecnologias) {
    ?>

        <li><?= $tecnologias ?></li>
    <?php
    }
    ?>
    </ol>

    <p>Chapolin colorado tem 20 anos é
        <b><?= verificaIdade(20) ?></b> de Idade.
    </p>

    <p>Chaves tem 8 anos e è
        <b><?= verificaIdade(8) ?></b> de Idade.
    </p>
<hr>

<article>
    <h2>Conteúdo Qualquer...</h2>
    <?php require "texto.php"  ?>  <!-- usando require ele bloqueia todos os arquivos apos ele. se o nome do arquivo estiver errado  -->
</article>

<hr>

<h2>Qualquer outra coisa...</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil accusamus corporis ex harum, minus assumenda necessitatibus incidunt tempora cupiditate, quos aspernatur eum quidem molestiae optio est minima doloremque magnam iure.</p>

</body>

</html>