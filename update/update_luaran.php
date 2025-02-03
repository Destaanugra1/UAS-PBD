<?php

include "../koneksi.php";
$id_luaran_1 = $_POST['id_luaran_1'];
$id_penelitian_1 = $_POST['id_penelitian_1'];
$jenis_luaran_1 = $_POST['jenis_luaran_1'];
$judul_1 = $_POST['judul_1'];
$penerbit_1 = $_POST['penerbit_1'];
$tahun_terbit_1 = $_POST['tahun_terbit_1'];

mysqli_query($mysqli, "UPDATE luaran_penelitian_1 SET id_luaran_1='$id_luaran_1',
                                        id_penelitian_1='$id_penelitian_1',
                                        jenis_luaran_1='$jenis_luaran_1',
                                        judul_1='$judul_1',
                                        penerbit_1='$penerbit_1',
                                        tahun_terbit_1='$tahun_terbit_1'
                                      WHERE id_luaran_1='$id_luaran_1'");

header("location: ../database/luaran_penelitian.php?pesan=update");
?>