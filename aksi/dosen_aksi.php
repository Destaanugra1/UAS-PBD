<?php
include "../koneksi.php";

$id_dosen_1 = $_POST['id_dosen_1'];
$nama_dosen_1 = $_POST['nama_dosen_1'];
$nidn_1 = $_POST['nidn_1'];
$fakultas_1 = $_POST['fakultas_1'];
$program_studi_1 = $_POST['program_studi_1'];
$email_1 = $_POST['email_1'];
$no_telepon_1 = $_POST['no_telepon_1'];

mysqli_query($mysqli, "insert into dosen_1 values('$id_dosen_1', 
'$nama_dosen_1', '$nidn_1', '$fakultas_1', '$program_studi_1', '$email_1', '$no_telepon_1')");

header("location: ../database/dosen.php?pesan=update");