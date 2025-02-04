<?php
include_once("../koneksi.php");
$result = mysqli_query($mysqli, "SELECT * FROM luaran_penelitian_1 ORDER BY id_luaran_1 DESC");
?>

<html>
  <head>
    <title>Halaman Data Luaran Penelitian Dosen Kelas 3B</title>
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
  <body id="body-pd">
    <a href="../tambah/tambah_luaran.php">Tambah Luaran Penelitian</a><br/><br/>
    <table width='85%' border=1>
      <tr>
        <th>No</th>
        <th>ID Luaran</th>
        <th>ID Penelitian</th>
        <th>Jenis Luaran</th>
        <th>Judul</th>
        <th>Penerbit</th>
        <th>Tahun Terbit</th>
        <th>Update</th>
      </tr>
      <?php
      $no = 1;
      while ($data = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$no++."</td>";
        echo "<td>".$data['id_luaran_1']."</td>";
        echo "<td>".$data['id_penelitian_1']."</td>";
        echo "<td>".$data['jenis_luaran_1']."</td>";
        echo "<td>".$data['judul_1']."</td>";
        echo "<td>".$data['penerbit_1']."</td>";
        echo "<td>".$data['tahun_terbit_1']."</td>";
        echo "<td><a href='../ubah/ubah_luaran.php?id_luaran_1=".$data['id_luaran_1']."'>Edit</a> | <a href='../hapus/hapus_luaran.php?id_luaran_1=".$data['id_luaran_1']."'>Delete</a></td>";
        echo "</tr>";
      }
      ?>
    </table>
    <a href="../index.php">Kembali</a>
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
                window.location.href = "../hapus/hapus_luaran.php?id_luaran_1="+id;
            }
        }
    </script>
  </body>
</html>
