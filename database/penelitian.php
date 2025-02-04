<?php
include_once("../koneksi.php");

$search = isset($_GET['search']) ? $_GET['search'] : '';
$where = "";
if (!empty($search)) {
    $where = "WHERE nama_dosen_1 LIKE '%$search%' 
              OR nidn_1 LIKE '%$search%' 
              OR fakultas_1 LIKE '%$search%' 
              OR program_studi_1 LIKE '%$search%'";
}
$result = mysqli_query($mysqli, "SELECT * FROM penelitian_1 $where ORDER BY id_penelitian_1 DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Penelitian</title>
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
        <h3>Data Penelitian</h3>
    </header>
    
    <?php include_once("../template/sidebar.php"); ?>

    <div class="container mt-5">
        <form action="" method="GET" class="d-flex gap-2 align-items-center">
            <div class="form-group">
                <input type="text" 
                    name="search" 
                    class="form-control"  
                    placeholder="Cari penelitian..."
                    value="<?php echo $search; ?>">
            </div>
            <button type="submit" class="btn btn-primary h-100">Cari</button>
        </form>
    
        <a href="../tambah/tambah_penelitian.php" class="btn btn-success my-3">Tambah Penelitian</a>
    
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>ID Penelitian</th>
                    <th>Judul</th>
                    <th>Tahun Penelitian</th>
                    <th>ID Dosen</th>
                    <th>Sumber Dana</th>
                    <th>Jumlah Dana</th>
                    <th>Status Penelitian</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($data = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>".$no++."</td>";
                    echo "<td>".$data['id_penelitian_1']."</td>";
                    echo "<td>".$data['judul_1']."</td>";
                    echo "<td>".$data['tahun_penelitian_1']."</td>";
                    echo "<td>".$data['id_dosen_1']."</td>";
                    echo "<td>".$data['sumber_dana_1']."</td>";
                    echo "<td>".$data['jumlah_dana_1']."</td>";
                    echo "<td>".$data['status_penelitian_1']."</td>";
                    echo "<td>
                        <a href='../ubah/ubah_penelitian.php?id_penelitian_1=".$data['id_penelitian_1']."' class='btn btn-warning btn-sm'>Edit</a> 
                        <a href='#' onclick='confirmDelete(".$data['id_penelitian_1'].")' class='btn btn-danger btn-sm'>Delete</a>
                    </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        
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

        function confirmDelete(id) {
            if (confirm("Are you sure you want to delete this record?")) {
                window.location.href = "../hapus/hapus_penelitian.php?id_penelitian_1="+id;
            }
        }
    </script>
</body>
</html>
