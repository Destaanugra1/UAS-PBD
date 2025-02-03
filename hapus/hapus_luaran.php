<?php
include "../koneksi.php";

$id_luaran_1 = $_GET['id_luaran_1'];
mysqli_query($mysqli, "DELETE FROM luaran_penelitian_1 WHERE id_luaran_1 ='$id_luaran_1'");

header("location: ../database/luaran_penelitian.php");
?>