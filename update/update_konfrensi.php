<?php

include "../koneksi.php";
$id_konferensi_1 = $_POST['id_konferensi_1'];
$id_penelitian_1 = $_POST['id_penelitian_1'];
$nama_konferensi_1 = $_POST['nama_konferensi_1'];
$lokasi_1 = $_POST['lokasi_1'];
$tanggal_1 = $_POST['tanggal_1'];


mysqli_query($mysqli, "UPDATE konferensi_1 SET id_konferensi_1='$id_konferensi_1',
                                        id_penelitian_1='$id_penelitian_1',
                                        nama_konferensi_1='$nama_konferensi_1',
                                        lokasi_1='$lokasi_1',
                                        tanggal_1='$tanggal_1'
                                      WHERE id_konferensi_1='$id_konferensi_1'");

header("location: ../database/konfrensi.php?pesan=update");
?>