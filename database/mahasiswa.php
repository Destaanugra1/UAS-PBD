<?php
include_once("../koneksi.php");
$search = isset($_GET['search']) ? $_GET['search'] : '';
$where = "";
if (!empty($search)) {
    $where = "WHERE nama_mahasiswa_1 LIKE '%$search%' 
              OR npm_1 LIKE '%$search%' 
              OR fakultas_1 LIKE '%$search%' 
              OR program_studi_1 LIKE '%$search%'";
}
$result = mysqli_query($mysqli, "SELECT * FROM mahasiswa_1 $where ORDER BY npm_1 DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Halaman Data Mahasiswa Kelas 3B</title>
=======
    <title>Halaman Data Mahasiswa</title>
>>>>>>> cc245a6 (Update dashboard, tambah our, styles tabel tambah dan edit)
    <link rel="stylesheet" href="../page.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <style>
        body {
            margin-top: 15vh;
        }
    </style>
</head>
<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
<<<<<<< HEAD
        <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt="Profile"> </div>
=======
        <h3>Data Mahasiswa</h3>
>>>>>>> cc245a6 (Update dashboard, tambah our, styles tabel tambah dan edit)
    </header>

    <?php include_once("../template/sidebar.php"); ?>

    <div class="container mt-5">
<<<<<<< HEAD
        <h1>Data Mahasiswa</h1>
=======
>>>>>>> cc245a6 (Update dashboard, tambah our, styles tabel tambah dan edit)
        <form action="" method="GET" class="d-flex gap-2 align-items-center">
            <div class="form-group">
                <input type="text" name="search" class="form-control" placeholder="Cari mahasiswa..." value="<?php echo $search; ?>">
            </div>
            <button type="submit" class="btn btn-primary h-100">Cari</button>
        </form>

        <a href="../tambah/tambah_mahasiswa.php" class="btn btn-success my-3">Tambah Mahasiswa</a>

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>NPM</th>
                        <th>Nama Mahasiswa</th>
                        <th>Fakultas</th>
                        <th>Program Studi</th>
                        <th>Email</th>
                        <th>No Telepon</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    while ($data = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>" . $no++ . "</td>";
                        echo "<td>" . $data['npm_1'] . "</td>";
                        echo "<td>" . $data['nama_mahasiswa_1'] . "</td>";
                        echo "<td>" . $data['fakultas_1'] . "</td>";
                        echo "<td>" . $data['program_studi_1'] . "</td>";
                        echo "<td>" . $data['email_1'] . "</td>";
                        echo "<td>" . $data['no_telepon_1'] . "</td>";
                        echo "<td>
                            <a href='../ubah/ubah_mahasiswa.php?npm_1=" . $data['npm_1'] . "' class='btn btn-warning btn-sm'>Edit</a> 
                            <a href='#' onclick='confirmDelete(" . $data['npm_1'] . ")' class='btn btn-danger btn-sm'>Delete</a>
                        </td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <a href="../index.php" class="btn btn-secondary">Kembali</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function(event) { 
            const showNavbar = (toggleId, navId, bodyId, headerId) => {
                const toggle = document.getElementById(toggleId),
                    nav = document.getElementById(navId),
                    bodypd = document.getElementById(bodyId),
                    headerpd = document.getElementById(headerId)

                if(toggle && nav && bodypd && headerpd) {
                    toggle.addEventListener('click', () => {
                        nav.classList.toggle('show')
                        toggle.classList.toggle('bx-x')
                        bodypd.classList.toggle('body-pd')
                        headerpd.classList.toggle('body-pd')
                    })
                }
            }
            showNavbar('header-toggle','nav-bar','body-pd','header')
        });

        function confirmDelete(npm) {
            if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
                window.location.href = "../hapus/hapus_mahasiswa.php?npm_1=" + npm;
            }
        }
    </script>
</body>
</html>