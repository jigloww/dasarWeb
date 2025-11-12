<?php
require 'koneksi.php';
$conn = get_pg_connection();
echo "Koneksi berhasil ke database. Versi PostgreSQL: " . pg_parameter_status($conn, 'server_version');
?>
