<?php include 'koneksi.php'; ?>
<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: index_login.php');
    exit;
}
$id = $_GET['id'];
$result = pg_query($conn, "SELECT * FROM \"Atasan_Pria\" WHERE \"Id\" = $id");
$data = pg_fetch_assoc($result);

if (isset($_POST['update'])) {
    $jenis = $_POST['jenis'];
    $ukuran = $_POST['ukuran'];
    $warna = $_POST['warna'];

    $update = "UPDATE \"Atasan_Pria\" SET 
               \"Jenis_Atasan\"='$jenis', 
               \"Ukuran\"='$ukuran', 
               \"Warna\"='$warna' 
               WHERE \"Id\" = $id";
    pg_query($conn, $update);
    header("Location: produk.php");
}
?>

<h2>Edit Produk</h2>
<form method="POST">
  Jenis Atasan: <input type="text" name="jenis" value="<?= $data['Jenis_Atasan'] ?>"><br><br>
  Ukuran: <input type="text" name="ukuran" value="<?= $data['Ukuran'] ?>"><br><br>
  Warna: <input type="text" name="warna" value="<?= $data['Warna'] ?>"><br><br>
  <button type="submit" name="update">Update</button>
</form>
