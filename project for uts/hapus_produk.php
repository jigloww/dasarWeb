<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: index_login.php');
    exit;
}
include 'koneksi.php';
$id = $_GET['id'];
pg_query($conn, "DELETE FROM \"Atasan_Pria\" WHERE \"Id\" = $id");
header("Location: produk.php");

?>
