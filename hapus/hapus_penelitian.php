<?php
include "../koneksi.php";

$id_penelitian_1 = $_GET['id_penelitian_1'];
mysqli_query($mysqli, "DELETE FROM penelitian_1 WHERE id_penelitian_1 ='$id_penelitian_1'");

header("location: ../database/penelitian.php");
?>