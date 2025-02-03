<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Pendanaan Eksternal</title>
  <!-- <link rel="stylesheet" href="../style.css">
  <script src="../script.js" defer></script> -->
</head>
<body>
  <br>
  <h3>Ubah Data Pendanaan Eksternal</h3>
  <?php
  include "../koneksi.php";
  $id_pendanaan_1 = $_GET['id_pendanaan_1'];
  $mysqli = mysqli_query($mysqli, "SELECT * FROM pendanaan_eksternal_1 WHERE id_pendanaan_1='$id_pendanaan_1'");
  $nomor = 1;
  while ($data = mysqli_fetch_array($mysqli)) {
  ?>
      <form action="../update/update_pendanaan.php" method="post">
        <table>
          <tr>
            <td>ID Pendanaan</td>
              <td>
                <input type="text" name="id_pendanaan_1" value="<?php echo $data['id_pendanaan_1']; ?>" readonly>
              </td>
          </tr>
          <tr>
            <td>ID Penelitian</td>
              <td>
                <input type="number" name="id_penelitian_1" value="<?php echo $data['id_penelitian_1']; ?>">
              </td>
          </tr>
          <tr>
            <td>Nama Pemberi Nama</td>
              <td>
                <input type="text" name="nama_pemberi_dana_1" value="<?php echo $data['nama_pemberi_dana_1']; ?>">
              </td>
          </tr>
          <tr>
            <td>Jumlah Dana</td>
              <td>
                <input type="text" name="jumlah_dana_1" value="<?php echo $data['jumlah_dana_1']; ?>">
              </td>
          </tr>
          <tr>
            <td>Tahun</td>
              <td>
                <input type="text" name="tahun_1" value="<?php echo $data['tahun_1']; ?>">
              </td>
          </tr>
        </table>
        <tr>
          <td>
            <input type="button" value="Kembali" onclick="window.location.href='../database/pendanaan_eksternal.php'">
          </td>
            <td>
              <input type="submit" name="update" value="Update">
            </td>
          </tr>
      </form>
  <?php } ?>
</body>
</html>