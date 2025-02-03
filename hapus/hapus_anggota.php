<?php
include "../koneksi.php";

$id_anggota_1 = $_GET['id_anggota_1'];
mysqli_query($mysqli, "DELETE FROM anggota_penelitian_1 WHERE id_anggota_1 ='$id_anggota_1'");

header("location: ../database/anggota_penelitian.php");
?>