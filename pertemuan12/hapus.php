<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

$id = $_GET['id'];


if (hapus($id) > 0) {
  echo "<script>
            alert('data BERHASIL dihapus');
            document.location.href = 'index.php';
          </script>";
} else {
  echo "data GAGAL ditambahkan!";
}
