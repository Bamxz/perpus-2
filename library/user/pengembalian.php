<?php
    include_once ("../class/Peminjaman.php");
    include_once ('../class/User.php');

    $user = new User;
    $data_user = $user->find(2);

    $pengembalian = new Peminjaman;
    $data_peminjaman = $pengembalian -> getPengembalian(2);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengembalian Buku</title>
</head>
<body>

            <?php include ('../sidebar.php') ?>

        <div class = "pengembalian">
                <h3>Buku Yang Sudah Dikembalikan</h3>
                

            <table border ="1">
                <tr>
                    <th>No.</th>
                    <th>Buku</th>
                    <th>Tanggal Peminjaman
                    <th>Tanggal Pengembalian</th>
                    <th>Kondisi Buku Saat Dikemballikan</th>
                </tr>

                <?php
                    foreach($data_peminjaman as $key => $p){
                        ?>
                            <tr>
                                <td><?=$key+1 ?></td>
                                <td><?=$p["buku"] ?></td>
                                <td><?=$p["tanggal_peminjaman"] ?></td>
                                <td><?=$p["tanggal_pengembalian"] ?></td>
                                <td><?=$p["kondisi_buku_saat_dikembalikan"] ?></td>
                            </tr>

                        <?php
                    }
                ?>
            </table>

        </div>
            
                
</body>
</html>