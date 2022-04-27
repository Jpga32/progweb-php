<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio #003 Condicionais</title>
</head>

<body>
    <h1>Exercicio 03 Usando Condicionais</h1>
    <hr>
    <?php
    $salario = 600;
    

    if ($salario < 500) {

        $sal_reaj = $salario * 1.15 ;
    

    } elseif ($salario <= 1000) {
        $sal_reaj = $salario * 1.10;
    
    } else {
        $sal_reaj = $salario * 1.05;
    }
    
    echo "<p> O seu salario antigo era de $salario e foi reajustado para $sal_reaj</p>";
    ?>

    

</body>

</html>