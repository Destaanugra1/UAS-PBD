<?php
include "../koneksi.php";

$id_dosen_1 = $_GET['id_konferensi_1'];
mysqli_query($mysqli, "DELETE FROM konferensi_1 WHERE id_konferensi_1 ='$id_konferensi_1'");

header("location: ../database/konfrensi.php");
?>