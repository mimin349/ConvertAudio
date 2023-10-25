<!DOCTYPE html>
<html>
<head>
    <title>Halaman PHP</title>
</head>
<body>
    <header>
        <h1>Selamat Datang di Halaman PHP</h1>
    </header>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <p>Ini adalah halaman PHP sederhana.</p>
                
                <?php
                if (isset($_GET['nama'])) {
                    $nama = $_GET['nama'];
                    echo "<p>Halo, $nama!</p>";
                } else {
                    echo "<p>Silakan tambahkan parameter 'nama' ke URL untuk menampilkan pesan personal.</p>";
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
