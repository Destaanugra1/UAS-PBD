<?php
include "../koneksi.php";

$id_penelitian_1 = $_POST['id_penelitian_1'];
$judul_1 = $_POST['judul_1'];
$tahun_penelitian_1 = $_POST['tahun_penelitian_1'];
$id_dosen_1 = $_POST['id_dosen_1'];
$sumber_dana_1 = $_POST['sumber_dana_1'];
$jumlah_dana_1 = $_POST['jumlah_dana_1'];
$status_penelitian_1 = $_POST['status_penelitian_1'];

mysqli_query($mysqli, "insert into penelitian_1 values
                                                  ('$id_penelitian_1',
                                                  '$judul_1',
                                                  '$tahun_penelitian_1', 
                                                  '$id_dosen_1', 
                                                  '$sumber_dana_1', 
                                                  '$jumlah_dana_1', 
                                                  '$status_penelitian_1')");

header("location: ../database/anggota_penelitian.php?pesan=update");