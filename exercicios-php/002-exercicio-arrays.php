<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício #002</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <!-- Crie um arquivo chamado exercicio02-arrays.php.

Nele, crie dois arrays para armazenar os dados fictícios de duas pessoas diferentes: nome, idade, email e sexo.

Em seguida, mostre os valores de nome, email e idade de cada pessoa dentro de tags HTML de conteúdo (como article, section, h2, p etc).

Desafio: destaque estes blocos de conteúdo usando CSS. -->

<h1>Exercício 02 usando arrays</h1>
<hr>

<?php
$info = [
    "nome" => "João pedro",
    "idade" => 17,
    "email" => "Pedroganacim@gmail.com",
     "genero" => "masculino"
];

$info2 = [
    "identificacao" => "rafaela sales carvalho",
    "tempo_de_vida" => 16 ,
    "gmail" => "RafaSaCarvalho@gmail.com",
    "sexo" => "feminino"
];
?>
    
<section>

<h2>Ficha 1°:</h2>
<p>Ola meu nome é <?=$info["nome"]?>. Tenho <?=$info["idade"]?> Anos sou do genero <?=$info["genero"]?> e meu email: <?=$info["email"]?></p>

</section>

<section>

<h2>Ficha 2°:</h2>
<p class="color">Ola meu nome é <?=$info2["identificacao"]?>. Tenho <?=$info2["tempo_de_vida"]?> Anos sou do genero <?=$info2["sexo"]?> e meu email é :  <?=$info2["gmail"]?></p>

</section>
 






</body>
</html>