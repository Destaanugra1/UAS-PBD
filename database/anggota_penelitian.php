<?php
include_once("../koneksi.php");

$search = isset($_GET['search']) ? $_GET['search'] : '';
$where = "";
if (!empty($search)) {
    $where = "WHERE id_anggota_1 LIKE '%$search%' 
              OR id_penelitian_1 LIKE '%$search%' 
              OR id_dosen_1 LIKE '%$search%' 
              OR npm_1 LIKE '%$search%' 
              OR peran_dalam_penelitian_1 LIKE '%$search%'";
}
$result = mysqli_query($mysqli, "SELECT * FROM anggota_penelitian_1 $where ORDER BY id_anggota_1 DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Data Anggota Penelitian</title>
    <link rel="stylesheet" href="../page.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <style>
      body {
        margin-top: 15vh;
      }
    </style>
</head>
<body class="body" id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt="Profile"> </div>
    </header>
    
    <?php include_once("../template/sidebar.php"); ?>
    
    <div class="container mt-5">
        <form action="" method="GET" class="d-flex gap-2 align-items-center">
            <div class="form-group">
                <input type="text" 
                    name="search" 
                    class="form-control"  
                    placeholder="Cari anggota..."
                    value="<?php echo $search; ?>">
            </div>
            <button type="submit" class="btn btn-primary h-100">Cari</button>
        </form>
    
        <a href="../tambah/tambah_anggota.php" class="btn btn-success my-3">Tambah Anggota Penelitian</a>
    
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>ID Anggota</th>
                    <th>ID Penelitian</th>
                    <th>ID Dosen</th>
                    <th>NPM</th>
                    <th>Peran dalam Penelitian</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($data = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>".$no++."</td>";
                    echo "<td>".$data['id_anggota_1']."</td>";
                    echo "<td>".$data['id_penelitian_1']."</td>";
                    echo "<td>".$data['id_dosen_1']."</td>";
                    echo "<td>".$data['npm_1']."</td>";
                    echo "<td>".$data['peran_dalam_penelitian_1']."</td>";
                    echo "<td>
                        <a href='../ubah/ubah_anggota_penelitian.php?id_anggota_1=".$data['id_anggota_1']."' class='btn btn-warning btn-sm'>Edit</a> 
                        <a href='#' onclick='confirmDelete(".$data['id_anggota_1'].")' class='btn btn-danger btn-sm'>Delete</a>
                    </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        
        <a href="../index.php" class="btn btn-secondary">Kembali</a>
    </div>
    
    <script>
        document.addEventListener("DOMContentLoaded", function() { 
            const toggleNavbar = (toggleId, navId, bodyId, headerId) => {
                const toggle = document.getElementById(toggleId),
                    nav = document.getElementById(navId),
                    bodypd = document.getElementById(bodyId),
                    headerpd = document.getElementById(headerId);

                if(toggle && nav && bodypd && headerpd) {
                    toggle.addEventListener('click', () => {
                        nav.classList.toggle('show');
                        toggle.classList.toggle('bx-x');
                        bodypd.classList.toggle('body-pd');
                        headerpd.classList.toggle('body-pd');
                    });
                }
            };
            toggleNavbar('header-toggle', 'nav-bar', 'body-pd', 'header');
        });

        function confirmDelete(id) {
            if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
                window.location.href = "../hapus/hapus_anggota.php?id_anggota_1=" + id;
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
