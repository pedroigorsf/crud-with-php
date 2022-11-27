<?php
    include_once 'config.php';


    $name = isset($_POST['name']) == true ? $_POST['name']:"";
    $address = isset($_POST['address']) == true ? $_POST['address']:"";
    $phone = isset($_POST['phone']) == true ? $_POST['phone']:"";


    $insert = "INSERT INTO tb_user (name, address, phone) values ('$name', '$address', '$phone')";

    if ($connect->query($insert) == TRUE){
        header('Location: form.php');
    } else echo "Error: insert.php" . $insert. "<br>".$connect->error;

    if(mysqli_affected_rows($connect) > 0){
        header("location: index.php?page=read");
    }

    $connect->close();