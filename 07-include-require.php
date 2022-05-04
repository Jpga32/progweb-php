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

<?php
const ESCOLA = "Senac";
$curso = "Programador Web";
$tecnologias = ["HTML","CSS","JavaScript","PHP"];

function verificaIdade(int $valor):string {
    if($valor >=18){
        return "Maior";
    }else {
        return "Menor";
    }
}
?>
        <h2><?=ESCOLA?></h2>
    <p>estamos no curso de <?=$curso?></p>

  <ol>
<?php
 $tec = ["HTML","CSS","JavaScript","PHP"]  
?>

<?php
 foreach ($tec as $tecnologias){?>

<li><?=$tecnologias?></li>

<?php
 }
?>
</ol>  

<p>Chapolin colorado tem 20 anos é
    <b><?=verificaIdade(20)?></b>  de Idade. </p>

    <p>Chaves tem 8 anos e è
        <b><?=verificaIdade(8)?></b> de Idade.
    </p>


</body>
</html>