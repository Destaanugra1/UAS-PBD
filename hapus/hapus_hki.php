<?php
include "../koneksi.php";

$id_hki_1  = $_GET['id_hki_1'];
mysqli_query($mysqli, "DELETE FROM hki_1 WHERE id_hki_1 ='$id_hki_1'");

header("location: ../database/hki.php");
?>