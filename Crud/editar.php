<?php
require 'config.php';

$info = [];
$id = filter_input(INPUT_GET, 'id');
if($id) {
    $sql = $pdo->prepare('SELECT * FROM usuarios where id = :id');
    $sql->bindValue(':id', $id);
    $sql->execute();
if($sql->rowCount() > 0){
    $info = $sql->fetch(PDO::FETCH_ASSOC);
  //  echo '<pre'>
    //    print_r($info);
      //  echo '</pre>';
} else {
    header('Location: index.php' );
    exit;
    }
} else {
    header('Location: index.php' );
    exit;
}
?>
<form method="POST" action="editar_action.php">

    <input type="hidden" name="id" value="<?=$info['id'];?>" /><br />

    <label>Nome:</label><br />
    <input type="text" name="nome" value="<?=$info['nome'];?>" /><br />
    <label>Email:</label><br />
    <input type="email" name="email" value="<?php echo $info['email'];?>"/><br />
    <input type="submit" name="Salvar" /><br />
</form>

