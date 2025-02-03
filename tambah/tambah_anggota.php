<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Anggota Penelitian</title>
</head>
<body>
  <h3>Tambah Data Anggota Penelitian</h3>
  <form method="post" action="../aksi/anggota_aksi.php">
    <table>
      <tr>
        <td>ID Anggota</td>
        <td><input type="number" name="id_anggota_1" maxlength="10"></td>
      </tr>
      <tr>
        <td>ID Penelitian</td>
        <td><input type="number" name="id_penelitian_1" maxlength="10"></td>
      </tr>
      <tr>
        <td>ID Dosen</td>
        <td><input type="number" name="id_dosen_1"></td>
      </tr>
      <tr>
        <td>NPM</td>
        <td><input type="number" name="npm_1"></td>
      </tr>
      <tr>
        <td>Peran Dalam Penelitian</td>
        <td><input type="text" name="peran_dalam_penelitian_1"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value="Simpan"></td>
    </table>
  </form>
  <br>
  <br>
  <a href="../database/anggota_penelitian.php">Kembali</a>
</body>
</html>