<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Konferensi</title>
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
    <h3>Ubah Data Konferensi</h3>
    <?php
    include "../koneksi.php";
    $id_konferensi_1 = $_GET['id_konferensi_1'];
    $mysqli = mysqli_query($mysqli, "SELECT * FROM konferensi_1 WHERE id_konferensi_1='$id_konferensi_1'");
    while ($data = mysqli_fetch_array($mysqli)) {
    ?>
      <form action="../update/update_konfrensi.php" method="post">
        <table class="table table-striped table-bordered">
          <tr>
            <td>ID Konferensi</td>
            <td>
              <input type="text" name="id_konferensi_1" class="form-control" value="<?php echo $data['id_konferensi_1']; ?>" readonly>
            </td>
          </tr>
          <tr>
            <td>ID Penelitian</td>
            <td>
              <input type="number" name="id_penelitian_1" class="form-control" value="<?php echo $data['id_penelitian_1']; ?>">
            </td>
          </tr>
          <tr>
            <td>Nama Konferensi</td>
            <td>
              <input type="text" name="nama_konferensi_1" class="form-control" value="<?php echo $data['nama_konferensi_1']; ?>">
            </td>
          </tr>
          <tr>
            <td>Lokasi</td>
            <td>
              <input type="text" name="lokasi_1" class="form-control" value="<?php echo $data['lokasi_1']; ?>">
            </td>
          </tr>
          <tr>
            <td>Tanggal</td>
            <td>
              <input type="date" name="tanggal_1" class="form-control" value="<?php echo $data['tanggal_1']; ?>">
            </td>
          </tr>
        </table>
        <div class="form-group">
          <input type="button" value="Kembali" class="btn btn-secondary" onclick="window.location.href='../database/konfrensi.php'">
          <input type="submit" name="update" value="Update" class="btn btn-primary">
        </div>
      </form>
    <?php } ?>
  </div>
</body>
</html>
