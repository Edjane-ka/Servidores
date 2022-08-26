<?php

    $conexao = new SQLite3('./banco.db');
    $consulta = "SELECT * FROM usuario;";
    $resultado = $conexao->query($consulta);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
</head>
<body>
    <h1>Cadastro realizado com sucesso!</h1>

    <ul>
        <h1>Cadastro de pedidos:</h1>
        <?php
        while ($row = $resultado->fetchArray()) {
            echo "<li>".$row['nome']."</li>";
            echo "<li>".$row['peça']."</li>";
            echo "<li>".$row['descricao']."</li>";
            echo "<li>".$row['endereço']."</li>";
            echo "<li>".$row['formadepagamento']."</li>";
    
            
        }
        
        ?>
        
    </ul>
   

</body>
</html>