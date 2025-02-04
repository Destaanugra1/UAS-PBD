<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data</title>
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
    <h3>Tambah Data Dosen</h3>
    <form method="post" action="../aksi/dosen_aksi.php">
      <table class="table table-striped table-bordered">
        <tr>
          <td>ID Dosen</td>
          <td><input type="text" name="id_dosen_1" class="form-control"></td>
        </tr>
        <tr>
          <td>Nama Dosen</td>
          <td><input type="text" name="nama_dosen_1" class="form-control"></td>
        </tr>
        <tr>
          <td>NIDN</td>
          <td><input type="text" name="nidn_1" class="form-control"></td>
        </tr>
        <tr>
          <td>Fakultas</td>
          <td><input type="text" name="fakultas_1" class="form-control"></td>
        </tr>
        <tr>
          <td>Program Studi</td>
          <td><input type="text" name="program_studi_1" class="form-control"></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><input type="text" name="email_1" class="form-control"></td>
        </tr>
        <tr>
          <td>No Telepon</td>
          <td><input type="text" name="no_telepon_1" class="form-control"></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" value="Simpan" class="btn btn-primary"></td>
        </tr>
      </table>
    </form>
    <br>
    <a href="../database/dosen.php" class="btn btn-secondary">Kembali</a>
  </div>
</body>
</html>
