<?php
include_once("../koneksi.php");
$result = mysqli_query($mysqli, "SELECT * FROM penelitian_1 ORDER BY id_penelitian_1 DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Penelitian</title>
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
            <h1>Data Penelitian</h1>
            <a href="../tambah/tambah_penelitian.php" class="btn">Tambah Penelitian</a><br/><br/>
            <table>
                <tr>
                    <th>No</th>
                    <th>ID Penelitian</th>
                    <th>Judul</th>
                    <th>Tahun Penelitian</th>
                    <th>ID Dosen</th>
                    <th>Sumber Dana</th>
                    <th>Jumlah Dana</th>
                    <th>Status Penelitian</th>
                    <th>Update</th>
                </tr>
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
                    echo "<td><a href='../ubah/ubah_penelitian.php?id_penelitian_1=".$data['id_penelitian_1']."'>Edit</a> | <a href='javascript:void(0);' onclick='confirmDelete(".$data['id_penelitian_1'].")'>Delete</a></td>";
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
