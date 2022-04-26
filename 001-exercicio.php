<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 001 PHP</title>
</head>
<body>
    <!-- Exercício 01
Criar variáveis e/ou constantes para:

Data de hoje
Nome de uma pessoa
Idade da pessoa
Cidade em que nasceu
Coloque dados nestas variáveis/constantes e faça com que o script mostre no HTML uma mensagem semelhante ao exemplo abaixo: -->

<h1>Exercício #001 PHP</h1>
<hr>

<?php
$data = "22/04/2022";
$nome = "Bernado santos almeida";
$idade = 36;
$cidade = "Acre";

?>
<p>
    Hoje e dia <?=$data?>. <?=$nome?> tem <?=$idade?> e nasceu e mora no <?=$cidade?>
</p>


</body>
</html>