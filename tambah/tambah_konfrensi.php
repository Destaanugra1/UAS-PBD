<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data konferensi</title>
</head>
<body>
  <h3>Tambah Data konferensi</h3>
  <form method="post" action="../aksi/konfrensi_aksi.php">
    <table>
      <tr>
        <td>ID Konferensi</td>
        <td><input type="number" name="id_konferensi_1" maxlength="10"></td>
      </tr>
      <tr>
        <td>ID Penelitian</td>
        <td><input type="number" name="id_penelitian_1"></td>
      </tr>
      <tr>
        <td>Nama Konferensi</td>
        <td><input type="text" name="nama_konferensi_1"></td>
      </tr>

      <tr>
        <td>Lokasi</td>
        <td><input type="text" name="lokasi_1"></td>
      </tr>
      <tr>
        <td>Tanggal</td>
        <td><input type="date" name="tanggal_1"></td>
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