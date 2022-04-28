<!DOCTYPE html>
<html lang="Pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendendo loops</title>
</head>

<body>
    <h1>Utilizando Loops (ou laços de repetição)</h1>
    <hr>

    <h2>Wilhe (enquanto)</h2>

<?php
    $i = 1;

    while ($i <= 3) {  //ou se $i < 4
?>
        <p> <?= $i ?></p>
<?php
        $i++;   // temos que adicionar ++ para atualizar +1 ao valor da variavel
    }
?>
    <hr>
    <h2>Do/While (faça/enquanto)</h2>
<?php
    $j = 1;
    do {
?>
        <div style="border: solid 2px;padding: 5px;color:deepskyblue;">
            <h3 style="color: black;">Exemplo <?=$j?></h3>

        </div>

<?php

$j++;
} while ($j <= 5);

 ?>
   
    <h2>For (para)</h2>
<?php
for($i=1;$i<= 5;$i++){
?>
    <p>Valor de I é <b><?=$i?></b></p>
<?php
}
?>
<hr>
    <h2>Exercício Array e loop</h2>
    <p>Crie um Array contendo os nomes dos 12 
    meses do ano.
    </p>
        <p>Usando o loop, faça o nome dos meses aparecer em
            uma lista ordenada.(ul li)
        </p>

  
<?php   
    $i = 0;     
    $meses = ["Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"];
?>
<?php
do {
?>
        <ul>
            <li><?=$meses[0]?></li>
        </ul>

<?php

$i++;
}while($i < 12);

?>
</body>

</html>