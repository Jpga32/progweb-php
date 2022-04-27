<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalando com ARRAYS PHP</title>
</head>
<body>
    <h1>Usando ARRAYS com PHP</h1>
    <hr>

    <h2>ARRAY com Índice numericos</h2>
    
<?php
    //Sintaxe de Colchetes []
    $alunos = ["Maria","João","Mônica"];

    //Sintaxe Usando Função ARRAY()
    $curso = array("HTML5","React","Node.js","PHP");

?>

    <h3>Acessando os dados</h3>
    <ul>
        <li> <?=$alunos[1]?> </li>
        <li> <?=$cursos[1]?> </li>
    </ul>
    <hr>
    <h2>Array Associativo</h2>

   <?PHP
    $cursos = [
        "nome"=> "Programador web",
        "carga_horaria" => 240 ,
        "unidade" => "Penha",
        "ucs" => 5
    ];
?>

<h3>Acessando dados</h3>
<p>
    O Curso  de <?=$cursos["nome"]?> tem <?=$cursos["carga_horaria"]?> Horas
</p>
<hr>

    <h2>Funções de debug/depuração</h2>

    <pre>
    <?=print_r($curso)?>
    </pre>

    <pre>
        <?=var_dump($curso)?>
    </pre>







</body>
</html>