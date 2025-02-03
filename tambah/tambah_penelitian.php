<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Penelitian</title>
</head>
<body>
  <h3>Tambah Data Penelitian</h3>
  <form method="post" action="../aksi/Penelitian_aksi.php">
    <table>
      <tr>
        <td>ID Penelitian</td>
        <td><input type="number" name="id_penelitian_1" maxlength="10"></td>
      </tr>
      <tr>
        <td>Judul</td>
        <td><input type="text" name="judul_1"></td>
      </tr>
      <tr>
        <td>Tahun Penelitian</td>
        <td><input type="number" name="tahun_penelitian_1" 
        value="<?php echo $data['tahun_penelitian_1']; ?>"
        min="1900" max="<?php echo date('Y'); ?>" required></td>
      </tr>
      <tr>
        <td>ID Dosen</td>
        <td><input type="text" name="id_dosen_1"></td>
      </tr>

      <tr>
        <td>Sumber Dana</td>
        <td><input type="text" name="sumber_dana_1"></td>
      </tr>
      <tr>
        <td>Jumlah Dana</td>
        <td><input type="number" name="jumlah_dana_1"></td>
      </tr>
      <tr>
        <td>Status Penelitian</td>
        <td><input type="text" name="status_penelitian_1"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value="Simpan"></td>
    </table>
  </form>
  <br>
  <br>
  <a href="../database/penelitian.php">Kembali</a>
</body>
</html>