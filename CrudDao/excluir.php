<?php
require 'config.php';
require 'Dao/UsuarioDaoPostgre.php';

$usuarioDao = new UsuarioDaoPostgre($pdo);

$id = filter_input(INPUT_GET, 'id');
if($id) {

    $usuarioDao->delete($id);
      header('Location: index.php' );
    exit;
    }
?>

