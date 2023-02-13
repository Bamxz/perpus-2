<?php
include_once('../../../class/Penerbit.php');


if(isset($_POST["submit"])){
    $data= [
        "kode" => $_POST["kode"],
        "nama" => $_POST["nama"],
        "verif" => $_POST["verif"],

    ];
        
    $penerbit = new Penerbit;
    $data_penerbit= $penerbit->create($data);
    header("Location: index.php?>pesan=tambah_sukses");

    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Buku</title>
</head>
<body>

    <div class= "form_tambah_penerbit">
        <form method="POST" action="">
            <h3>Form Tambah penerbit</h3>
        <table>
            <tr>
                <td>Kode</td>
                <td><input type="text" name="kode"></td>
            </tr>
            <tr>
                <td>Nama penerbit</td>
                <td><input type="text" name ="nama"><td>
            </tr>
            <tr>
                    <td>Status</td>
                    <td><input type="text" name="verif" value="VERIFIED"></td>
            </tr>
        </table>
            <button type="submit" name="submit">SUBMIT</button>
</form>
</div>
</body>
</html>