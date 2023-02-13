<?php
include_once('../../../class/Kategori.php');

$kategori = new Kategori;
$data_kategori = $kategori->find($_GET["id"]);

if(isset($_POST["update"])){
    $data= [
        "kode" => $_POST["kode"],
        "nama" => $_POST["nama"],

    ];
        
    $kategori->update($_POST['kategori_id'],$data);
    echo "Update Berhasil";
    header('location:index.php');
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Buku</title>
</head>
<body>

<div class="kategori_edit">
        <form action="" method="POST" enctype="multipart/form-data">
            <table border="1">
                <input type="hidden" name="kategori_id" value="<?= $data_kategori["id"] ?>">
                <tr>
                    <th>kode</th>
                    <td>
                        <input type="text" name="kode" value="<?= $data_kategori["kode"] ?>">
                    </td>
                </tr>
                <tr>
                <th>Nama Kategori</th>
                <td>
                    <input type="text" name="nama" value="<?= $data_kategori["nama"] ?>">
                </td>
                </tr>
        </table>
            <button type="update" name="update">SUBMIT</button>
</form>
</div>
</body>
</html>