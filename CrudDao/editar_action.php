<?php
require 'config.php';
require 'Dao/UsuarioDaoPostgre.php';

$usuarioDao = new UsuarioDaoPostgre($pdo);

$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email');

if($id && $nome && $email) {

   // $usuario = $usuarioDao->findById($id);
    $usuario = new Usuario();
    $usuario->setId($id);
    $usuario->setNome($nome);
    $usuario->setEmail($email);

    $usuarioDao->update($usuario);

       header('Location: index.php');
       exit;
    } else {
        header('Location: editar.php');
        exit;
    }

