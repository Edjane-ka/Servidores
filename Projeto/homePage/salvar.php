<?php

$db = new SQLite3 (__DIR__ . "/../Banco/database.db");

$consulta = "CREATE TABLE IF NOT EXISTS database(docente TEXT)";

try {
	$db->exec ($consulta);
	echo "Tabela criada com sucesso";
} catch (Exception $e) {
	echo $e->getMessage();
}

$db->close ();