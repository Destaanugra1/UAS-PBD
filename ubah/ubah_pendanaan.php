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
    <h3>Ubah Data Mahasiswa</h3>
    <?php
    include "../koneksi.php";
    $npm_1 = $_GET['npm_1'];
    $mysqli = mysqli_query($mysqli, "SELECT * FROM mahasiswa_1 WHERE npm_1='$npm_1'");
    while ($data = mysqli_fetch_array($mysqli)) {
    ?>
      <form action="../update/update_mahasiswa.php" method="post">
        <table class="table table-striped table-bordered">
          <tr>
            <td>Nama Mahasiswa</td>
            <td>
              <input type="hidden" name="npm_1" value="<?php echo $data['npm_1']; ?>">
              <input type="text" name="nama_mahasiswa_1" class="form-control" value="<?php echo $data['nama_mahasiswa_1']; ?>">
            </td>
          </tr>
          <tr>
            <td>Fakultas</td>
            <td>
              <input type="text" name="fakultas_1" class="form-control" value="<?php echo $data['fakultas_1']; ?>">
            </td>
          </tr>
          <tr>
            <td>Program Studi</td>
            <td>
              <input type="text" name="program_studi_1" class="form-control" value="<?php echo $data['program_studi_1']; ?>">
            </td>
          </tr>
          <tr>
            <td>Email</td>
            <td>
              <input type="text" name="email_1" class="form-control" value="<?php echo $data['email_1']; ?>">
            </td>
          </tr>
          <tr>
            <td>No Telepon</td>
            <td>
              <input type="text" name="no_telepon_1" class="form-control" value="<?php echo $data['no_telepon_1']; ?>">
            </td>
          </tr>
        </table>
        <div class="form-group">
          <input type="button" value="Kembali" class="btn btn-secondary" onclick="window.location.href='../database/mahasiswa.php'">
          <input type="submit" name="update" value="Update" class="btn btn-primary">
        </div>
      </form>
    <?php } ?>
  </div>
</body>
</html>
