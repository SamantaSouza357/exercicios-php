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
        <a href="../index.php"><button> voltar</button></a>
        <form action="" method="post">
            <label for="frase">Digite uma frase</label>
            <input type="text" name="frase" id="" required>
            <label for="numero">Digite um número</label>
            <input type="number" name="numero" id="" required>
            <button type="submit">Verificar</button> 
        </form>

        <?php
            if(!empty($_POST)){

                $frase = $_POST["frase"];
                $numero = $_POST["numero"];

                for($i = 1; $i <= $numero; $i++){
                    echo "<p> <br> $i - $frase <br> </p>";
                }

            }
        
        
        ?>
</body>
</html>