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
            <label for="numero">Digite um número</label>
            <input type="number" name="numero" id="">
            <button type="submit">Verificar</button> 
        </form>
        <?php

            if(!empty($_POST)){

         $numero = $_POST["numero"];
         echo "
         <div class='container'>
            <table>
                <tr>
                 <th>Tabuada</th>
                </tr>";

           for($i = 1; $i <=10; $i++) {

            $resultado = $i * $numero;
        
         echo "
                <tr>
                    <td>$i x $numero = $resultado </td>
                </tr>";
           }
           echo "
                </table>
           </div>";
        }
        ?>
        
</body>
</html>
