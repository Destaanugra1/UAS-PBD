<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Dosen</title>
  <link rel="stylesheet" href="../style.css">
  <script src="../script.js" defer></script>
</head>
<body>
  <br>
  <h3>Ubah Data Dosen</h3>
  <?php
  include "../koneksi.php";
  $id_dosen_1 = $_GET['id_dosen_1'];
  $mysqli = mysqli_query($mysqli, "SELECT * FROM dosen_1 WHERE id_dosen_1='$id_dosen_1'");
  $nomor = 1;
  while ($data = mysqli_fetch_array($mysqli)) {
  ?>
      <form action="../update/update_dosen.php" method="post">
        <table>
          <tr>
            <td>Nama Dosen</td>
              <td>
                <input type="hidden" name="id_dosen_1" value="<?php echo $data['id_dosen_1']; ?>">
                <input type="text" name="nama_dosen_1" value="<?php echo $data['nama_dosen_1']; ?>">
              </td>
          </tr>
          <tr>
            <td>NIDN</td>
              <td>
                <input type="text" name="nidn_1" value="<?php echo $data['nidn_1']; ?>">
              </td>
          </tr>
          <tr>
            <td>Fakultas</td>
              <td>
                <input type="text" name="fakultas_1" value="<?php echo $data['fakultas_1']; ?>">
              </td>
          </tr>
          <tr>
            <td>Program Studi</td>
              <td>
                <input type="text" name="program_studi_1" value="<?php echo $data['program_studi_1']; ?>">
              </td>
          </tr>
          <tr>
            <td>Email</td>
              <td>
                <input type="text" name="email_1" value="<?php echo $data['email_1']; ?>">
              </td>
          </tr>
          <tr>
            <td>No Telepon</td>
              <td>
                <input type="text" name="no_telepon_1" value="<?php echo $data['no_telepon_1']; ?>">
              </td>
          </tr>
        </table>
        <tr>
          <td>
            <input type="button" value="Kembali" onclick="window.location.href='../database/dosen.php'">
          </td>
            <td>
              <input type="submit" name="update" value="Update">
            </td>
          </tr>
      </form>
  <?php } ?>
</body>
</html>