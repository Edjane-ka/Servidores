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
    <h1> Informações do Pedido </h1>
    <form action="resgate.php" method="POST" id="form" autocomplete= "off">
        <input type="text" name="nome" placeholder="Seu nome" required><br>
        <input type="text" name="Roupa" placeholder="Peça" required><br>
        <input type="text" name="descricao" placeholder="Tamanho" required list = "list" ><br> 
            <datalist id = "list">  
                <option name="1"> P </option>
                <option name="2"> M </option>
                <option name="3"> G </option>
                <option name="4"> GG </option>
        </datalist>
         </input>
        <input type="text" name="Endereço" placeholder="Endereço" required><br>
        <input type="text" name="Forma de Pagamento" placeholder="Pagamento" required><br>
        <button>Enviar</button>
    </form>
    <a href="listar.php">Lista</a>
</div>

<div>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlSeK_qR0SHzd5iJw1i7ZZbOV7e4ghsT7PBZM8LQ1HkqYg8BaWuKcdZk6tD7FrIEmRpPc&usqp=CAU" alt="">
</div>

</body>
</html>