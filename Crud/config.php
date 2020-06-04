<?php
$db_name = 'test';
$db_host = 'localhost';
$db_user = 'sisadmin';
$db_pass = 's1sadm1n';

$pdo = new PDO("pgsql:dbname=".$db_name.";host=".$db_host, $db_user, $db_pass);

