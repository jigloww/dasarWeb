<?php
session_start();
require 'koneksi.php';
$conn = get_pg_connection();

if (!isset($_SESSION['id'])) {
    header('Location: index_login.php');
    exit;
}

$res = q('SELECT "Id", "Jenis_Atasan", "Ukuran", "Warna" FROM "Atasan_Pria" ORDER BY "Id" ASC');
$rows = pg_fetch_all($res) ?: [];
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Dashboard | Trive</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Cambria, serif;
      background-color: #fff;
      color: #000;
      margin: 40px;
    }
    h1, h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    .action-container {
      width: 85%;
      margin: 0 auto 20px auto;
      display: flex;
      flex-direction: column;
      align-items: flex-start; /* rata kiri */
      gap: 10px; /* jarak antar tombol */
    }
    .logout-btn {
      background-color: #dc3545;
      color: white;
      border: none;
      padding: 8px 15px;
      border-radius: 5px;
      text-decoration: none;
    }
    .logout-btn:hover {
      background-color: #b02a37;
    }
    .btn-tambah {
      background-color: #007bff;
      color: white;
      padding: 8px 15px;
      border-radius: 5px;
      text-decoration: none;
    }
    .btn-tambah:hover {
      background-color: #0056b3;
    }
    .table-container {
      width: 85%;
      margin: 0 auto;
    }
    th {
      background-color: #f2f2f2;
    }
    th, td {
      text-align: center;
      padding: 10px;
    }
  </style>
</head>
<body>

  <h2>Selamat datang, <?= htmlspecialchars($_SESSION['nama_lengkap'] ?? $_SESSION['username']) ?></h2>
  <h1>Daftar Atasan Pria</h1>

  <!-- Tombol Logout dan Tambah Produk (berjejer vertikal tapi rata kiri) -->
  <div class="action-container">
    <a href="logout.php" class="logout-btn">Logout</a>
    <a href="tambah_produk.php" class="btn-tambah">+ Tambah Produk</a>
  </div>

  <div class="table-container">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Jenis Atasan</th>
          <th>Ukuran</th>
          <th>Warna</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php if ($rows): foreach ($rows as $r): ?>
        <tr>
          <td><?= htmlspecialchars($r['Id']) ?></td>
          <td><?= htmlspecialchars($r['Jenis_Atasan']) ?></td>
          <td><?= htmlspecialchars($r['Ukuran']) ?></td>
          <td><?= htmlspecialchars($r['Warna']) ?></td>
          <td>
            <a href="edit_produk.php?id=<?= $r['Id'] ?>" class="btn btn-success btn-sm">Edit</a>
            <a href="hapus_produk.php?id=<?= $r['Id'] ?>" class="btn btn-secondary btn-sm" onclick="return confirm('Yakin hapus produk ini?')">Hapus</a>
          </td>
        </tr>
        <?php endforeach; else: ?>
        <tr><td colspan="5">Belum ada data.</td></tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>

</body>
</html>
