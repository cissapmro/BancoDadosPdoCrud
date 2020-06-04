<?php
require 'config.php';
require 'Dao/UsuarioDaoPostgre.php';

$usuarioDao  = new UsuarioDaoPostgre($pdo);

$lista  = $usuarioDao->findAll();
?>
<a href="adicionar.php">Adicionar Usuário</a>

<table border="1" width="100%" >
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php
    foreach($lista as $usuario): ?>
        <tr>
            <td><?=$usuario->getId();?></td>
            <td><?=$usuario->getNome();?></td>
            <td><?=$usuario->getEmail();?></td>
            <td>
                <a href="editar.php?id=<?=$usuario->getId();?>">[ Editar ]</a>
                <a href="excluir.php?id=<?=$usuario->getId();?>" onclick="return confirm('Tem certeza que deseja excluir o(a) usuário(a)  <?php echo $usuario->getNome();?>?')">[ Excluir ]</a>
            </td>
           </tr>
    <?php
    endforeach;
    ?>
</table>
