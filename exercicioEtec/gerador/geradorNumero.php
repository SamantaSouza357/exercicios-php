<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>

<div class="menu">
    <a href="../index.php"><button> voltar</button></a>
    <h1>Gerador</h1>    
</div>




<?php

$par = 0;
$impar = 0;
$maiorNumero = 0;
$soma = 0;
$totalNumero = 100;


for($i = 1; $i <= $totalNumero; $i ++){

  $sorteio = rand(1,100);

  echo "<p> $i - numero gerado: $sorteio <br> </p>";

  if($sorteio > $maiorNumero){
    $maiorNumero = $sorteio;
  }

  $soma = $soma + $sorteio;

  if($sorteio % 2 == 0){
    $par++;
  }else if($sorteio % 2 == 1){
    $impar++;
  }
}

$media = $soma / $totalNumero;

    echo "<div class='container'>";
  echo "<br> <p> Quantidade de números pares: $par </p> ";
  echo "<br> <p> Quantidade de números impares : $impar </p> ";
  echo "<br> <p>  Maior Número: $maiorNumero </p>  ";
  echo "<br> <p> Soma dos  Números: $soma </p> ";
  echo "<br> <p> Média dos números gerados: $media </p> <br> ";
  echo "</div>";
   

?>
  
</body>
</html>
