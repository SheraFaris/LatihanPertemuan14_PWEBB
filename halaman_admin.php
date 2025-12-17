<?php
session_start();
if (!isset($_SESSION["login"]) || $_SESSION["level"] !== "admin") {
  header("Location: index.php?err=forbidden");
  exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>Halaman Admin</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="card">
    <h1>Halaman Admin</h1>
    <p>Selamat datang, <b><?=htmlspecialchars($_SESSION["username"])?></b> (Admin).</p>
    <p>Di sini biasanya admin mengelola data, user, laporan, dll.</p>
    <a class="btn" href="logout.php" onclick="return confirm('Logout?')">Logout</a>
  </div>
</body>
</html>
