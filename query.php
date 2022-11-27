<?php

    include_once 'config.php';

    $query = $connect->query("SELECT * from tb_user");

    while ($data = $query->fetch_assoc()){

        $id_user = $data ['id_user'];
        $name = $data ['name'];
        $address = $data ['address'];
        $phone = $data ['phone'];

        echo "<tr>";
        echo "<td class='center'>$id_user
              <td class='center'>$name
              <td class='center'>$address
              <td class='center'>$phone
              <td class='center'><a href='formEdit.php?id_user=$id_user'><i class='material-icons blue-text'>edit</i></a>
              <td class='center'><a href='delete.php?id_user=$id_user' onclick='M.toast({html: 'I am a toast'})'><i class='material-icons red-text'>delete</i></a>";
        echo "</tr>";
    }
?>