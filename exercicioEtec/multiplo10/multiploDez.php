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
    <h1>Multiplos de X10</h1>    
</div>

<?php

for($i = 1; $i <=100; $i++ ){
    if($i % 10 == 0 ){
        echo  "<p> $i - Multiplo de 10  <br> </p>";
    }else{
        echo " <p> $i <br> </p>";
    }
}
?>

</body>
</html>



