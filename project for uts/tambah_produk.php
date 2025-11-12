<?php
session_start();
require 'koneksi.php';
$conn = get_pg_connection();

if (!isset($_SESSION['id'])) {
    header('Location: index_login.php');
    exit;
}

if (isset($_POST['tambah'])) {
    $jenis = trim($_POST['jenis']);
    $ukuran = trim($_POST['ukuran']);
    $warna = trim($_POST['warna']);

    if ($jenis && $ukuran && $warna) {
        $query = 'INSERT INTO "Atasan_Pria" ("Jenis_Atasan", "Ukuran", "Warna") VALUES ($1, $2, $3)';
        $res = pg_query_params($conn, $query, [$jenis, $ukuran, $warna]);
        if ($res) {
            echo "<script>alert('Produk berhasil ditambah!'); window.location='dashboard.php';</script>";
            exit;
        } else {
            echo "Gagal menambah produk: " . pg_last_error($conn);
        }
    } else {
        echo "Semua field wajib diisi!";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Produk</title>
</head>
<body>
  <h2>Tambah Produk Baru</h2>
  <form method="POST">
    Jenis Atasan: <input type="text" name="jenis" required><br><br>
    Ukuran: <input type="text" name="ukuran" required><br><br>
    Warna: <input type="text" name="warna" required><br><br>
    <button type="submit" name="tambah">Tambah</button>
  </form>
</body>
</html>
