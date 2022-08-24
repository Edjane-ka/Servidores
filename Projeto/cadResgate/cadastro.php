<?php 
$docente = $_POST['docente'];
$animal = $_POST['animal'];
$descricao = $_POST['descricao'];
$rua = $_POST['rua'];
$referencia = $_POST['referencia'];

echo "<h1>Dados do chamado</h1>";
echo "<p>Nome do docente - $docente - , chamado feito</p>";
echo "<p>Espécie do animal: $animal</p>";
echo "<p>Descrição do chamado: - $descricao -";
echo "<p>Endereço: - $rua -</p>";
echo "<p>Ponto de referência: - $referencia -</p>";

echo "Cadastro Realizado com Sucesso!";
?>