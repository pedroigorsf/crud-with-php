<?php

include_once 'config.php';

$id_user   = $_GET['id_user'];

$edit = $connect->query("DELETE FROM tb_user WHERE id_user='$id_user'");

if(mysqli_affected_rows($connect) > 0){
    header("location: index.php?page=view");
}

?>