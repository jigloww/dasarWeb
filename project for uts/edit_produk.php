<?php
session_start();
require 'koneksi.php';
$conn = get_pg_connection();

if (!isset($_SESSION['id'])) {
    header('Location: index_login.php');
    exit;
}

$id = $_GET['id'] ?? null;
if (!$id) { die('ID tidak ditemukan.'); }

$res = pg_query_params($conn, 'SELECT * FROM "Atasan_Pria" WHERE "Id"=$1', [$id]);
$data = pg_fetch_assoc($res);

if (!$data) {
    die('Data tidak ditemukan.');
}

if (isset($_POST['update'])) {
    $jenis = $_POST['jenis'];
    $ukuran = $_POST['ukuran'];
    $warna = $_POST['warna'];

    pg_query_params($conn, 'UPDATE "Atasan_Pria" SET "Jenis_Atasan"=$1, "Ukuran"=$2, "Warna"=$3 WHERE "Id"=$4', [$jenis, $ukuran, $warna, $id]);
    header('Location: dashboard.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Produk</title>
</head>
<body>
  <h2>Edit Produk</h2>
  <form method="POST">
    Jenis Atasan: <input type="text" name="jenis" value="<?= htmlspecialchars($data['Jenis_Atasan']) ?>"><br><br>
    Ukuran: <input type="text" name="ukuran" value="<?= htmlspecialchars($data['Ukuran']) ?>"><br><br>
    Warna: <input type="text" name="warna" value="<?= htmlspecialchars($data['Warna']) ?>"><br><br>
    <button type="submit" name="update">Update</button>
  </form>
</body>
</html>
