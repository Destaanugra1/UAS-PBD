<?php
include "../koneksi.php";

$npm_1 = $_GET['npm_1'];

// menghapus data yg terdapat di table anggota_penelitian_1 berdasarkan npm_1
mysqli_query($mysqli, "DELETE FROM anggota_penelitian_1 WHERE npm_1 ='$npm_1'");

// lalu data data yang ada ditable mahasiswa_1 berdasarkan npm_1 dapat terhapus
mysqli_query($mysqli, "DELETE FROM mahasiswa_1 WHERE npm_1 ='$npm_1'");

header("location: ../database/mahasiswa.php");
?>