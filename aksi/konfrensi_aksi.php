<?php
include "../koneksi.php";

$id_konferensi_1 = $_POST['id_konferensi_1'];
$id_penelitian_1 = $_POST['id_penelitian_1'];
$nama_konferensi_1 = $_POST['nama_konferensi_1'];
$lokasi_1 = $_POST['lokasi_1'];
$tanggal_1 = $_POST['tanggal_1'];

mysqli_query($mysqli, "insert into konferensi_1 values
                                                  ('$id_konferensi_1',
                                                  '$id_penelitian_1',
                                                  '$nama_konferensi_1', 
                                                  '$lokasi_1', 
                                                  '$tanggal_1')");

header("location: ../database/konfrensi.php?pesan=update");