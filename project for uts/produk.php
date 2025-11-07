<?php include 'koneksi.php'; 
// Ambil data dari tabel Atasan_Pria
$sql = 'SELECT "Id", "Jenis_Atasan", "Ukuran", "Warna" FROM "Atasan_Pria" ORDER BY "Id" ASC';
$result = pg_query($conn, $sql);

if (!$result) {
    die('Query gagal: ' . pg_last_error($conn));
}
?>

<!DOCTYPE html>
<html lang="id">
    
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <title>Produk Atasan Pria</title>
    <style>
        body {
            font-family: Cambria, serif;
            background-color: #fff;
            color: #000;
            margin: 40px;
        }
        h1 {
            text-align: center;
        }
        .table-container {
            width: 80%;
            margin: 20px auto;
        }
        .btn-tambah {
            display: inline-block;
            background-color: #007bff;
            color: white;
            padding: 8px 15px;
            border-radius: 5px;
            text-decoration: none;
            margin-bottom: 10px;
        }
        .btn-tambah:hover {
            background-color: #0056b3;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        a {
            text-decoration: none;
            color: #007bff;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<h1>Daftar Atasan Pria</h1>

<div class="table-container">
    <a href="tambah_produk.php" class="btn-tambah">+ Tambah Produk</a>

    <table>
        <tr>
            <th>Artikel</th>
            <th>Jenis Atasan</th>
            <th>Ukuran</th>
            <th>Warna</th>
            <th>Aksi</th>
        </tr>

        <?php while ($row = pg_fetch_assoc($result)): ?>
        <tr>
            <td><?= htmlspecialchars($row['Id']) ?></td>
            <td><?= htmlspecialchars($row['Jenis_Atasan']) ?></td>
            <td><?= htmlspecialchars($row['Ukuran']) ?></td>
            <td><?= htmlspecialchars($row['Warna']) ?></td>
            <td>
                <a href="edit_produk.php?id=<?= $row['Id'] ?>" class="btn btn-outline-primary">Edit</a> |
                <a href="hapus_produk.php?id=<?= $row['Id'] ?>" class="btn btn-outline-primary" onclick="return confirm('Anda yakin?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</div>
</body>
</html>