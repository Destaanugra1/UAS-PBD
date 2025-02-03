<?php
include_once("../koneksi.php");
$result = mysqli_query($mysqli, "SELECT * FROM dosen_1 ORDER BY id_dosen_1 DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Data Dosen Kelas 3B</title>
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
            <h1>Data Dosen</h1>
            <a href="../tambah/tambah_dosen.php" class="btn">Tambah Dosen</a><br/><br/>
            <table>
                <tr>
                  <th>No</th>
                  <th>ID Dosen</th>
                  <th>Nama Dosen</th>
                  <th>NIDN</th>
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
                  echo "<td>".$data['id_dosen_1']."</td>";
                  echo "<td>".$data['nama_dosen_1']."</td>";
                  echo "<td>".$data['nidn_1']."</td>";
                  echo "<td>".$data['fakultas_1']."</td>";
                  echo "<td>".$data['program_studi_1']."</td>";
                  echo "<td>".$data['email_1']."</td>";
                  echo "<td>".$data['no_telepon_1']."</td>";
                  echo "<td><a href='../ubah/ubah_dosen.php?id_dosen_1=".$data['id_dosen_1']."'>Edit</a> | <a href='javascript:void(0);' onclick='confirmDelete(".$data['id_dosen_1'].")'>Delete</a></td>";
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

        function confirmDelete(id) {
            if (confirm("Are you sure you want to delete this record?")) {
                window.location.href = "../hapus/hapus_penelitian.php?id_penelitian_1="+id;
            }
        }
    </script>
</body>
</html>
