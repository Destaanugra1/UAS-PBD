<html>
  <head>
    <title>Project UAS Perancangan Basis Data</title>
    <style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #052659;
}

.navbar {
    background-color: #1a1a1a;
    padding: 1rem 2rem;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.navbar-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
}

.logo {
    color: #fff;
    font-size: 1.5rem;
    font-weight: 600;
    text-decoration: none;
}

.nav-menu {
    list-style: none;
    display: flex;
    margin: 0;
    padding: 0;
}

.nav-link {
    color: #fff;
    text-decoration: none;
    padding: 0.5rem 1rem;
    margin: 0 0.5rem;
    font-weight: 500;
    transition: color 0.3s ease;
}

.nav-link:hover {
    color: #5483B3;
}

.hero-slider {
    position: relative;
    background-color: #7DA0CA;
    border-radius: 1rem;
    margin: 2rem;
    padding: 2rem;
    display: flex;
    align-items: center;
}

.hero-content {
    flex: 1;
    text-align: center;
    color: white;
}

.logo {
    max-width: 150px;
    margin-bottom: 1rem;
}

.hero-content h1 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
}

.hero-content p {
    margin-bottom: 1.5rem;
}

.read-more {
    padding: 0.5rem 1.5rem;
    background-color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.slider-btn {
    background: none;
    border: none;
    color: white;
    font-size: 2rem;
    cursor: pointer;
}

.slider-dots {
    margin-top: 1rem;
    display: flex;
    justify-content: center;
    gap: 0.5rem;
}

.dot {
    width: 8px;
    height: 8px;
    background-color: rgba(255, 255, 255, 0.5);
    border-radius: 50%;
}

.dot.active {
    background-color: white;
}

.info-cards {
    grid-column: span 2;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1rem;
    margin: 2rem;
}

.button1, .button2, .button3, .button4, .button5, .button6, .button7, .button8, .button9 {
    background-color: white;
    color: black;
    border-radius: 1rem;
    padding: 1.5rem;
    display: value;
    align-items: center;
    gap: 1rem;
    text-decoration: none;
}

.button1:hover, .button2:hover, .button3:hover, .button4:hover, .button5:hover, .button6:hover, .button7:hover, .button8:hover, .button9:hover {
    background-color: #5483B3;
    color: white; 
  }

.info-card h3 {
    margin-bottom: 0.5rem;
}

.info-card p {
    font-size: 0.9rem;
    color: #666;
}

.info-card:hover {
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}
    </style>
    <script src="https://kit.fontawesome.com/8d0182f1bd.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <header>
        <nav class="navbar">
            <div class="navbar-container">
                <a href="#" class="logo">Kelompok 1</a>
            </div>
        </nav>
    </header>

    <main>
        <section class="hero-slider">
            <div class="hero-content">
                <h1>DATABASE</h1>
                <p>Selamat Datang di Project UAS Perancangan Basis Data.</p>
            </div>
        </section>

        <div class="info-cards">
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
