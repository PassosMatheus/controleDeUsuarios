<?php 
require 'config.php';

$Id = 0;
if(isset($_GET['Id']) && empty($_GET['Id']) == false) {
    $Id = addslashes($_GET['Id']);
}

if(isset($_POST['nome']) && empty($_POST['nome']) == false) {
    $Nome = addslashes($_POST['Nome']);
    $Email = addslashes($_POST['Email']);

    $sql = "UPDATE dados_usuarios SET nome ='$Nome', email = '$Email' WHERE id ='$Id'";
    $pdo->query($sql);

    header ("Location: index.php");
}

    $sql = "SELECT * FROM dados_usuarios WHERE id = '$Id'";
    $sql = $pdo->query($sql);
    if($sql->rowCount () > 0) {
        $dado = $sql->fetch();
    } 
    else {
    header ("Location: index.php");
} 
?>

<form method="POST">
    Nome: <br/>
    <input type="text" name="Nome" value="<?php echo $dado ['Nome']; ?>" /> <br/>
    Email: <br/>
    <input type="text" name="Email"  value="<?php echo $dado ['Email']; ?>"/> <br/><br/>

    <input type="submit" value="Atualizar" />

</form>