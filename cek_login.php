<?php
session_start();
require "koneksi.php";

$username = trim($_POST["username"] ?? "");
$password = trim($_POST["password"] ?? "");

if ($username === "" || $password === "") {
  header("Location: index.php?err=empty");
  exit;
}

$stmt = $conn->prepare("SELECT id, username, password, level FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$res = $stmt->get_result();
$user = $res->fetch_assoc();

if (!$user || !password_verify($password, $user["password"])) {
  header("Location: index.php?err=invalid");
  exit;
}

// set session
$_SESSION["login"] = true;
$_SESSION["id"] = $user["id"];
$_SESSION["username"] = $user["username"];
$_SESSION["level"] = $user["level"];

// redirect by role
if ($user["level"] === "admin") header("Location: halaman_admin.php");
else if ($user["level"] === "pegawai") header("Location: halaman_pegawai.php");
else header("Location: halaman_pengurus.php");
exit;
