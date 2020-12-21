<?php
require 'config.php';

if(isset($_GET['Id']) && empty($_GET['Id']) == false) {
    $Id = addslashes($_GET['Id']);

    $sql = "DELETE FROM dados_usuarios WHERE Id = '$Id'";
    $pdo->query($sql);

    header ("Location: index.php");
} else {
    header ("Location: index.php");
}
?>