<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Luaran Penelitian</title>
</head>
<body>
  <h3>Tambah Data Luaran Penelitian</h3>
  <form method="post" action="../aksi/luaran_aksi.php">
    <table>
      <tr>
        <td>ID Luaran</td>
        <td><input type="number" name="id_luaran_1" maxlength="10"></td>
      </tr>
      <tr>
        <td>ID Penelitian</td>
        <td><input type="number" name="id_penelitian_1"></td>
      </tr>
      <tr>
        <td>Jenis Luaran</td>
        <td><input type="text" name="jenis_luaran_1"></td>
      </tr>

      <tr>
        <td>Judul</td>
        <td><input type="text" name="judul_1"></td>
      </tr>
      <tr>
        <td>Penerbit</td>
        <td><input type="text" name="penerbit_1"></td>
      </tr>
      <tr>
        <td>Tahun Terbit</td>
        <td><input type="number" name="tahun_terbit_1"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value="Simpan"></td>
    </table>
  </form>
  <br>
  <br>
  <a href="../database/luaran_penelitian.php">Kembali</a>
</body>
</html>