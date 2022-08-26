<?php 
$docente = $_POST['docente'];
$peça = $_POST['peça'];
$descricao = $_POST['descricao'];
$endereço = $_POST['endereço'];
$formadepagemento = $_POST['formadepagemento'];

echo "<h1>Dados do chamado</h1>";
echo "<p>Nome do Cliente - $docente - , chamado feito</p>";
echo "<p>Peça : $peça</p>";
echo "<p>Tamanho: - $descricao -";
echo "<p>Endereço: - $endereço -</p>";
echo "<p>Forma de Pagamento: - $formadepagemento -</p>";

echo "Cadastro Realizado com Sucesso!";
?>