<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio #003 Condicionais</title>
</head>
<style>
    .antigo {color:orangered;font-size: 18px;font-weight: bold;}
    .novo {color:blue;font-size: 18px;font-weight: bold;}
    .texto { font-size: 18px;font-weight:700;}
</style>

<body>
    <h1>Exercicio 03 Usando Condicionais</h1>
    <hr>
    <h2>Exebindo resultado dentro do PHP</h2>
    <?php
    $salario = 500;
    

    if ($salario < 500) {

        $sal_reaj = $salario * 1.15 ;
    

    } elseif ($salario <= 1000) {
        $sal_reaj = $salario * 1.10;
    
    } else {
        $sal_reaj = $salario * 1.05;
    }
    
    echo "<p class='texto'> O seu salario antigo era de <span class='antigo'> R$$salario </span> e foi reajustado para<span class='novo'> R$$sal_reaj </span> </p>";
    ?>
<hr>
    <h2>Exebindo resultado fora do PHP</h2>


<p class='texto'> O seu salario antigo era de <span class='antigo'> R$ <?=number_format($salario,2,",",".")?> </span> e foi reajustado para <span class='novo'> R$<?=number_format($sal_reaj,2,",",".")?> </span> </p>



</body>

</html>