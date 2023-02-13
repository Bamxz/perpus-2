<?php
    include_once('../class/User.php');

    $user = new User;
    $data_user = $user->find(2);

?>
    <h1>Perpus SMKN 64 Jakarta</h1>

    <div class ="sidebar">
       <h3>SELAMAT DATANG <?= $data_user ["username"] ?></h3>
        <ul>
            <li><a href = "index.php">Dashboard</a></li>
            <li><a href = "peminjaman.php">Peminjaman Buku</a></li>
            <li><a href = "pengembalian.php">Pengembalian Buku</a></li>
            <li><a href = "pesan.php">Pesan</a></li>
            <li><a href = "profil.php">Profil Saya</a></li>
            <li><a href = "">Keluar</a></li>
        </ul>
    </div>