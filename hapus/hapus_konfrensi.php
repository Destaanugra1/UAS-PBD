<?php
include_once("../koneksi.php");

if (isset($_GET['id_konferensi_1'])) {
    $id_konferensi_1 = mysqli_real_escape_string($mysqli, $_GET['id_konferensi_1']);

    $query = "DELETE FROM konferensi_1 WHERE id_konferensi_1 = '$id_konferensi_1'";
    $result = mysqli_query($mysqli, $query);

    if ($result) {
        header("Location: ../database/konfrensi.php");
        exit();
    } else {
        echo "Gagal menghapus data: " . mysqli_error($mysqli);
    }
} else {
    echo "ID tidak ditemukan.";
}
?>
