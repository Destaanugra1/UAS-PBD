<?php
include "../koneksi.php";

$id_penelitian_1 = $_POST['id_penelitian_1'];
$judul_1 = $_POST['judul_1'];
$tahun_penelitian_1 = $_POST['tahun_penelitian_1'];
$id_dosen_1 = $_POST['id_dosen_1'];
$sumber_dana_1 = $_POST['sumber_dana_1'];
$jumlah_dana_1 = $_POST['jumlah_dana_1'];
$status_penelitian_1 = $_POST['status_penelitian_1'];


$query = "UPDATE penelitian_1 SET 
            judul_1 = '$judul_1', 
            tahun_penelitian_1 = '$tahun_penelitian_1', 
            id_dosen_1 = '$id_dosen_1', 
            sumber_dana_1 = '$sumber_dana_1', 
            jumlah_dana_1 = '$jumlah_dana_1', 
            status_penelitian_1 = '$status_penelitian_1' 
          WHERE id_penelitian_1 = '$id_penelitian_1'";

$result = mysqli_query($mysqli, $query);

if ($result) {
    header("location: ../database/penelitian.php?pesan=update");
} else {
    echo "Error updating record: " . mysqli_error($mysqli);
}
?>
