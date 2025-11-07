<?php include 'koneksi.php'; 
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: index_login.php');
    exit;
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
    Jenis Atasan: <input type="text" name="jenis"><br><br>
    Ukuran: <input type="text" name="ukuran"><br><br>
    Warna: <input type="text" name="warna"><br><br>
    <button type="submit" name="tambah">Tambah</button>
  </form>

  <?php
  if (isset($_POST['tambah'])) {
      $jenis = $_POST['jenis'];
      $ukuran = $_POST['ukuran'];
      $warna = $_POST['warna'];

      $query = "INSERT INTO \"Atasan_Pria\" (\"Jenis_Atasan\", \"Ukuran\", \"Warna\") 
                VALUES ('$jenis', '$ukuran', '$warna')";
      $result = pg_query($conn, $query);

      if ($result) {
          echo "<script>alert('Produk berhasil ditambah!'); window.location='produk.php';</script>";
      } else {
          echo "Gagal menambah produk.";
      }
  }
  ?>
</body>
</html>
