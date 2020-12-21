<?php 
require 'config.php';
?>

<meta charset="UTF-8">
<a href="adicionar.php">Adicionar novo usuário:</a>
<table border="0" width="100%">
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>
    <?php 
    $sql = "SELECT * FROM dados_usuarios";
    $sql = $pdo->query($sql);
    if ($sql->rowCount () > 0) {
        foreach($sql->fetchAll() as $usuario) {
        echo '<tr>';
            echo '<td>'.$usuario['Nome'].'</td>';
            echo '<td>'.$usuario['Email'].'</td>';
            echo '<td><a href="editar.php?Id='.$usuario['Id'].'">Editar</a> - <a href="excluir.php?Id='.$usuario['Id'].'">Excluir</a></td>';
        echo '</tr>';
        }
    }
    ?>
</table>