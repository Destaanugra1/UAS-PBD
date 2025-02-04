<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Hki</title>
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
    <h3>Ubah Data Hki</h3>
    <?php
    include "../koneksi.php";
    $id_hki_1 = $_GET['id_hki_1'];
    $mysqli = mysqli_query($mysqli, "SELECT * FROM hki_1 WHERE id_hki_1='$id_hki_1'");
    while ($data = mysqli_fetch_array($mysqli)) {
    ?>
      <form action="../update/update_hki.php" method="post">
        <table class="table table-striped table-bordered">
          <tr>
            <td>ID Hki</td>
            <td>
              <input type="text" name="id_hki_1" class="form-control" value="<?php echo $data['id_hki_1']; ?>" readonly>
            </td>
          </tr>
          <tr>
            <td>ID Penelitian</td>
            <td>
              <input type="number" name="id_penelitian_1" class="form-control" value="<?php echo $data['id_penelitian_1']; ?>" readonly>
            </td>
          </tr>
          <tr>
            <td>Jenis Hki</td>
            <td>
              <input type="text" name="jenis_hki_1" class="form-control" value="<?php echo $data['jenis_hki_1']; ?>">
            </td>
          </tr>
          <tr>
            <td>Nomor Registrasi</td>
            <td>
              <input type="text" name="nomor_registrasi_1" class="form-control" value="<?php echo $data['nomor_registrasi_1']; ?>">
            </td>
          </tr>
          <tr>
            <td>Status</td>
            <td>
              <input type="text" name="status_1" class="form-control" value="<?php echo $data['status_1']; ?>">
            </td>
          </tr>
        </table>
        <div class="form-group">
          <input type="button" value="Kembali" class="btn btn-secondary" onclick="window.location.href='../database/hki.php'">
          <input type="submit" name="update" value="Update" class="btn btn-primary">
        </div>
      </form>
    <?php } ?>
  </div>
</body>
</html>
