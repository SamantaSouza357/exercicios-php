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
    <h1>FizzBuzz</h1>    
</div>

<?php

for($i = 1; $i <=500; $i++ ){
    if($i % 3 == 0 && $i % 5 == 0 ){
        echo  " <p> $i FizzBuzz  <br> </p>";
    }else if($i % 3 == 0){
        echo "  <p> $i - Fizz <br> </p>";
    }else if($i % 5 == 0){
        echo "  <p> $i - Buzz <br> </p>";
    }
}

?>

</body>
</html>


