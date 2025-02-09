<html>
  <head>
  <script src="https://cdn.tailwindcss.com"></script>
    <title>Project UAS Perancangan Basis Data</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
    <script src="https://kit.fontawesome.com/8d0182f1bd.js" crossorigin="anonymous"></script>
  </head>
  <body class="bg-gray-900 text-white font-roboto">
    <header class="flex justify-between items-center p-4 border-b border-gray-700">
   <div class="flex items-center space-x-2">
    <!-- <img alt="Google I/O logo" class="h-8" height="40" src="https://storage.googleapis.com/a1aa/image/Kos46uLO26Mm0zM4JZbp2WWCxWg8CJ3S8HsyJGiHW0c.jpg" width="40"/> -->
    <span class="text-xl font-bold">
     Kelompok 1
    </span>
   </div>
   <nav class="hidden md:flex space-x-6">
    <a class="hover:underline" href="#">
     Explore
    </a>
    <a class="hover:underline" href="#">
     Community
    </a>
    <a class="hover:underline" href="#">
     About
    </a>
   </nav>
  </header>
  <main class=" flex flex-col md:flex-row items-center justify-between p-8 md:p-16">
   <div class="md:w-1/2 space-y-4">
    <h1 class="text-5xl md:text-6xl font-bold">
     Pengolahan Data
    </h1>
    <p class="text-lg md:text-xl">
    Selamat Datang di Project UAS Perancangan Basis Data
    kami
    </p>
    <button class="bg-blue-600 text-white px-6 py-3 rounded-full text-lg font-semibold hover:bg-blue-700" onclick="document.getElementById('info-cards').scrollIntoView({ behavior: 'smooth' });">
     Telusuri
    </button>
   </div>
   <div class="md:w-1/2 mt-8 md:mt-0">
    <img alt="Abstract colorful 3D shapes" class="w-full" height="400" src="assets/avatar.png" width="600"/>
   </div>
  </main>
  <main>
        <!-- <section class="hero-slider">
            <div class="hero-content">
                <h1>DATABASE</h1>
                <p>Selamat Datang di Project UAS Perancangan Basis Data.</p>
            </div>
        </section> -->

        <div id="info-cards" class="info-cards">
            <a href="database/dosen.php" class="button1">
                <i class="fa-solid fa-chalkboard-user"></i>
                <h3>Data Dosen</h3>
                <p>Menyediakan informasi tentang dosen.</p>
            </a>
            <a href="database/mahasiswa.php" class="button2">
                <i class="fa-solid fa-user-tie"></i>
                <h3>Data Mahasiswa</h3>
                <p>Mengelola data mahasiswa yang terlibat dalam penelitian.</p>
            </a>
            <a href="database/penelitian.php" class="button3">
                <i class="fa-solid fa-book"></i>
                <h3>Data Penelitian</h3>
                <p>Menampilkan daftar penelitian yang sedang atau telah dilakukan.</p>
            </a>
            <a href="database/anggota_penelitian.php" class="button4">
                <i class="fa-solid fa-people-group"></i>
                <h3>Data Anggota Penelitian</h3>
                <p>Menunjukkan siapa saja yang terlibat dalam suatu penelitian.</p>
            </a>
            <a href="database/luaran_penelitian.php" class="button5">
                <i class="fa-solid fa-book-open-reader"></i>
                <h3>Data Luaran Penelitian</h3>
                <p>Menampilkan hasil penelitian seperti publikasi dan jenis produk.</p>
            </a>
            <a href="database/pendanaan_eksternal.php" class="button6">
                <i class="fa-solid fa-sack-dollar"></i>
                <h3>Data Pendanaan Eksternal</h3>
                <p>Menyediakan informasi tentang sumber dana eksternal untuk penelitian.</p>
            </a>
            <a href="database/konfrensi.php" class="button7">
                <i class="fa-solid fa-person-chalkboard"></i>
                <h3>Data Konferensi</h3>
                <p>Menampilkan daftar konferensi yang diikuti oleh dosen atau mahasiswa.</p>
            </a>
            <a href="database/hki.php" class="button8">
                <i class="fa-solid fa-copyright"></i>
                <h3>Data HKI</h3>
                <p>Mengelola data Hak Kekayaan Intelektual yang dihasilkan dari penelitian.</p>
            </a>
            <a href="our/index.html" class="button9">
                <i class="fa-solid fa-users-viewfinder"></i>
                <h3>Data Kelompok 1</h3>
                <p>Menyediakan informasi tentang kelompok atau tim penelitian tertentu.</p>
            </a>
        </div>
        </section>
    </main>
  </body>
</html>
