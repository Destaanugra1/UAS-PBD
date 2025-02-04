<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Penelitian</title>
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
    <h3>Tambah Data Penelitian</h3>
    <form method="post" action="../aksi/Penelitian_aksi.php">
      <table class="table table-striped table-bordered">
        <tr>
          <td>ID Penelitian</td>
          <td><input type="number" name="id_penelitian_1" class="form-control" maxlength="10"></td>
        </tr>
        <tr>
          <td>Judul</td>
          <td><input type="text" name="judul_1" class="form-control"></td>
        </tr>
        <tr>
          <td>Tahun Penelitian</td>
          <td><input type="number" name="tahun_penelitian_1" class="form-control" 
          value="<?php echo $data['tahun_penelitian_1']; ?>" min="1900" max="<?php echo date('Y'); ?>" required></td>
        </tr>
        <tr>
          <td>ID Dosen</td>
          <td><input type="text" name="id_dosen_1" class="form-control"></td>
        </tr>
        <tr>
          <td>Sumber Dana</td>
          <td><input type="text" name="sumber_dana_1" class="form-control"></td>
        </tr>
        <tr>
          <td>Jumlah Dana</td>
          <td><input type="number" name="jumlah_dana_1" class="form-control"></td>
        </tr>
        <tr>
          <td>Status Penelitian</td>
          <td><input type="text" name="status_penelitian_1" class="form-control"></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" value="Simpan" class="btn btn-primary"></td>
        </tr>
      </table>
    </form>
    <br>
    <a href="../database/penelitian.php" class="btn btn-secondary">Kembali</a>
  </div>
</body>
</html>
