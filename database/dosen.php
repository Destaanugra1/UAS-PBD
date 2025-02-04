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

$result = mysqli_query($mysqli, "SELECT * FROM dosen_1 $where ORDER BY id_dosen_1 DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Data Dosen Kelas 3B</title>
    <link rel="stylesheet" href="../page.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <style>
      body {
        margin-top: 15vh;
      }
    </style>
</head>
<body id="body-pd" class="penelitian">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
    </header>

    <?php include_once("../template/sidebar.php"); ?>

    <div class="container ">
        <form action="" method="GET" class="d-flex gap-2 align-items-center p-2">
            <div class="form-group">
                <input type="text" 
                    name="search" 
                    class="form-control"  
                    placeholder="Cari dosen..."
                    value="<?php echo $search; ?>">
            </div>
            <button type="submit" class="btn btn-primary h-100">Cari</button>
        </form>
        
        <a href="../tambah/tambah_dosen.php" class="btn btn-primary mb-3">Tambah Dosen</a>
        
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>ID Dosen</th>
                        <th>Nama Dosen</th>
                        <th>NIDN</th>
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
                        echo "<td>".$no++."</td>";
                        echo "<td>".$data['id_dosen_1']."</td>";
                        echo "<td>".$data['nama_dosen_1']."</td>";
                        echo "<td>".$data['nidn_1']."</td>";
                        echo "<td>".$data['fakultas_1']."</td>";
                        echo "<td>".$data['program_studi_1']."</td>";
                        echo "<td>".$data['email_1']."</td>";
                        echo "<td>".$data['no_telepon_1']."</td>";
                        echo "<td>
                            <a href='../ubah/ubah_dosen.php?id_dosen_1=".$data['id_dosen_1']."' class='btn btn-sm btn-warning'>Edit</a>
                            <button onclick='confirmDelete(".$data['id_dosen_1'].")' class='btn btn-sm btn-danger'>Hapus</button>
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

        function confirmDelete(id) {
            if (confirm("Apakah yakin ingin menghapus data?")) {
                window.location.href = "../hapus/hapus_dosen.php?id_dosen_1="+id;
            }
        }
    </script>
</body>
</html>