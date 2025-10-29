<?php
// Menggunakan file koneksi.php yang telah dibuat
include "koneksi.php"; 

$username = $_POST['username'];
$password = md5($_POST['password']);

// PENTING: Untuk menghindari SQL Injection, lebih baik gunakan prepared statements.
// Namun, mengikuti struktur kode asli dengan penggantian fungsi ke MySQLi:

$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";

// Menggunakan mysqli_query()
$result = mysqli_query($connect, $query); 

// Menggunakan mysqli_num_rows()
$cek = mysqli_num_rows($result);

if ($cek > 0) { // Cek apakah ada baris data ditemukan
    // Jika data ditemukan (login berhasil)
    echo "Anda berhasil login. silahkan menuju ";
    echo "<a href=\"homeAdmin.html\">Halaman HOME</a>";
} else {
    // Jika data tidak ditemukan (login gagal)
    echo "Anda gagal login. silahkan ";
    echo "<a href=\"loginForm.html\">Login kembali</a>";
    // Menampilkan error jika ada masalah dengan query (debug)
    echo mysqli_error($connect); 
}

// Opsional: Menutup koneksi
mysqli_close($connect);
?>