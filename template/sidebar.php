<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="page.css">
</head>
<body>
<div class="l-navbar" id="nav-bar">
    <nav class="nav">
        <div class="pointer"> 
            <a href="#" class="nav_logo"> 
                <i class='bx bx-data nav_logo-icon'></i>
                <span class="nav_logo-name">DB Penelitian</span> 
            </a>
            <div class="nav_list"> 
                <a href="/db_penelitian_dosen_3b" class="nav_link">
                    <i class='bx bx-user-pin nav_icon'></i>
                    <span role="button" class="nav_name">Dasboard</span>
                </a>
                <a href="../database/dosen.php" class="nav_link">
                    <i class='bx bx-user-pin nav_icon'></i>
                    <span role="butt" class="nav_name">Data Dosen</span>
                </a>
            
                
                <a href="../database/mahasiswa.php" class="nav_link">
                    <i class='bx bx-group nav_icon'></i>
                    <span role="butt" class="nav_name">Data Mahasiswa</span>
                </a>
                
                <a href="../database/penelitian.php" class="nav_link">
                    <i class='bx bx-archive nav_icon'></i>
                    <span role="butt" class="nav_name">Data Penelitian</span>
                </a>
                
                <a href="../database/anggota_penelitian.php" class="nav_link">
                    <i class='bx bx-network-chart nav_icon'></i>
                    <span role="butt" class="nav_name">Anggota Penelitian</span>
                </a>
                
                <a href="../database/luaran_penelitian.php" class="nav_link">
                    <i class='bx bx-paper-plane nav_icon'></i>
                    <span role="butt" class="nav_name">Luaran Penelitian</span>
                </a>
                
                <a href="../database/pendanaan_eksternal.php" class="nav_link">
                    <i class='bx bx-credit-card nav_icon'></i>
                    <span role="butt" class="nav_name">Pendanaan Eksternal</span>
                </a>
                
                <a href="../database/konfrensi.php" class="nav_link ">
                    <i class='bx bx-microphone nav_icon'></i>
                    <span role="butt" class="nav_name">Konferensi</span>
                </a>
                
                <a href="../database/hki.php" class="nav_link">
                    <i class='bx bx-certification nav_icon'></i>
                    <span role="butt" class="nav_name">HKI</span>
                </a>
            </div>
        </div> 
        
        <a href="#" class="nav_link">
            <i class='bx bx-log-out nav_icon'></i>
            <span class="nav_name">Sign Out</span>
        </a>
    </nav>
</div>
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
    document.addEventListener("DOMContentLoaded", function(event) { 
        const toggleNavbar = (toggleId, navId, bodyId, headerId) => {
            const toggle = document.getElementById(toggleId),
                nav = document.getElementById(navId),
                bodypd = document.getElementById(bodyId),
                headerpd = document.getElementById(headerId)

            if(toggle && nav && bodypd && headerpd) {
                const toggleAction = () => {
                    nav.classList.toggle('show')
                    toggle.classList.toggle('bx-x')
                    bodypd.classList.toggle('body-pd')
                    headerpd.classList.toggle('body-pd')
                }

                toggle.addEventListener('click', toggleAction)
                toggle.addEventListener('touchstart', toggleAction)
            }
        }

        const hoverNavbar = (navId, bodyId, headerId) => {
            const nav = document.getElementById(navId),
                bodypd = document.getElementById(bodyId),
                headerpd = document.getElementById(headerId)

            if(nav && bodypd && headerpd) {
                nav.addEventListener('mouseover', () => {
                    nav.classList.add('show')
                    bodypd.classList.add('body-pd')
                    headerpd.classList.add('body-pd')
                })

                nav.addEventListener('mouseout', () => {
                    nav.classList.remove('show')
                    bodypd.classList.remove('body-pd')
                    headerpd.classList.remove('body-pd')
                })
            }
        }

        toggleNavbar('header-toggle','nav-bar','body-pd','header')
        hoverNavbar('nav-bar','body-pd','header')
    });
</script>
</body>
</html>