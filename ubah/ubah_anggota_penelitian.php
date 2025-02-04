<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Anggota Penelitian</title>
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
    <h3>Ubah Data Anggota Penelitian</h3>
    <?php
    include "../koneksi.php";
    $id_anggota_1 = $_GET['id_anggota_1'];
    $mysqli = mysqli_query($mysqli, "SELECT * FROM anggota_penelitian_1 WHERE id_anggota_1='$id_anggota_1'");
    while ($data = mysqli_fetch_array($mysqli)) {
    ?>
      <form action="../update/update_anggota_penelitian.php" method="post">
        <table class="table table-striped table-bordered">
          <tr>
            <td>ID Anggota</td>
            <td>
              <input type="number" name="id_anggota_1" class="form-control" value="<?php echo $data['id_anggota_1']; ?>" readonly>
            </td>
          </tr>
          <tr>
            <td>ID Penelitian</td>
            <td>
              <input type="number" name="id_penelitian_1" class="form-control" value="<?php echo $data['id_penelitian_1']; ?>">
            </td>
          </tr>
          <tr>
            <td>ID Dosen</td>
            <td>
              <input type="number" name="id_dosen_1" class="form-control" value="<?php echo $data['id_dosen_1']; ?>">
            </td>
          </tr>
          <tr>
            <td>NPM</td>
            <td>
              <input type="number" name="npm_1" class="form-control" value="<?php echo $data['npm_1']; ?>">
            </td>
          </tr>
          <tr>
            <td>Peran Dalam Penelitian</td>
            <td>
              <input type="text" name="peran_dalam_penelitian_1" class="form-control" value="<?php echo $data['peran_dalam_penelitian_1']; ?>">
            </td>
          </tr>
        </table>
        <div class="form-group">
          <input type="button" value="Kembali" class="btn btn-secondary" onclick="window.location.href='../database/anggota_penelitian.php'">
          <input type="submit" name="update" value="Update" class="btn btn-primary">
        </div>
      </form>
    <?php } ?>
  </div>
</body>
</html>
