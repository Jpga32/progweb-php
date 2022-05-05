<?php
$pagina = basename($_SERVER['PHP_SELF']);

switch($pagina){
    case 'index.php':$titulo = "pagina Inicial"; break;
    case 'produtos.php':$titulo = "pagina Produto"; break;
    case 'servicos.php':$titulo = "pagina Servico"; break;
    default:$titulo = "pagina Contato"; break;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title> <?=$titulo?> Site XYZ</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <header>
        <h1>Site ABC</h1>
        <nav>
            <a href="index.php">Index</a>
            <a href="produtos.php">Produtos</a>
            <a href="servicos.php">Serviços</a>
            <a href="contato.php">contato</a>
        </nav>
    </header>
    <main>
</header>    
</body>