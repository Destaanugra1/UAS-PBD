<?php

include "../koneksi.php";
$npm_1 = $_POST['npm_1'];
$nama_mahasiswa_1 = $_POST['nama_mahasiswa_1'];
$fakultas_1 = $_POST['fakultas_1'];
$program_studi_1 = $_POST['program_studi_1'];
$email_1 = $_POST['email_1'];
$no_telepon_1 = $_POST['no_telepon_1'];

mysqli_query($mysqli, "UPDATE mahasiswa_1 SET npm_1='$npm_1',
                                        nama_mahasiswa_1='$nama_mahasiswa_1',
                                        fakultas_1='$fakultas_1',
                                        program_studi_1='$program_studi_1',
                                        email_1='$email_1',
                                        no_telepon_1='$no_telepon_1'
                                      WHERE npm_1='$npm_1'");

header("location: ../database/mahasiswa.php?pesan=update");
?>