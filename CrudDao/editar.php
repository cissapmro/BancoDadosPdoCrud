<?php
require 'config.php';
require 'Dao/UsuarioDaoPostgre.php';

$usuarioDao = new UsuarioDaoPostgre($pdo);

$usuario = false;

$id = filter_input(INPUT_GET, 'id');

if($id) {

    $usuario = $usuarioDao->findById($id);
} else {
    header('Location: index.php' );
    exit;
}
?>
<form method="POST" action="editar_action.php">

    <input type="hidden" name="id" value="<?=$usuario->getId();?>" /><br />

    <label>Nome:</label><br />
    <input type="text" name="nome" value="<?=$usuario->getNome();?>" /><br />
    <label>Email:</label><br />
    <input type="email" name="email" value="<?php echo $usuario->getEmail();?>"/><br />
    <input type="submit" name="Salvar" /><br />
</form>

