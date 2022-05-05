<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processa PHP</title>
</head>
<body>
    <h1>Processamento de Dados</h1>
    <hr>

<?php    /* empty = vazio */ 
if (empty($_POST["nome"]) || empty($_POST["email"]) ) {?>

<p style="color: red;font-weight: bold;font-size: 20px;"> Por favor preencha Nome e E-mail !! </p>
<p><a style="font-weight: bold;font-size: 20px;color: black;" href="08-formulario.html">Voltar</a></p>
<?php
} else {




/* echo "<pre>";
 var_dump($_POST);
echo "</pre>"
 */

 // Capturando dados enviados a partir do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $idade = $_POST["idade"];

    /* Se existir o $_POST['interesse'],
    o que foi selecionado fica na variavel. caso contrário,
    deixe um array vazio na variavel */

    //Operador de coalescencia nula
    $interesses = $_POST["interesses"] ??[];
    $informativo = $_POST["informativos"];
    $msg = $_POST["mensagem"];
?>
    <h2>Dados:</h2>
<ul>
    <li> Nome: <?=$nome?> </li>
    <li> E-mail: <?=$email?> </li>
    <li> Idade: <?=$idade?> </li>

<!-- Usamos operado logico ! que signifaca NÃO 
para inverter a logica da função EMPTY -->

<!-- Se interesses nao estiver vazio  -->
  <?php if( !empty($interesses)){ ?> 
 <!-- Então, faça tudo abaixo: -->   
    <li> Interesses: 
        <ul>
            <?php foreach($interesses as $interesse){ ?>
                <li> <?=$interesse?></li>
                
          <?php } ?>
        </ul>

    </li>
   <?php } ?>
    <li> informativos: <?=$informativo?> </li>
    <li> Mensagem: <?=$msg?> </li>
    
</ul>

<?php } //Fechamento do else ?>



</body>
</html>