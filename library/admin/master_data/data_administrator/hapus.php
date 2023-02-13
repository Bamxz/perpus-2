<?php
    include_once('../../../class/User.php');

    $id=$_GET["id"];

    $admin = new User;
    $data_admin = $admin->delete($id);

    header("Location: index.php?pesan=hapus_sukses");
?>