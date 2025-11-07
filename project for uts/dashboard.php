<?php
session_start();
require 'koneksi.php';
$conn = get_pg_connection();

if (!isset($_SESSION['id'])) {
    header('Location: index_login.php');
    exit;
}

// Ambil semua data produk
$res = q('SELECT "Id", "Jenis_Atasan", "Ukuran", "Warna" FROM "Atasan_Pria" ORDER BY "Id" ASC');
$rows = pg_fetch_all($res) ?: [];
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
  <h2>Selamat datang, <?= htmlspecialchars($_SESSION['nama_lengkap'] ?? $_SESSION['username']) ?></h2>
  <p><a href="logout.php" class="btn btn-danger btn-sm">Logout</a></p>

  <h3>Daftar Atasan Pria</h3>
  <p><a href="tambah_produk.php" class="btn btn-primary btn-sm">+ Tambah Produk</a></p>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th><th>Jenis Atasan</th><th>Ukuran</th><th>Warna</th><th>Aksi</th>
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
          <a href="edit_produk.php?id=<?= $r['Id'] ?>" class="btn btn-sm btn-outline-primary">Edit</a>
          <a href="hapus_produk.php?id=<?= $r['Id'] ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Yakin hapus produk ini?')">Hapus</a>
        </td>
      </tr>
    <?php endforeach; else: ?>
      <tr><td colspan="5">Belum ada data.</td></tr>
    <?php endif; ?>
    </tbody>
  </table>
</body>
</html>
