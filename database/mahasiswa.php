<?php
include_once("../koneksi.php");
$result = mysqli_query($mysqli, "SELECT * FROM mahasiswa_1 ORDER BY npm_1 DESC");
$search = isset($_GET['search']) ? $_GET['search'] : '';
$where = "";
if (!empty($search)) {
    $where = "WHERE nama_dosen_1 LIKE '%$search%' 
              OR nidn_1 LIKE '%$search%' 
              OR fakultas_1 LIKE '%$search%' 
              OR program_studi_1 LIKE '%$search%'";
}
?>



<!DOCTYPE html>
<html>
<head>
    <title>Halaman Data Mahasiswa Kelas 3B</title>
    <link rel="stylesheet" href="../page.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="table.css">
</head>
<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
    </header>

    <?php include_once("../template/sidebar.php"); ?>

    <div class="height-100 bg-light">
        <div class="container">
            <h1>Data Mahasiswa</h1>
            <form action="" class="form-inline" method="GET" class="d-flex">
                    <div class="form-group col-md-6">
                        <input type="text" name="search" class="form-control mt-2"  placeholder="Cari dosen..." value="<?php echo $search; ?>">
                        <button type="submit" class="btn btn-primary ">Cari dosen</button>
                    </div>
                    <?php if(!empty($search)): ?>
                                <a href="dosen.php" class="btn btn-secondary ms-2">Reset</a>
                            <?php endif; ?>
                </form>
            <a href="../tambah/tambah_mahasiswa.php" class="btn">Tambah Mahasiswa</a><br/><br/>
            <table>
                <tr>
                    <th>No</th>
                    <th>NPM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Fakultas</th>
                    <th>Program Studi</th>
                    <th>Email</th>
                    <th>No Telepon</th>
                    <th>Update</th>
                </tr>
                <?php
                $no = 1;
                while ($data = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>".$no++."</td>";
                    echo "<td>".$data['npm_1']."</td>";
                    echo "<td>".$data['nama_mahasiswa_1']."</td>";
                    echo "<td>".$data['fakultas_1']."</td>";
                    echo "<td>".$data['program_studi_1']."</td>";
                    echo "<td>".$data['email_1']."</td>";
                    echo "<td>".$data['no_telepon_1']."</td>";
                    echo "<td><a href='../ubah/ubah_mahasiswa.php?npm_1=".$data['npm_1']."'>Edit</a> | <a href='javascript:void(0);' onclick='confirmDelete(\"".$data['npm_1']."\")'>Delete</a></td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
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
            if (confirm("Are you sure you want to delete this record?")) {
                window.location.href = "../hapus/hapus_mahasiswa.php?npm_1="+npm;
            }
        }
    </script>
</body>
</html>
