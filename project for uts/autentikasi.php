<?php
session_start();
require 'koneksi.php';
$conn = get_pg_connection();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    $res = qparams('SELECT id, username, password_hash, nama_lengkap FROM users WHERE username=$1', [$username]);
    $user = pg_fetch_assoc($res);

    if ($user && password_verify($password, $user['password_hash'])) {
        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['nama_lengkap'] = $user['nama_lengkap'];
        header('Location: dashboard.php');
        exit;
    } else {
        header('Location: index_login.php?error=' . urlencode('Username atau password salah.'));
        exit;
    }
}
?>