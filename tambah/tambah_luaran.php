<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Luaran Penelitian</title>
  <link rel="stylesheet" href="../page.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <style>
    body {
      margin-top: 15vh;
    }
    table {
      width: 100%;
      margin-top: 20px;
    }
    table td {
      padding: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h3>Tambah Data Luaran Penelitian</h3>
    <form method="post" action="../aksi/luaran_aksi.php">
      <table class="table table-striped table-bordered">
        <tr>
          <td>ID Luaran</td>
          <td><input type="number" name="id_luaran_1" class="form-control" maxlength="10"></td>
        </tr>
        <tr>
          <td>ID Penelitian</td>
          <td><input type="number" name="id_penelitian_1" class="form-control"></td>
        </tr>
        <tr>
          <td>Jenis Luaran</td>
          <td><input type="text" name="jenis_luaran_1" class="form-control"></td>
        </tr>
        <tr>
          <td>Judul</td>
          <td><input type="text" name="judul_1" class="form-control"></td>
        </tr>
        <tr>
          <td>Penerbit</td>
          <td><input type="text" name="penerbit_1" class="form-control"></td>
        </tr>
        <tr>
          <td>Tahun Terbit</td>
          <td><input type="number" name="tahun_terbit_1" class="form-control"></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" value="Simpan" class="btn btn-primary"></td>
        </tr>
      </table>
    </form>
    <br>
    <a href="../database/luaran_penelitian.php" class="btn btn-secondary">Kembali</a>
  </div>
</body>
</html>
