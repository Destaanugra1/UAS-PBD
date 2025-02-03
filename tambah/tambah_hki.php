<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Hki</title>
</head>
<body>
  <h3>Tambah Data Hki</h3>
  <form method="post" action="../aksi/hki_aksi.php">
    <table>
      <tr>
        <td>ID Hki</td>
        <td><input type="number" name="id_hki_1" maxlength="10"></td>
      </tr>
      <tr>
        <td>ID Penelitian</td>
        <td><input type="number" name="id_penelitian_1" maxlength="10"></td>
      </tr>
      <tr>
        <td>Jenis Hki</td>
        <td><input type="text" name="jenis_hki_1"></td>
      </tr>
      <tr>
        <td>Nomor Registrasi</td>
        <td><input type="number" name="nomor_registrasi_1"></td>
      </tr>
      <tr>
        <td>Status</td>
        <td><input type="text" name="status_1"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value="Simpan"></td>
    </table>
  </form>
  <br>
  <br>
  <a href="../database/hki.php">Kembali</a>
</body>
</html>