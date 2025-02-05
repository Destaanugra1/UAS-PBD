<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Mahasiswa</title>
  <link rel="stylesheet" href="../page.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <style>
    body {
      margin-top: 15vh;
    }
    table {
      width: 100%;
    }
    table td {
      padding: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h3>Ubah Data Pendanaan</h3>
    <?php
    include "../koneksi.php";
    $id_pendanaan_1 = $_GET['id_pendanaan_1'];
    $mysqli = mysqli_query($mysqli, "SELECT * FROM pendanaan_eksternal_1 WHERE id_pendanaan_1='$id_pendanaan_1'");
    while ($data = mysqli_fetch_array($mysqli)) {
    ?>
      <form action="../update/update_pendanaan.php" method="post">
        <table class="table table-striped table-bordered">
          <tr>
            <td>ID Pendanaan</td>
            <td>
              <input type="hidden" name="id_pendanaan_1" value="<?php echo $data['id_pendanaan_1']; ?>">
              <input type="number" name="id_pendanaan_1" class="form-control" value="<?php echo $data['id_pendanaan_1']; ?>" readonly>
            </td>
          </tr>
          <tr>
            <td>ID Penelitian</td>
            <td>
              <input type="number" name="id_penelitian_1" class="form-control" value="<?php echo $data['id_penelitian_1']; ?>">
            </td>
          </tr>
          <tr>
            <td>Nama Pemeberi Dana</td>
            <td>
              <input type="text" name="nama_pemberi_dana_1" class="form-control" value="<?php echo $data['nama_pemberi_dana_1']; ?>">
            </td>
          </tr>
          <tr>
            <td>Jumlah Dana</td>
            <td>
              <input type="number" name="jumlah_dana_1" class="form-control" value="<?php echo $data['jumlah_dana_1']; ?>">
            </td>
          </tr>
          <tr>
            <td>Tahun</td>
            <td>
              <input type="number" name="tahun_1" class="form-control" value="<?php echo $data['tahun_1']; ?>">
            </td>
          </tr>
        </table>
        <div class="form-group">
          <input type="button" value="Kembali" class="btn btn-secondary" onclick="window.location.href='../database/pendanaan_eksternal.php'">
          <input type="submit" name="update" value="Update" class="btn btn-primary">
        </div>
      </form>
    <?php } ?>
  </div>
</body>
</html>
