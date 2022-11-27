<?php

include_once 'formEdit.php';
include_once 'config.php';

$id_user = $_GET['id_user'];
$name  = isset($_POST['name'])?$_POST['name']:"";
$address   = isset($_POST['address'])?$_POST['address']:"";
$phone = isset($_POST['phone'])?$_POST['phone']:"";

$edit = $connect->query("UPDATE tb_user SET name='$name', address='$address', phone ='$phone' WHERE id_user='$id_user'");

if(mysqli_affected_rows($connect) > 0){
    header("location: index.php?page=view");
}

?>