<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../template/page.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="l-navbar" id="nav-bar">
    <nav class="nav">
        <div class="pointer"> 
            <a href="../index.php" role="button" class="link-offset-2 link-underline nav_link link-underline-opacity-0">
            <i class="bi bi-database-fill"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-database-fill" viewBox="0 0 16 16">
  <path d="M3.904 1.777C4.978 1.289 6.427 1 8 1s3.022.289 4.096.777C13.125 2.245 14 2.993 14 4s-.875 1.755-1.904 2.223C11.022 6.711 9.573 7 8 7s-3.022-.289-4.096-.777C2.875 5.755 2 5.007 2 4s.875-1.755 1.904-2.223"/>
  <path d="M2 6.161V7c0 1.007.875 1.755 1.904 2.223C4.978 9.71 6.427 10 8 10s3.022-.289 4.096-.777C13.125 8.755 14 8.007 14 7v-.839c-.457.432-1.004.751-1.49.972C11.278 7.693 9.682 8 8 8s-3.278-.307-4.51-.867c-.486-.22-1.033-.54-1.49-.972"/>
  <path d="M2 9.161V10c0 1.007.875 1.755 1.904 2.223C4.978 12.711 6.427 13 8 13s3.022-.289 4.096-.777C13.125 11.755 14 11.007 14 10v-.839c-.457.432-1.004.751-1.49.972-1.232.56-2.828.867-4.51.867s-3.278-.307-4.51-.867c-.486-.22-1.033-.54-1.49-.972"/>
  <path d="M2 12.161V13c0 1.007.875 1.755 1.904 2.223C4.978 15.711 6.427 16 8 16s3.022-.289 4.096-.777C13.125 14.755 14 14.007 14 13v-.839c-.457.432-1.004.751-1.49.972-1.232.56-2.828.867-4.51.867s-3.278-.307-4.51-.867c-.486-.22-1.033-.54-1.49-.972"/>
</svg></i>
                <span class=" nav_logo-name">DB Penelitian</span> 
            </a>
            <div class="nav_list"> 
                <a role="button" href="../database/dosen.php" class="link-offset-2 link-underline nav_link link-underline-opacity-0">
                    <i class='bx bx-user-pin nav_icon'></i>
                    <span role="butt" class="nav_name">Data Dosen</span>
                </a>
            
                
                <a role="button" href="../database/mahasiswa.php" class="link-offset-2 link-underline nav_link link-underline-opacity-0">
                    <i class='bx bx-group nav_icon'></i>
                    <span role="butt" class="nav_name">Data Mahasiswa</span>
                </a>
                
                <a role="button" href="../database/penelitian.php" class="link-offset-2 link-underline nav_link link-underline-opacity-0">
                    <i class='bx bx-archive nav_icon'></i>
                    <span role="butt" class="nav_name">Data Penelitian</span>
                </a>
                
                <a role="button" href="../database/anggota_penelitian.php" class="link-offset-2 link-underline nav_link link-underline-opacity-0">
                    <i class='bx bx-network-chart nav_icon'></i>
                    <span role="butt" class="nav_name">Anggota Penelitian</span>
                </a>
                
                <a role="button" href="../database/luaran_penelitian.php" class="link-offset-2 link-underline nav_link link-underline-opacity-0">
                    <i class='bx bx-paper-plane nav_icon'></i>
                    <span role="butt" class="nav_name">Luaran Penelitian</span>
                </a>
                
                <a role="button" href="../database/pendanaan_eksternal.php" class="link-offset-2 link-underline nav_link link-underline-opacity-0">
                    <i class='bx bx-credit-card nav_icon'></i>
                    <span role="butt" class="nav_name">Pendanaan Eksternal</span>
                </a>
                
                <a role="button" href="../database/konfrensi.php" class="link-offset-2 link-underline nav_link link-underline-opacity-0 ">
                    <i class='bx bx-microphone nav_icon'></i>
                    <span role="butt" class="nav_name">Konferensi</span>
                </a>
                
                <a role="button" href="../database/hki.php" class="link-offset-2 link-underline nav_link link-underline-opacity-0">
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