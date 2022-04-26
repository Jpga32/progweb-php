<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis e constantes</title>
</head>
<body>
    <h1>Manipulando dados na Memória</h1>
    <hr>

<?php
 //Variavel
 $curso = "Programador web ";
 $ano = 2022;
 $preco = 2500.42;

echo "<h2>Saída de dados completo </h2>" ;
echo "<p> $curso </p>";
echo " <div> $ano </div>";
echo "<p><b>$preco </b></p>";

?>
    <h2>Saída de dados intercalando HTML e PHP</h2>
    <hr>
    <p><?php echo $curso ?></p>
    <p><?php echo $ano ?></p>
    <p><?php echo $preco ?></p>

    <hr>

    <p> <b> <?php echo $curso ?></b></p>
    <p> <b> <?php echo $ano ?></b></p>
    <p> <b> <?php echo $preco ?></b></p>
    <p>
        Estamos Fazendo o curso de <?=$curso?>
        no Ano de <?=$ano?>
    </p>
    <hr>

<?php
    //Constante
    //Forma 1:
    define("MEU_NOME","João");

    //Forma 2:
    const ESCOLA = "Senac Penha";

    echo "<P>".MEU_NOME."</p>";
    echo "<p>".ESCOLA."</p>";
?>
<hr>
    <p><b> <?=MEU_NOME?> </b></p>
    <p> <b> <?=ESCOLA?> </b></p>
