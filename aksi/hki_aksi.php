<?php
include "../koneksi.php";

$id_hki_1 = $_POST['id_hki_1'];
$id_penelitian_1 = $_POST['id_penelitian_1'];
$jenis_hki_1 = $_POST['jenis_hki_1'];
$nomor_registrasi_1 = $_POST['nomor_registrasi_1'];
$status_1 = $_POST['status_1'];

mysqli_query($mysqli, "insert into hki_1 values
                                                  ('$id_hki_1',
                                                  '$id_penelitian_1',
                                                  '$jenis_hki_1', 
                                                  '$nomor_registrasi_1', 
                                                  '$status_1')");

header("location: ../database/hki.php?pesan=update");