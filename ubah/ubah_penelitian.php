<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Penelitian</title>
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
    <h3>Ubah Data Penelitian</h3>
    <?php
    include "../koneksi.php";
    $id_penelitian_1 = $_GET['id_penelitian_1'];
    $mysqli = mysqli_query($mysqli, "SELECT * FROM penelitian_1 WHERE id_penelitian_1='$id_penelitian_1'");
    while ($data = mysqli_fetch_array($mysqli)) {
    ?>
      <form action="../update/update_penelitian.php" method="post">
        <table class="table table-striped table-bordered">
          <tr>
            <td>Judul</td>
            <td>
              <input type="hidden" name="id_penelitian_1" class="form-control" value="<?php echo $data['id_penelitian_1']; ?>">
              <input type="text" name="judul_1" class="form-control" value="<?php echo $data['judul_1']; ?>">
            </td>
          </tr>
          <tr>
            <td>Tahun Penelitian</td>
            <td>
              <input type="number" name="tahun_penelitian_1" class="form-control" value="<?php echo $data['tahun_penelitian_1']; ?>" min="1900" max="<?php echo date('Y'); ?>" required>
            </td>
          </tr>
          <tr>
            <td>ID Dosen</td>
            <td>
              <input type="text" name="id_dosen_1" class="form-control" value="<?php echo $data['id_dosen_1']; ?>" readonly>
            </td>
          </tr>
          <tr>
            <td>Sumber Dana</td>
            <td>
              <input type="text" name="sumber_dana_1" class="form-control" value="<?php echo $data['sumber_dana_1']; ?>">
            </td>
          </tr>
          <tr>
            <td>Jumlah Dana</td>
            <td>
              <input type="number" name="jumlah_dana_1" class="form-control" value="<?php echo $data['jumlah_dana_1']; ?>">
            </td>
          </tr>
          <tr>
            <td>Status Penelitian</td>
            <td>
              <input type="text" name="status_penelitian_1" class="form-control" value="<?php echo $data['status_penelitian_1']; ?>">
            </td>
          </tr>
        </table>
        <div class="form-group">
          <input type="button" value="Kembali" class="btn btn-secondary" onclick="window.location.href='../database/penelitian.php'">
          <input type="submit" name="update" value="Update" class="btn btn-primary">
        </div>
      </form>
    <?php } ?>
  </div>
</body>
</html>
