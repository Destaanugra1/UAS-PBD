<?php
include_once("../koneksi.php");
$result = mysqli_query($mysqli, "SELECT * FROM pendanaan_eksternal_1 ORDER BY id_pendanaan_1 DESC");
?>

<html>
  <head>
    <title>Halaman Data Pendanaan Eksternal Kelas 3B</title>
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
    <a href="../tambah/tambah_pendanaan.php">Tambah Dana</a><br/><br/>
    <table width='80%' border=1>
      <tr>
        <th>No</th>
        <th>ID Pendanaan</th>
        <th>ID Penelitian</th>
        <th>Nama Pemberi Dana</th>
        <th>Jumlah Dana</th>
        <th>Tahun</th>
        <th>Update</th>
      </tr>
      <?php
      $no = 1;
      while ($data = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$no++."</td>";
        echo "<td>".$data['id_pendanaan_1']."</td>";
        echo "<td>".$data['id_penelitian_1']."</td>";
        echo "<td>".$data['nama_pemberi_dana_1']."</td>";
        echo "<td>".$data['jumlah_dana_1']."</td>";
        echo "<td>".$data['tahun_1']."</td>";
        echo "<td><a href='../ubah/ubah_pendanaan.php?id_pendanaan_1=".$data['id_pendanaan_1']."'>Edit</a> | <a href='../hapus/hapus_pendanaan.php?id_pendanaan_1=".$data['id_pendanaan_1']."'>Delete</a></td>";
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
                window.location.href = "../hapus/hapus_penelitian.php?id_penelitian_1="+id;
            }
        }
    </script>
  </body>
</html>
