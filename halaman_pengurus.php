<?php
session_start();
if (!isset($_SESSION["login"]) || $_SESSION["level"] !== "pengurus") {
  header("Location: index.php?err=forbidden");
  exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>Halaman Pengurus</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="card">
    <h1>Halaman Pengurus</h1>
    <p>Selamat datang, <b><?=htmlspecialchars($_SESSION["username"])?></b> (Pengurus).</p>
    <p>Di sini pengurus mengelola kebutuhan tertentu (mis. approval, rekap, monitoring).</p>
    <a class="btn" href="logout.php" onclick="return confirm('Logout?')">Logout</a>
  </div>
</body>
</html>
