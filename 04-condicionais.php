<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais </title>
    <style>
        .aprovado {color: blue;font-size: 20px;}
        .reprovado {color: red;font-size: 20px;}
        .recuperacao {color: orange;font-size: 20px;}
    </style>

</head>
<body>
    <h1>Condicionais</h1>
    <hr>
        <h2>Condicional Simples</h2>

<?php
    $numero = 10 ;
    $numero2 = 10 ;

if ($numero > $numero2){
    echo "<p> <b> $numero E maio que $numero2!! </b> </p>";
}
?>
<hr>

    <h2>Composta</h2>

<?php
    $nota1 = 7 ;
    $nota2 = 10 ;
    $media = ($nota1 + $nota2) /2 ;
    echo "<p> Média: $media</p>";

if ($media >= 7) {
    echo "<p class='aprovado'> Aprovado  </p>" ;
} else {
    echo "<p class='reprovado' > <b> Reprovado </b> </p>" ;
}
?>
<hr>



        <h2>Encadeada</h2>
<?php 
if ($media >= 7) {
    echo "<p> <b> Aprovado </b> </p>" ;
} elseif ($media >= 6 && $media < 7 ) {
    echo "<p class='recuperacao' >  <b> Recuperaçao</b></p>";
}else {
    echo "<p><b> Reprovado </b></p>";
}

?>  
<hr>      
    <h2>Switch/Case</h2>

<?php
$opcao = 2;

switch ($opcao) {
    case 1: $assunto = "<p> <b> Reclamaçoes </> <p/>"; break;
    case 2: $assunto = "<p> <b> Elogios <b/> <p/>"; break;
    case 3: $assunto = "<p> <b> Informações <b/> <p/>"; break;
    default: $assunto = "falar com um Humano "; break;   
}

echo "<p>$assunto</p>"

?>

</body>
</html>