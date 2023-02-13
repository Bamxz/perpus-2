<?php

include_once('../class/Pesan.php');

$pesan_id = $_GET["id"];

$pesan = new Pesan;
$data_pesan = $pesan->find($pesan_id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baca Pesan</title>
</head>
<body>
    <?php include('../sidebar.php') ?>

    <div class = "baca_pesan">
        <h3>Pesan</h3>

        <a href = "pesan.php">Kembali</a>

        <table border ="1">
            <tr>
                <th>Judul Pesan</th>
                <td><?= $data_pesan["judul_pesan"] ?></td>
            </tr>
            <tr>
                <th>Isi Pesan</th>
                <td><?= $data_pesan["isi_pesan"] ?></td>
            </tr>
        </table>
    </div>
</body>
</html>