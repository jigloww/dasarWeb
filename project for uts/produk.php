<?php
// Koneksi ke PostgreSQL
$host = 'localhost';
$port = '5432';
$dbname = 'triveweb';
$user = 'postgres';
$pass = 'Jamdinding20';

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$pass");
if (!$conn) {
    die('Koneksi gagal: ' . pg_last_error());
}

// Set encoding UTF8
pg_set_client_encoding($conn, 'UTF8');

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
            <td><?= htmlspecialchars($row["Id"], ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?= htmlspecialchars($row["Jenis_Atasan"], ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?= htmlspecialchars($row["Ukuran"], ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?= htmlspecialchars($row["Warna"], ENT_QUOTES, 'UTF-8'); ?></td>
            <td>
                <a href="#">Edit</a> | 
                <a href="#">Hapus</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>

</body>
</html>

<?php
pg_free_result($result);
pg_close($conn);
?>