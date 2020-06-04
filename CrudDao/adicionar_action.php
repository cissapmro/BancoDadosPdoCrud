<?php
require 'config.php';
require 'Dao/UsuarioDaoPostgre.php';

$usuarioDao = new UsuarioDaoPostgre($pdo);

$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email');

if($nome && $email) {

    if($usuarioDao->findByEmail($email) === false){
        $novoUsuario = new Usuario();
        $novoUsuario->setNome($nome);
        $novoUsuario->setEmail($email);

        $usuarioDao->add($novoUsuario);

        header('Location: index.php');
        exit;
    } else {
        header('Location: add.php');
        exit;
    }
} else {
        header('Location: add.php');
        exit;
    }


