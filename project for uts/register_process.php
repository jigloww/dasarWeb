<?php
session_start();
require 'koneksi.php';

try {
    $conn = get_pg_connection();
} catch (Throwable $e) {
    header('Location: register.php?error=' . urlencode('Gagal koneksi ke database.'));
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: register.php?error=' . urlencode('Akses tidak valid.'));
    exit;
}

$nama_lengkap = trim($_POST['full_name'] ?? '');
$username = trim($_POST['username'] ?? '');
$password = $_POST['password'] ?? '';
$password_confirm = $_POST['password_confirm'] ?? '';

if ($username === '' || $password === '' || $password_confirm === '') {
    header('Location: register.php?error=' . urlencode('Semua field wajib diisi.'));
    exit;
}
if ($password !== $password_confirm) {
    header('Location: register.php?error=' . urlencode('Password tidak sama.'));
    exit;
}

// cek username sudah ada
$check = qparams('SELECT id FROM users WHERE username=$1', [$username]);
if (pg_num_rows($check) > 0) {
    header('Location: register.php?error=' . urlencode('Username sudah digunakan.'));
    exit;
}

// simpan user baru
$hash = password_hash($password, PASSWORD_DEFAULT);
qparams('INSERT INTO users (username, password_hash, nama_lengkap) VALUES ($1, $2, $3)', [$username, $hash, $nama_lengkap]);

header('Location: index_login.php?success=' . urlencode('Registrasi berhasil, silakan login.'));
exit;
?>
