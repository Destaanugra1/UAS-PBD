<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Pendanaan Eksternal</title>
</head>
<body>
  <h3>Tambah Data Pendanaan Eksternal</h3>
  <form method="post" action="../aksi/pendanaan_aksi.php">
    <table>
      <tr>
        <td>ID Pendanaan</td>
        <td><input type="number" name="id_pendanaan_1" maxlength="15"></td>
      </tr>
      <tr>
        <td>ID Penelitian</td>
        <td><input type="number" name="id_penelitian_1" maxlength="10"></td>
      </tr>
      <tr>
        <td>Nama Pemberi Dana</td>
        <td><input type="text" name="nama_pemberi_dana_1"></td>
      </tr>
      <tr>
        <td>Jumlah Dana</td>
        <td><input type="number" name="jumlah_dana_1"></td>
      </tr>
      <tr>
        <td>Tahun</td>
        <td><input type="number" name="tahun_1"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value="Simpan"></td>
    </table>
  </form>
  <br>
  <br>
  <a href="../database/pendanaan_eksternal.php">Kembali</a>
</body>
</html>