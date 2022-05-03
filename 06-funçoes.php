<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funçoes no PHP</title>
</head>
<body>
    <h1>Funçoes no PHP</h1>    
    <hr>
<h2>Funções Básicas (Sem retorno)</h2>

<?php
function dadosAutor(){
    echo "<Div>";
    echo "<p>João pedro.H Ganacim</p>";
    echo date ("d/m/Y");
    echo "</Div>";
}
?>

<section>
    <p>Projeto de Site Back-End</p>
    <?=dadosAutor()?>
</section>
<hr>
<h2>Funções com retorno de dados</h2>
<?php
function dadoscurso(){
    return "Programador web - 240 Horas";
}
?>
    <p>Informações: <?=dadoscurso()?></p>
    <p>O senac Penha tem o curso
    <?=dadoscurso()?> </p>

    <hr>
    <h2>Funções com parâmetros/argumentos</h2>

   
<?php
function soma ($valor1, $valor2){
    return $valor1 + $valor2;
}
?>
<p><?=soma(150,200)?></p>
<p><?=soma(28,87)?></p>

<?php
$primeiro = 1257.48;
$segundo = 3258.40;
?>

<p><?=soma($primeiro,$segundo)?></p>

<?php

$preco = 1578.99;
$desconto = 75.4789;
$salarioMinimo = 1212;
$novoSalario = 2500.47;
function formataNumero($valor){
    return "R$" .number_format($valor,2,",",".");
}
?>
<hr>
<ul>
    <li>Preço: <?=formataNumero( $preco)?></li>
    <li>Desconto:  <?=formataNumero($desconto)?></li>
    <li>Salário Mínimo:  <?=formataNumero($salarioMinimo)?></li>
    <li>Novo Salário:  <?=formataNumero($novoSalario)?></li>

    
</ul>
<hr>
    <h2>Indução de tipos de dados</h2>
<?php
function calculoMedia( float $nota1, float $nota2){
    return ($nota1 + $nota2) /2;   
}
?>
<p> 1°Bimestre: <?=calculoMedia(10,5)?></p>
<p> 2°Bimestre: <?=calculoMedia(5.5,7.7)?></p>
<p> 3°Bimestre: <?=calculoMedia(9.84,3.41)?></p>



</body>
</html