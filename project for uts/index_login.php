<?php
session_start();
if (isset($_SESSION['id'])) {
    header('Location: dashboard.php');
    exit;
}
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Login | Trive</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <div class="container mt-5">
    <div class="card shadow-sm mx-auto" style="max-width: 400px;">
      <div class="card-body">
        <h3 class="text-center mb-4">Masuk ke Dashboard</h3>

        <?php if (!empty($_GET['error'])): ?>
          <div class="alert alert-danger"><?= htmlspecialchars($_GET['error']) ?></div>
        <?php endif; ?>

        <form action="autentikasi.php" method="post">
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input id="username" name="username" type="text" class="form-control" required autofocus>
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input id="password" name="password" type="password" class="form-control" required>
          </div>

          <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">Login</button>
            <a href="register.php" class="btn btn-outline-secondary">Buat Akun</a>
            <a href="produk_home.php" class="btn btn-outline-success">Kembali</a>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
