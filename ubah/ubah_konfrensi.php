<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Konfrensi</title>
  <!-- <link rel="stylesheet" href="../style.css">
  <script src="../script.js" defer></script> -->
</head>
<body>
  <br>
  <h3>Ubah Data konfrensi</h3>
  <?php
  include "../koneksi.php";
  $id_konferensi_1 = $_GET['id_konferensi_1'];
  $mysqli = mysqli_query($mysqli, "SELECT * FROM konferensi_1 WHERE id_konferensi_1='$id_konferensi_1'");
  $nomor = 1;
  while ($data = mysqli_fetch_array($mysqli)) {
  ?>
      <form action="../update/update_konfrensi.php" method="post">
        <table>
          <tr>
            <td>ID konferensi</td>
              <td>
                <input type="text" name="id_konferensi_1" value="<?php echo $data['id_konferensi_1']; ?>" readonly>
              </td>
          </tr>
          <tr>
            <td>ID Penelitian</td>
              <td>
                <input type="number" name="id_penelitian_1" value="<?php echo $data['id_penelitian_1']; ?>">
              </td>
          </tr>
          <tr>
            <td>Nama Koferensi</td>
              <td>
                <input type="text" name="nama_konferensi_1" value="<?php echo $data['nama_konferensi_1']; ?>">
              </td>
          </tr>
          <tr>
            <td>Lokasi</td>
              <td>
                <input type="text" name="lokasi_1" value="<?php echo $data['lokasi_1']; ?>">
              </td>
          </tr>
          <tr>
            <td>Tanggal</td>
              <td>
                <input type="date" name="tanggal_1" value="<?php echo $data['tanggal_1']; ?>">
              </td>
          </tr>
        </table>
        <tr>
          <td>
            <input type="button" value="Kembali" onclick="window.location.href='../database/konfrensi.php'">
          </td>
            <td>
              <input type="submit" name="update" value="Update">
            </td>
          </tr>
      </form>
  <?php } ?>
</body>
</html>