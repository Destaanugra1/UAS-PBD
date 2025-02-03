<?php
include "../koneksi.php";

$npm_1 = $_GET['npm_1'];
mysqli_query($mysqli, "DELETE FROM mahasiswa_1 WHERE npm_1 ='$npm_1'");
mysqli_query($mysqli, "DELETE FROM penelitian_1 WHERE id_penelitian_1 ='$id_penelitian_1'");

header("location: ../database/mahasiswa.php");
?>