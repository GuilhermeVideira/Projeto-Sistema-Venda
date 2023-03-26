
<link rel="stylesheet" href="./css/estilosresultado.css">
   
<style type="text/css">
        .cinza{
            background-color: #2b80ff;
        }
       .texto01 {font-family: Algerian; 
                color: black;  
                font-size: 26px}
        .texto02 {font-family: Gill Sans Ultra Bold; 
                color: black;  
                font-size: 20px}         
                </style>

<body style background="./imagens/ImagemFundo.jpg">

<?php

// Atribuição das variaveis 
$Nome = $_POST['firstname'];
$Sobrenome = $_POST['lastname'];

$NomeProduto01 = $_POST['nomeProduto'];
$ValorProduto01 = $_POST['Valor01'];

$NomeProduto02 = $_POST['nomeProduto02'];
$ValorProduto02 = $_POST['Valor02'];

$ValorPago = $_POST['ValorPago'];

//Calculos
$Soma = $ValorProduto01 + $ValorProduto02; 

$Troco = $ValorPago - $Soma;
?>

<div>

<center>
<span class="texto01"> 📇 Nota fiscal 📇 </span>
</center>
<br>

<span class="texto02"> 

<?php 

//Exibição
echo  "☑️ - Nome do cliente: $Nome <br>"; 
echo "☑️ - Sobrenome do cliente: $Sobrenome <br>";

echo "------------------------------------------------- <br> ";
echo " - - Venda realizada:  <br> <br> ";

echo "🛒 - Produto 01: $NomeProduto01 <br>";
echo "💵  - Valor do produto: $ValorProduto01 <br><br>";

echo "🛒 - Produto 02: $NomeProduto02 <br>";
echo "💵  - Valor do produto: $ValorProduto02 <br>";

echo "------------------------------------------------- <br> ";

echo "💰 Valor total da compra: $Soma <br><br>";
echo "💵 Valor do troco: $Troco <br><br>";

?>

</span>

</div>

