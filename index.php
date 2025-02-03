<html>
  <head>
    <title>Project UAS Perancangan Basis Data</title>
    <link rel="stylesheet" href="page.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  </head>
  
  <body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
    </header>
    
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> 

                <a href="#" class="nav_logo"> 
                    <i class='bx bx-data nav_logo-icon'></i>
                    <span class="nav_logo-name">DB Penelitian</span> 
                </a>
                
                <div class="nav_list"> 
                    <a href="database/dosen.php" class="nav_link active">
                        <i class='bx bx-user-pin nav_icon'></i>
                        <span class="nav_name">DASBOARD</span>
                    </a>
                    <a href="database/dosen.php" class="nav_link active">
                        <i class='bx bx-user-pin nav_icon'></i>
                        <span class="nav_name">Data Dosen</span>
                    </a>
                    
                    <a href="database/mahasiswa.php" class="nav_link">
                        <i class='bx bx-group nav_icon'></i>
                        <span class="nav_name">Data Mahasiswa</span>
                    </a>
                    
                    <a href="database/penelitian.php" class="nav_link">
                        <i class='bx bx-archive nav_icon'></i>
                        <span class="nav_name">Data Penelitian</span>
                    </a>
                    
                    <a href="database/anggota_penelitian.php" class="nav_link">
                        <i class='bx bx-network-chart nav_icon'></i>
                        <span class="nav_name">Anggota Penelitian</span>
                    </a>
                    
                    <a href="database/luaran_penelitian.php" class="nav_link">
                        <i class='bx bx-paper-plane nav_icon'></i>
                        <span class="nav_name">Luaran Penelitian</span>
                    </a>
                    
                    <a href="database/pendanaan_eksternal.php" class="nav_link">
                        <i class='bx bx-credit-card nav_icon'></i>
                        <span class="nav_name">Pendanaan Eksternal</span>
                    </a>
                    
                    <a href="database/konfrensi.php" class="nav_link">
                        <i class='bx bx-microphone nav_icon'></i>
                        <span class="nav_name">Konferensi</span>
                    </a>
                    
                    <a href="database/hki.php" class="nav_link">
                        <i class='bx bx-certification nav_icon'></i>
                        <span class="nav_name">HKI</span>
                    </a>
                </div>
            </div> 
            
            <a href="#" class="nav_link">
                <i class='bx bx-log-out nav_icon'></i>
                <span class="nav_name">Sign Out</span>
            </a>
        </nav>
    </div>
    
    <!-- Container Main start -->
    <div class="height-100 bg-light">
        <h4 class="p-4">Sistem Informasi Penelitian Dosen Kelas 3B</h4>
        <!-- Konten utama bisa ditambahkan disini -->
    </div>
    <!-- Container Main end -->

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
    </script>
  </body>
</html>