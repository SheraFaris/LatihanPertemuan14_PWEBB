<?php
session_start();
if (isset($_SESSION["level"])) {
  // Jika sudah login, lempar ke halaman sesuai level
  if ($_SESSION["level"] === "admin") header("Location: halaman_admin.php");
  if ($_SESSION["level"] === "pegawai") header("Location: halaman_pegawai.php");
  if ($_SESSION["level"] === "pengurus") header("Location: halaman_pengurus.php");
  exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>Login Multi Level</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Login</h1>
    <small>Masuk sebagai Admin / Pegawai / Pengurus</small>

    <?php if (isset($_GET["err"])): ?>
      <div class="notice">
        <?php
          $err = $_GET["err"];
          if ($err === "empty") echo "Username dan password wajib diisi.";
          else if ($err === "invalid") echo "Username atau password salah.";
          else if ($err === "forbidden") echo "Akses ditolak. Silakan login dulu.";
          else echo "Terjadi kesalahan.";
        ?>
      </div>
    <?php endif; ?>

    <form method="POST" action="cek_login.php">
      <label>Username</label>
      <input type="text" name="username" autocomplete="username" required>

      <label>Password</label>
      <input type="password" name="password" autocomplete="current-password" required>

      <button type="submit">Login</button>
    </form>
  </div>
</body>
</html>
