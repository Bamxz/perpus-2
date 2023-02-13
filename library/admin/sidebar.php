<h1> Perpus SMKN 64 JAKARTA </h1>

<div class = "sidebar">
    <?= $data_user["fullname"] ?>

    <ul>
        <li><a href="http://localhost/library/admin/index.php">Dashboard</a></li>
        <li><a href="#">Master Data</a>
            <ul>
                <li><a href="http://localhost/library/admin/master_data/data_anggota/index.php">Data Anggota</a></li>
                <li><a href="http://localhost/library/admin/master_data/data_administrator/index.php">Data Administrator</a></li>
                <li><a href="http://localhost/library/admin/master_data/data_peminjaman/index.php">Data Peminjaman</a></li>
            </ul>
        </li>

        <li><a href="#">Katalog Buku</a>
            <ul>
                <li><a href="http://localhost/library/admin/katalog_buku/data_buku/index.php">Data Buku</a></li>
                <li><a href="http://localhost/library/admin/katalog_buku/data_kategori/index.php">Data Kategori</a></li>
                <li><a href="http://localhost/library/admin/katalog_buku/data_penerbit/index.php">Data Penerbit</a></li>
            </ul>
        </li>

        <li><a href ="http://localhost/library/admin/laporan_perpustakaan/index.php">Laporan Perpustakaan</a></li>
        <li><a href ="http://localhost/library/admin/identitas.php">Identitas Aplikasi</a></li>
        <li><a href ="http://localhost/library/admin/pesan.php">Pesan</a></li>
    </ul>
</div>