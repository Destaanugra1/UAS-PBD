<?php
include "../koneksi.php";

$id_anggota_1 = $_POST['id_anggota_1'];
$id_penelitian_1 = $_POST['id_penelitian_1'];
$id_dosen_1 = $_POST['id_dosen_1'];
$npm_1 = $_POST['npm_1'];
$peran_dalam_penelitian_1 = $_POST['peran_dalam_penelitian_1'];

mysqli_query($mysqli, "insert into anggota_penelitian_1 values('$id_anggota_1',
                                                  '$id_penelitian_1',
                                                  '$id_dosen_1', 
                                                  '$npm_1', 
                                                  '$peran_dalam_penelitian_1')");

header("location: ../database/anggota_penelitian.php?pesan=update");