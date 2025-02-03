<?php
include "../koneksi.php";

$id_dosen_1 = $_GET['id_dosen_1'];

// Mulai transaksi untuk memastikan konsistensi data
mysqli_begin_transaction($mysqli);

try {
    // 1. Hapus data terkait di tabel penelitian_1 terlebih dahulu
    mysqli_query($mysqli, "DELETE FROM penelitian_1 WHERE id_dosen_1 = '$id_dosen_1'");
    
    // 2. Baru hapus data di tabel dosen_1
    mysqli_query($mysqli, "DELETE FROM dosen_1 WHERE id_dosen_1 = '$id_dosen_1'");
    
    // Commit transaksi jika semua query berhasil
    mysqli_commit($mysqli);
    
    header("location: ../database/dosen.php");
} catch (Exception $e) {
    // Rollback transaksi jika ada error
    mysqli_rollback($mysqli);
    
    // Tampilkan pesan error atau redirect ke halaman error
    die("Gagal menghapus data: " . $e->getMessage());
}
?>