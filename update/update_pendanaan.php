<?php

include "../koneksi.php";
$id_pendanaan_1 = $_POST['id_pendanaan_1'];
$id_penelitian_1 = $_POST['id_penelitian_1'];
$nama_pemberi_dana_1 = $_POST['nama_pemberi_dana_1'];
$jumlah_dana_1 = $_POST['jumlah_dana_1'];
$tahun_1 = $_POST['tahun_1'];

mysqli_query($mysqli, "UPDATE pendanaan_eksternal_1 SET id_pendanaan_1='$id_pendanaan_1',
                                        id_penelitian_1='$id_penelitian_1',
                                        nama_pemberi_dana_1='$nama_pemberi_dana_1',
                                        jumlah_dana_1='$jumlah_dana_1',
                                        tahun_1='$tahun_1'
                                      WHERE id_pendanaan_1='$id_pendanaan_1'");

header("location: ../database/pendanaan_eksternal.php?pesan=update");
?>