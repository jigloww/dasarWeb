<?php
include 'koneksi.php';
$conn = get_pg_connection(); // panggil koneksi agar $conn tidak undefined

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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        table {
            width: 80%;
            margin: 20px auto;
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
        .login-link {
            text-align: center;
            margin-top: 20px;
        }
        .login-link a {
            text-decoration: none;
            color: #007bff;
        }
        .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<h1>Daftar Atasan Pria</h1>

<table>
    <tr>
        <th>Artikel</th>
        <th>Jenis Atasan</th>
        <th>Ukuran</th>
        <th>Warna</th>
    </tr>

    <?php while ($row = pg_fetch_assoc($result)): ?>
    <tr>
        <td><?= htmlspecialchars($row["Id"]) ?></td>
        <td><?= htmlspecialchars($row["Jenis_Atasan"]) ?></td>
        <td><?= htmlspecialchars($row["Ukuran"]) ?></td>
        <td><?= htmlspecialchars($row["Warna"]) ?></td>
    </tr>
    <?php endwhile; ?>
</table>

<div class="login-link">
    <p>Ingin menambah atau mengedit produk? <a href="index_login.php">Login di sini</a></p>
</div>

</body>
</html>
