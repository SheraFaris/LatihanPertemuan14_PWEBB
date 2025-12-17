<?php
session_start();
if (!isset($_SESSION["login"]) || $_SESSION["level"] !== "pegawai") {
  header("Location: index.php?err=forbidden");
  exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>Halaman Pegawai</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="card">
    <h1>Halaman Pegawai</h1>
    <p>Selamat datang, <b><?=htmlspecialchars($_SESSION["username"])?></b> (Pegawai).</p>
    <p>Di sini pegawai menjalankan fitur operasional sesuai hak akses.</p>
    <a class="btn" href="logout.php" onclick="return confirm('Logout?')">Logout</a>
  </div>
</body>
</html>
