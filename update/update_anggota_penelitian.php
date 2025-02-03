<?php

include "../koneksi.php";
$id_anggota_1 = $_POST['id_anggota_1'];
$id_penelitian_1 = $_POST['id_penelitian_1'];
$id_dosen_1 = $_POST['id_dosen_1'];
$npm_1 = $_POST['npm_1'];
$peran_dalam_penelitian_1 = $_POST['peran_dalam_penelitian_1'];

mysqli_query($mysqli, "UPDATE anggota_penelitian_1 SET id_penelitian_1='$id_penelitian_1', id_dosen_1='$id_dosen_1', npm_1='$npm_1', peran_dalam_penelitian_1='$peran_dalam_penelitian_1' WHERE id_anggota_1='$id_anggota_1'");

header("location: ../database/anggota_penelitian.php?pesan=update");
?>