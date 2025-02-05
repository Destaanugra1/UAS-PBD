<?php
include "../koneksi.php";

$id_penelitian_1 = $_GET['id_penelitian_1'];

// penghapusan record pertama
mysqli_query($mysqli, "DELETE FROM anggota_penelitian_1 WHERE id_penelitian_1 ='$id_penelitian_1'");
mysqli_query($mysqli, "DELETE FROM pendanaan_eksternal_1 WHERE id_penelitian_1 ='$id_penelitian_1'");
mysqli_query($mysqli, "DELETE FROM luaran_penelitian_1 WHERE id_penelitian_1 ='$id_penelitian_1'");
mysqli_query($mysqli, "DELETE FROM konferensi_1 WHERE id_penelitian_1 ='$id_penelitian_1'");
mysqli_query($mysqli, "DELETE FROM hki_1 WHERE id_penelitian_1 ='$id_penelitian_1'");

// penghapusan utama berdsarkan fk table penelitian_1
mysqli_query($mysqli, "DELETE FROM penelitian_1 WHERE id_penelitian_1 ='$id_penelitian_1'");

// Redirect back
header("location: ../database/penelitian.php");
?>
