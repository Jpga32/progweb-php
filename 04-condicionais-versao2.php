<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais </title>
    <style>
        .aprovado {
            color: blue;
            font-size: 20px;
        }

        .reprovado {
            color: red;
            font-size: 20px;
        }

        .recuperacao {
            color: orange;
            font-size: 20px;
        }
    </style>

</head>

<body>
    <h1>Condicionais (Versão 2)</h1>
    <hr>
    <h2>Condicional Simples</h2>

    <?php
    $numero = 10;
    $outroNumero = 2;

    if ($numero > $outroNumero) {
    ?>

        <p><?= $numero ?> E maio que <?= $outroNumero ?> !!</p>

    <?php
    }
    ?>

    <hr>

    <h2>Composta</h2>

    <?php
    $nota1 = 7;
    $nota2 = 10;
    $media = ($nota1 + $nota2) / 2;
    ?>
    <p> Média: <?= $media ?></p>
    <?php
    if ($media >= 7) {
    ?>
        <p class="aprovado"> Aprovado </p>

    <?php
    } else {
    ?>
        <p class="reprovado"> <b> Reprovado </b> </p>
    <?php
    }
    ?>
    <hr>

    <h2>Encadeada</h2>

 <?php
    if ($media >= 7) {
?>
        <p> <b> Aprovado </b> </p>
 <?php
    } elseif ($media >= 6 && $media < 7) {
?>
        <p class="recuperacao"> <b> Recuperaçao</b></p>
 <?php
    } else {
?>
        <p><b> Reprovado </b></p>
<?php
    }
?>
    <hr>
    <h2>Switch/Case</h2>

    <?php
    $opcao = 2;

    switch ($opcao) {
        case 1:
            $assunto = "Reclamaçoes ";
            break;
        case 2:
            $assunto = " Elogios ";
            break;
        case 3:
            $assunto = " Informações ";
            break;
        default:
            $assunto = "falar com um Humano ";
            break;
    }
    ?>
    <p><?= $assunto ?></p>

</body>

</html>