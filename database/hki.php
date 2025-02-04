<?php
include_once("../koneksi.php");

$search = isset($_GET['search']) ? $_GET['search'] : '';
$where = "";
if (!empty($search)) {
    $where = "WHERE jenis_hki_1 LIKE '%$search%' 
              OR nomor_registrasi_1 LIKE '%$search%' 
              OR status_1 LIKE '%$search%'";
}
$result = mysqli_query($mysqli, "SELECT * FROM hki_1 $where ORDER BY id_hki_1 DESC");
?>

<!DOCTYPE html>
<html>
<head>
<<<<<<< HEAD
    <title>Halaman Data Hki Kelas 3B</title>
=======
    <title>Halaman Data Hki</title>
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
        <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
=======
        <h3>Data HKI</h3>
>>>>>>> cc245a6 (Update dashboard, tambah our, styles tabel tambah dan edit)
    </header>
    
    <?php include_once("../template/sidebar.php"); ?>

    <div class="container mt-5">
        <form action="" method="GET" class="d-flex gap-2 align-items-center">
            <div class="form-group">
                <input type="text" 
                    name="search" 
                    class="form-control"  
                    placeholder="Cari HKI..."
                    value="<?php echo $search; ?>">
            </div>
            <button type="submit" class="btn btn-primary h-100">Cari</button>
        </form>
    
        <a href="../tambah/tambah_hki.php" class="btn btn-success my-3">Tambah HKI</a>
    
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>ID HKI</th>
                    <th>ID Penelitian</th>
                    <th>Jenis HKI</th>
                    <th>Nomor Registrasi</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($data = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>".$no++."</td>";
                    echo "<td>".$data['id_hki_1']."</td>";
                    echo "<td>".$data['id_penelitian_1']."</td>";
                    echo "<td>".$data['jenis_hki_1']."</td>";
                    echo "<td>".$data['nomor_registrasi_1']."</td>";
                    echo "<td>".$data['status_1']."</td>";
                    echo "<td>
                        <a href='../ubah/ubah_hki.php?id_hki_1=".$data['id_hki_1']."' class='btn btn-warning btn-sm'>Edit</a> 
                        <a href='#' onclick='confirmDelete(".$data['id_hki_1'].")' class='btn btn-danger btn-sm'>Delete</a>
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
                window.location.href = "../hapus/hapus_hki.php?id_hki_1="+id;
            }
        }
    </script>
</body>
</html>
