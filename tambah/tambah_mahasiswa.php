<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data</title>
</head>
<body>
  <h3>Tambah Data Dosen</h3>
  <form method="post" action="../aksi/mahasiswa_aksi.php">
    <table>
      <tr>
        <td>NPM</td>
        <td><input type="number" name="npm_1" maxlength="10"></td>
      </tr>
      <tr>
        <td>Nama Mahasiswa</td>
        <td><input type="text" name="nama_mahasiswa_1"></td>
      </tr>
      <tr>
        <td>Fakultas</td>
        <td><input type="text" name="fakultas_1"></td>
      </tr>
      <tr>
        <td>Program Studi</td>
        <td><input type="text" name="program_studi_1"></td>
      </tr>

      <tr>
        <td>Email</td>
        <td><input type="text" name="email_1"></td>
      </tr>
      <tr>
        <td>No Telepon</td>
        <td><input type="text" name="no_telepon_1" maxlength="12"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value="Simpan"></td>
    </table>
  </form>
  <br>
  <br>
  <a href="../database/mahasiswa.php">Kembali</a>
</body>
</html>