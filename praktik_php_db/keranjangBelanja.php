<html>
    <head>
    </head>
    <body>
        <h2>Keranjang Belanja</h2>

        <?php
        // Ambil data dari cookie
        if (isset($_COOKIE['beliNovel']) && isset($_COOKIE['beliBuku'])) {
            $beliNovel = $_COOKIE['beliNovel'];
            $beliBuku = $_COOKIE['beliBuku'];

            echo "Jumlah Novel: " . $beliNovel . "<br>";
            echo "Jumlah Buku: " . $beliBuku;
        } else {
            echo "Keranjang belanja kosong!";
        }
        ?>
    </body>
</html>