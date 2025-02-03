<?php
include "../koneksi.php";

$id_pendanaan_1 = $_GET['id_pendanaan_1'];
mysqli_query($mysqli, "DELETE FROM pendanaan_eksternal_1 WHERE id_pendanaan_1 ='$id_pendanaan_1'");

header("location: ../database/pendanaan_eksternal.php");
?>