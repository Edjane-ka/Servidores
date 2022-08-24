<?php

$metodo = $_SERVER['REQUEST_METHOD'];

if ($metodo === 'POST') {

$nome = $_POST['nome'];
$animal = $_POST['animal'];
$descricao = $_POST['descricao'];
$rua = $_POST['rua'];
$referencia = $_POST['referencia'];



$conexao = new SQLite3('./banco.db');

$table = "CREATE TABLE IF NOT EXISTS usuario (nome TEXT, animal TEXT, descricao TEXT, rua TEXT, referencia TEXT);";
$conexao->exec($table);

$insert = "INSERT INTO usuario (nome,animal,descricao,rua,referencia) VALUES('$nome', '$animal', '$descricao', '$rua', '$referencia');";
$conexao->exec($insert);



exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    
	<title>Resgate</title>
    <link rel="stylesheet" href="resgate.css">

</head>
<body>

<div  class="formulario" id="caixa">
    <h1> Informações do Resgate </h1>
    <form action="resgate.php" method="POST" id="form" autocomplete= "off">
        <input type="text" name="nome" placeholder="Seu nome" required><br>
        <input type="text" name="animal" placeholder="Espécie" required><br>
        <input type="text" name="descricao" placeholder="Como o animal está?" required list = "list" ><br> 
            <datalist id = "list">  
                <option name="1"> Mais ou menos</option>
                <option name="2"> Ruim </option>
                <option name="3"> Péssimo </option>
                <option name="4"> Grave </option>
        </datalist>
         </input>
        <input type="text" name="rua" placeholder="Rua e número" required><br>
        <input type="text" name="referencia" placeholder="Ponto de referência" required><br>
        <button>Enviar</button>
    </form>
    <a href="listar.php">Lista</a>
</div>

<div>
    <img src="https://olharanimal.org/wp-content/uploads/2020/04/AL_ongs_pandemia_animais-coruripe-4.jpg" alt="">
</div>

</body>
</html>