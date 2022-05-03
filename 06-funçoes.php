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
function soma ($valor1,$valor2){

}
?>
</body>
</html>