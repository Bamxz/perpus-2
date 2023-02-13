<?php
include_once('../../../class/penerbit.php');

$penerbit = new penerbit;
$data_penerbit = $penerbit->find($_GET["id"]);

if(isset($_POST["update"])){
    $data= [
        "kode" => $_POST["kode"],
        "nama" => $_POST["nama"],
        "verif" => $_POST["verif"],

    ];
        
    $penerbit->update($_POST['penerbit_id'],$data);
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

<div class="penerbit_edit">
        <form action="" method="POST" enctype="multipart/form-data">
            <table border="1">
                <input type="hidden" name="penerbit_id" value="<?= $data_penerbit["id"] ?>">
                <tr>
                    <th>kode</th>
                    <td>
                        <input type="text" name="kode" value="<?= $data_penerbit["kode"] ?>">
                    </td>
                </tr>
                <tr>
                <th>Nama penerbit</th>
                <td>
                    <input type="text" name="nama" value="<?= $data_penerbit["nama"] ?>">
                </td>
                </tr>
                <tr>
                <th>Status</th>
                <td>
                    <input type="text" name="verif" value="<?= $data_penerbit["verif"] ?>">
                </td>
                </tr>
        </table>
            <button type="update" name="update">SUBMIT</button>
</form>
</div>
</body>
</html>