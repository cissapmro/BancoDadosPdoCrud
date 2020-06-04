<?php
$pdo = new PDO("pgsql:dbname=test;host=localhost", "sisadmin", "s1sadm1n");
$sql = $pdo->query('SELECT * FROM usuarios');
$dados = $sql->fetchAll(PDO::FETCH_ASSOC);
$linhas = $sql->rowCount();
echo '<pre>';
print_r($dados);
'</pre>';
echo "linhas:". $linhas;

