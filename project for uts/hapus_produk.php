<?php
session_start();
require 'koneksi.php';
$conn = get_pg_connection();

if (!isset($_SESSION['id'])) {
    header('Location: index_login.php');
    exit;
}

$id = $_GET['id'] ?? null;
if ($id) {
    pg_query_params($conn, 'DELETE FROM "Atasan_Pria" WHERE "Id"=$1', [$id]);
}
header('Location: dashboard.php');
exit;
?>