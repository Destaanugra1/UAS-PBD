<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Luaran Penelitian</title>
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
    <h3>Ubah Data Luaran Penelitian</h3>
    <?php
    include "../koneksi.php";
    $id_luaran_1 = $_GET['id_luaran_1'];
    $mysqli = mysqli_query($mysqli, "SELECT * FROM luaran_penelitian_1 WHERE id_luaran_1='$id_luaran_1'");
    while ($data = mysqli_fetch_array($mysqli)) {
    ?>
      <form action="../update/update_luaran.php" method="post">
        <table class="table table-striped table-bordered">
          <tr>
            <td>ID Luaran</td>
            <td>
              <input type="text" name="id_luaran_1" class="form-control" value="<?php echo $data['id_luaran_1']; ?>" readonly>
            </td>
          </tr>
          <tr>
            <td>ID Penelitian</td>
            <td>
              <input type="number" name="id_penelitian_1" class="form-control" value="<?php echo $data['id_penelitian_1']; ?>">
            </td>
          </tr>
          <tr>
            <td>Jenis Luaran</td>
            <td>
              <input type="text" name="jenis_luaran_1" class="form-control" value="<?php echo $data['jenis_luaran_1']; ?>">
            </td>
          </tr>
          <tr>
            <td>Judul</td>
            <td>
              <input type="text" name="judul_1" class="form-control" value="<?php echo $data['judul_1']; ?>">
            </td>
          </tr>
          <tr>
            <td>Penerbit</td>
            <td>
              <input type="text" name="penerbit_1" class="form-control" value="<?php echo $data['penerbit_1']; ?>">
            </td>
          </tr>
          <tr>
            <td>Tahun Terbit</td>
            <td>
              <input type="number" name="tahun_terbit_1" class="form-control" value="<?php echo $data['tahun_terbit_1']; ?>">
            </td>
          </tr>
        </table>
        <div class="form-group">
          <input type="button" value="Kembali" class="btn btn-secondary" onclick="window.location.href='../database/luaran_penelitian.php'">
          <input type="submit" name="update" value="Update" class="btn btn-primary">
        </div>
      </form>
    <?php } ?>
  </div>
</body>
</html>
