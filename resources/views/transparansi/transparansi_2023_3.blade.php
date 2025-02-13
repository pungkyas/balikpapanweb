<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Pemerintah Kota Balikpapan</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/logohero.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Presento
  * Template URL: https://bootstrapmade.com/presento-bootstrap-corporate-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Navbar Fixed */
        .mega-header {
            background: #ffffff;
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 9999;
        }

        /* Navbar Container */
.mega-container {
    max-width: 1500px;
    margin: 0 auto;
    padding: 0 20px;
    display: flex;
    align-items: center;
    justify-content: space-between; /* Tambahkan ini */
    gap: 5px;
    flex-wrap: wrap; /* Tambahkan ini untuk wrapping */
}

        /* Logo */
        .mega-logo img {
            height: 50px;
        }

        /* Mega Menu */
        .mega-nav {
            position: relative;
            display: inline-block;
        }

        .mega-nav span {
            white-space: nowrap; /* Menjaga teks dalam span tetap satu baris */
            overflow: hidden; /* Menyembunyikan teks yang melampaui kontainer */
            text-overflow: ellipsis; /* Menampilkan ... jika teks terlalu panjang */
        }

        /* Mega Menu Trigger */
        .mega-menu-trigger {
            display: flex;
            align-items: center; /* Membuat ikon dan teks sejajar */
            gap: 0.5rem; /* Jarak antara ikon dan teks */
            text-decoration: none;
            font-weight: bold;
            color: black;
        }

        /* Mega Menu Content (Sub-menu Fixed) */
        .mega-menu-content {
            display: none;
            position: fixed; /* Agar tetap di tempat meskipun scroll */
            top: 80px; /* Bisa disesuaikan agar tidak menutupi navbar */
            left: 50%;
            transform: translateX(-50%);
            width: 100vw; /* Lebarnya 80% dari viewport */
            min-height: 50vh; /* Tinggi minimum */
            background: #ffffff;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            padding: 2rem;
            border-radius: 8px;
            border-top: 3px solid #0066cc;
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .mega-menu-content.active {
            display: block;
        }

        /* Grid Layout */
        .mega-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            max-width: 1000px;
            margin: auto;
        }

        /* Mega Menu Item */
        .mega-item {
            display: flex;
            align-items: center; /* Menyusun ikon dan teks sejajar vertikal */
            gap: 1rem; /* Jarak antara ikon dan teks */
            padding: 1rem;
            border-radius: 8px;
            transition: all 0.3s;
            text-decoration: none;
            color: #333;
        }

        /* Hover Effect */
        .mega-item:hover {
            background: #f5f5f5;
            transform: translateX(5px);
        }

        /* Ikon */
        .mega-item .mega-icon {
            font-size: 1.5rem;
            color: #0066cc;
            min-width: 40px;
        }

        /* Text Styling */
        .mega-text h3 {
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
        }

        .mega-text p {
            font-size: 0.9rem;
            color: #666;
            line-height: 1.4;
        }

        .mega-text span {
            white-space: nowrap; /* Menjaga teks dalam span tetap satu baris */
            overflow: hidden; /* Menyembunyikan teks yang melampaui kontainer */
            text-overflow: ellipsis; /* Menampilkan ... jika teks terlalu panjang */
        }

        /* Tambahkan ikon tutup untuk sub-menu */
        .mega-menu-content .close-menu {
            position: absolute;
            top: 20px; /* Posisikan agak lebih bawah dari sebelumnya */
            right: 50px; /* Posisikan ke kanan, tapi beri jarak dari tepi */
            font-size: 3rem; /* Ukuran lebih besar */
            color: #0066cc; /* Warna biru */
            cursor: pointer;
            z-index: 9999;
            transition: color 0.3s ease;
        }

        .mega-menu-trigger .arrow-icon {
        margin-left: 8px;
        font-size: 0.8rem;
        transition: transform 0.3s ease;
    }

    /* Rotasi panah saat submenu aktif */
    .mega-menu-content.active ~ .mega-menu-trigger .arrow-icon {
        transform: rotate(180deg);
    }

    .mega-simple-link {
    text-decoration: none;
    font-weight: bold;
    color: black;
    padding: 0.5rem 1rem;
    display: block;
}

.mega-simple-link:hover {
    color: #0066cc;
}

/* Hamburger Menu Styles */
.menu-toggle {
    display: none;
    cursor: pointer;
    font-size: 1.5rem;
    color: #333;
    margin-left: auto;
}

/* Mobile Styles */
@media (max-width: 1024px) {
    .mega-nav {
        display: none;
        width: 100%;
        order: 1;
        padding: 1rem 0;
    }

    .mega-container.active {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        overflow-y: auto;
        background: white;
        z-index: 1000;
    }

    .mega-container.active .mega-nav {
        display: block;
    }

    .mega-menu-trigger {
        padding: 0.1rem 0; /* Mengurangi padding untuk membuat jarak lebih dekat */
        border-bottom: 1px solid #eee;
        font-size: 1.2rem; /* Menyesuaikan ukuran font */
    }

    .mega-menu-content {
        position: static;
        transform: none;
        width: 100%;
        box-shadow: none;
        padding: 0;
        min-height: auto;
        border: none;
    }

    /* Sembunyikan ikon dan deskripsi */
    .mega-icon, .mega-text p {
        display: none;
    }

    .mega-grid {
        grid-template-columns: 1fr;
        gap: 5px; /* Mengatur jarak antar elemen grid */
    }

    .mega-item {
        padding: 0.5rem 0.8rem; /* Menyesuaikan padding item */
        color: white;
        text-decoration: none;
        border-bottom: 1px solid #eee;
        margin-bottom: 5px; /* Mengatur jarak antar item */
    }

    .close-menu {
        display: none;
    }

    .menu-toggle {
        display: block;
    }

    .mega-container {
        flex-wrap: wrap;
        gap: 15px;
        padding: 0 15px;
    }
}

    </style>

    <header class="mega-header">
        <div class="mega-container">
            <a href="{{ url('/home')}}" class="mega-logo">
                <img src="assets/img/logo.png" alt="Logo">
            </a>

            <!-- Menu Profil -->
            <nav class="mega-nav">
                <a href="#" class="mega-menu-trigger">
                    <span>Profil</span>
                    <i class="bi bi-chevron-down arrow-icon"></i>
                </a>

                <div class="mega-menu-content">
                    <span class="close-menu">&times;</span>
                    <div class="mega-grid">
                        <!-- Kolom 1 -->
                        <div class="mega-col">
                            <a href="/sejarah" class="mega-item">
                                <i class="bi bi-building mega-icon"></i>
                                <div class="mega-text">
                                    <h3>Sejarah</h3>
                                    <p>Pelajari sejarah perkembangan kota kami sejak awal berdirinya</p>
                                </div>
                            </a>
                            <a href="/penghargaan" class="mega-item">
                                <i class="bi bi-trophy mega-icon"></i>
                                <div class="mega-text">
                                    <h3>Penghargaan</h3>
                                    <p>Prestasi dan penghargaan yang telah diraih kota kami</p>
                                </div>
                            </a>
                            <a href="/peta" class="mega-item">
                                <i class="bi bi-map mega-icon"></i>
                                <div class="mega-text">
                                    <h3>Peta Kota</h3>
                                    <p>Lihat peta lengkap dan wilayah administrasi kota</p>
                                </div>
                            </a>
                        </div>

                        <!-- Kolom 2 -->
                        <div class="mega-col">
                            <a href="/struktur" class="mega-item">
                                <i class="bi bi-people mega-icon"></i>
                                <div class="mega-text">
                                    <h3>Struktur Organisasi</h3>
                                    <p>Struktur pemerintahan dan organisasi pemerintah kota</p>
                                </div>
                            </a>
                            <a href="/visi_misi" class="mega-item">
                                <i class="bi bi-bullseye mega-icon"></i>
                                <div class="mega-text">
                                    <h3>Visi & Misi</h3>
                                    <p>Visi dan misi pembangunan kota tahun 2020-2025</p>
                                </div>
                            </a>
                            <a href="/kepala_daerah" class="mega-item">
                                <i class="bi bi-person-badge mega-icon"></i>
                                <div class="mega-text">
                                    <h3>Kepala Daerah</h3>
                                    <p>Profil dan program kerja walikota & wakil walikota</p>
                                </div>
                            </a>
                        </div>

                        <!-- Kolom 3 -->
                        <div class="mega-col">
                            <a href="/organisasi" class="mega-item">
                                <i class="bi bi-diagram-3 mega-icon"></i>
                                <div class="mega-text">
                                    <h3>Organisasi Perangkat Daerah</h3>
                                    <p>lembaga pemerintahan yang menjalankan layanan pembangunan daerah.</p>
                                </div>
                            </a>
                            <a href="/moto-daerah" class="mega-item">
                                <i class="bi bi-award mega-icon"></i>
                                <div class="mega-text">
                                    <h3>Lambang Daerah</h3>
                                    <p>Makna dan arti lambang daerah kota kami</p>
                                </div>
                            </a>
                            <a href="/selayang_pandang" class="mega-item">
                                <i class="bi bi-binoculars mega-icon"></i>
                                <div class="mega-text">
                                    <h3>Selayang Pandang</h3>
                                    <p>Profil singkat kota dalam berbagai aspek</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>

            <nav class="mega-nav">
                <a href="#" class="mega-menu-trigger">
                    <span>Seputar Kota</span>
                    <i class="bi bi-chevron-down arrow-icon"></i>
                </a>

                <div class="mega-menu-content">
                    <span class="close-menu">&times;</span>
                    <div class="mega-grid">
                        <!-- Kolom 1 -->
                        <div class="mega-col">
                            <a href="/pariwisata" class="mega-item">
                                <i class="bi bi-camera-reels mega-icon"></i>
                                <div class="mega-text">
                                    <h3>Pariwisata</h3>
                                    <p>Temukan destinasi wisata menarik di kota kami</p>
                                </div>
                            </a>
                            <a href="/transportasi" class="mega-item">
                                <i class="bi bi-bus-front mega-icon"></i>
                                <div class="mega-text">
                                    <h3>Transportasi</h3>
                                    <p>Informasi tentang moda transportasi umum dan rute</p>
                                </div>
                            </a>
                            <a href="/no_telp" class="mega-item">
                                <i class="bi bi-telephone mega-icon"></i>
                                <div class="mega-text">
                                    <h3>No Telepon Penting</h3>
                                    <p>Daftar kontak darurat dan layanan masyarakat</p>
                                </div>
                            </a>
                        </div>

                        <!-- Kolom 2 -->
                        <div class="mega-col">
                            <a href="/wilayah" class="mega-item">
                                <i class="bi bi-map mega-icon"></i>
                                <div class="mega-text">
                                    <h3>Wilayah Administrasi</h3>
                                    <p>Struktur pemerintahan dan pembagian wilayah kota</p>
                                </div>
                            </a>
                            <a href="/pendidikan" class="mega-item">
                                <i class="bi bi-mortarboard mega-icon"></i>
                                <div class="mega-text">
                                    <h3>Pendidikan</h3>
                                    <p>Informasi sekolah, universitas, dan beasiswa</p>
                                </div>
                            </a>
                            <a href="/kesehatan" class="mega-item">
                                <i class="bi bi-heart-pulse mega-icon"></i>
                                <div class="mega-text">
                                    <h3>Kesehatan</h3>
                                    <p>Rumah sakit, puskesmas, dan program kesehatan</p>
                                </div>
                            </a>
                        </div>

                        <!-- Kolom 3 -->
                        <div class="mega-col">
                            <a href="/ekonomi" class="mega-item">
                                <i class="bi bi-cash-stack mega-icon"></i>
                                <div class="mega-text">
                                    <h3>Ekonomi</h3>
                                    <p>Informasi ekonomi, usaha, dan peluang investasi</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>

            <nav class="mega-nav">
                <a href="#" class="mega-menu-trigger">
                    <span>Program Kerja</span>
                    <i class="bi bi-chevron-down arrow-icon"></i>
                </a>

                <div class="mega-menu-content">
                    <span class="close-menu">&times;</span>
                    <div class="mega-grid">
                        <!-- Kolom 1 -->
                        <div class="mega-col">
                            <a href="/data_statistik" class="mega-item">
                                <i class="bi bi-bar-chart mega-icon"></i>
                                <div class="mega-text">
                                    <h3>Data Statistik</h3>
                                    <p>Akses data terbaru perkembangan kota secara real-time</p>
                                </div>
                            </a>
                            <a href="/ilppd" class="mega-item">
                                <i class="bi bi-file-earmark-text mega-icon"></i>
                                <div class="mega-text">
                                    <h3>ILPPD</h3>
                                    <p>Dokumen perencanaan pembangunan jangka panjang daerah</p>
                                </div>
                            </a>
                            <a href="/survey_kepuasan" class="mega-item">
                                <i class="bi bi-clipboard-data mega-icon"></i>
                                <div class="mega-text">
                                    <h3>Survey Kepuasan Masyarakat</h3>
                                    <p>Hasil evaluasi tingkat kepuasan masyarakat terhadap layanan</p>
                                </div>
                            </a>
                        </div>

                        <!-- Kolom 2 -->
                        <div class="mega-col">
                            <a href="/transparansi" class="mega-item">
                                <i class="bi bi-cash-coin mega-icon"></i>
                                <div class="mega-text">
                                    <h3>Transparansi Pengelolaan Keuangan Daerah</h3>
                                    <p>Laporan keuangan daerah yang dapat diakses publik</p>
                                </div>
                            </a>
                            <a href="/laporan" class="mega-item">
                                <i class="bi bi-graph-up mega-icon"></i>
                                <div class="mega-text">
                                    <h3>Laporan Kinerja Kota</h3>
                                    <p>Evaluasi capaian target pembangunan kota per tahun</p>
                                </div>
                            </a>
                            <a href="/status" class="mega-item">
                                <i class="bi bi-tree mega-icon"></i>
                                <div class="mega-text">
                                    <h3>Status Lingkungan Hidup Daerah</h3>
                                    <p>Kondisi lingkungan dan upaya pelestarian daerah</p>
                                </div>
                            </a>
                        </div>

                        <!-- Kolom 3 -->
                        <div class="mega-col">
                            <a href="/perencanaan" class="mega-item">
                                <i class="bi bi-calendar4-range mega-icon"></i>
                                <div class="mega-text">
                                    <h3>Perencanaan Pembangunan</h3>
                                    <p>Rencana strategis pembangunan kota 5 tahun ke depan</p>
                                </div>
                            </a>
                            <a href="/aset" class="mega-item">
                                <i class="bi bi-building-gear mega-icon"></i>
                                <div class="mega-text">
                                    <h3>Aset</h3>
                                    <p>Inventaris aset pemerintah daerah dan pengelolaannya</p>
                                </div>
                            </a>
                            <a href="/realisasi" class="mega-item">
                                <i class="bi bi-wallet2 mega-icon"></i>
                                <div class="mega-text">
                                    <h3>Realisasi Anggaran</h3>
                                    <p>Pelaksanaan anggaran dan belanja daerah tiap tahun</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>

            <nav class="mega-nav">
                <a href="#" class="mega-menu-trigger">
                    <span>Produk Hukum</span>
                    <i class="bi bi-chevron-down arrow-icon"></i>
                </a>
                <div class="mega-menu-content">
                    <span class="close-menu">&times;</span>
                    <div class="mega-grid">
                        <!-- Kolom 1 -->
                        <div class="mega-col">
                            <a href="https://jdih.balikpapan.go.id/peraturan/peraturan-daerah" class="mega-item">
                                <i class="bi bi-file-earmark-text mega-icon"></i>
                                <div class="mega-text">
                                    <h3>PERDA</h3>
                                    <p>Regulasi daerah yang mengatur kebijakan dan peraturan pemerintah kota.</p>
                                </div>
                            </a>
                        </div>

                        <!-- Kolom 2 -->
                        <div class="mega-col">

                        </div>

                        <!-- Kolom 3 -->
                        <div class="mega-col">
                            <a href="https://jdih.balikpapan.go.id/peraturan/peraturan-walikota" class="mega-item">
                                <i class="bi bi-file-earmark-bar-graph mega-icon"></i>
                                <div class="mega-text">
                                    <h3>PERWALI</h3>
                                    <p>Peraturan walikota yang menjelaskan pelaksanaan dan rincian kebijakan daerah.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Menu Event Kota -->
            <nav class="mega-nav">
                <a href="/eventt" class="mega-simple-link"> <!-- Ganti class -->
                    <span>Event Kota</span>
                </a>
            </nav>

            <!-- PPID -->
            <nav class="mega-nav">
                <a href="https://ppid.balikpapan.go.id/" class="mega-simple-link"> <!-- Ganti class -->
                    <span>PPID</span>
                </a>
            </nav>
            <!-- Menu lainnya tetap sama -->
            <!-- ... -->

            <nav class="mega-nav">
                <a href="" class="mega-menu-trigger">
                    <span>Masyarakat</span>
                    <i class="bi bi-chevron-down arrow-icon"></i>
                </a>

                <div class="mega-menu-content">
                    <span class="close-menu">&times;</span>
                    <div class="mega-grid">
                        <!-- Kolom 1 -->
                        <div class="mega-col">
                            <a href="buku_tamu" class="mega-item">
                                <i class="bi bi-journal-text mega-icon"></i>
                                <div class="mega-text">
                                    <h3>Buku Tamu</h3>
                                    <p>Catatan kunjungan dan interaksi masyarakat dengan pemerintah.</p>
                                </div>
                            </a>
                            <a href="/whistleblower" class="mega-item">
                                <i class="bi bi-exclamation-triangle mega-icon"></i>
                                <div class="mega-text">
                                    <h3>Whistleblower</h3>
                                    <p>Laporkan pelanggaran atau tindakan yang mencurigakan secara anonim.</p>
                                </div>
                            </a>
                        </div>

                        <!-- Kolom 2 -->
                        <div class="mega-col">

                        </div>

                        <!-- Kolom 3 -->
                        <div class="mega-col">
                            <a href="/aduan_masyarakat" class="mega-item">
                                <i class="bi bi-chat-dots mega-icon"></i>
                                <div class="mega-text">
                                    <h3>Aduan Masyarakat</h3>
                                    <p>Saluran resmi untuk menyampaikan keluhan dan masukan kepada pemerintah.</p>
                                </div>
                            </a>
                            <a href="/kunjungan_kerja" class="mega-item">
                                <i class="bi bi-briefcase mega-icon"></i>
                                <div class="mega-text">
                                    <h3>Kunjungan Kerja</h3>
                                    <p>Informasi terkait kunjungan kerja pejabat dan delegasi ke daerah.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="menu-toggle" onclick="toggleMenu()">
                <i class="bi bi-list"></i>
            </div>
        </div>
    </header>
<script>
    // Toggle Hamburger Menu
    function toggleMenu() {
        const container = document.querySelector('.mega-container');
        container.classList.toggle('active');
    }

    // Close menu ketika klik di luar
    document.addEventListener('click', function(e) {
        const container = document.querySelector('.mega-container');
        const isClickInside = container.contains(e.target);
        const isToggleButton = e.target.closest('.menu-toggle');

        if (!isClickInside && !isToggleButton) {
            container.classList.remove('active');
        }
    });

    // Close menu ketika klik link (untuk navigasi SPA)
    document.querySelectorAll('.mega-nav a').forEach(link => {
        link.addEventListener('click', function(e) {
            // Hanya tutup menu jika bukan menu trigger
            if (!this.classList.contains('mega-menu-trigger')) {
                document.querySelector('.mega-container').classList.remove('active');
            }
        });
    });


// Toggle Submenu dengan menutup menu lain
document.querySelectorAll('.mega-menu-trigger').forEach(trigger => {
        trigger.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation(); // Tambahkan ini

            const parentNav = this.closest('.mega-nav');
            const menuContent = parentNav.querySelector('.mega-menu-content');

            document.querySelectorAll('.mega-menu-content').forEach(content => {
                if (content !== menuContent) {
                    content.classList.remove('active');
                }
            });

            menuContent.classList.toggle('active');

            // Pertahankan hamburger menu tetap terbuka
            document.querySelector('.mega-container').classList.add('active');
        });
    });


// Close button
document.querySelectorAll('.close-menu').forEach(closeBtn => {
        closeBtn.addEventListener('click', function(e) {
            e.preventDefault();
            this.closest('.mega-menu-content').classList.remove('active');
        });
    });


</script>

  <main class="main">
    <section>
    <style>

    .headerrr {
    background: url('assets/img/background_tittle.png') no-repeat center center;
    background-size: 100% auto;
    color: white;
    text-align: center;
    font-family: 'Poppins', sans-serif;
    font-size: 4rem;
    font-weight: 700;
    padding: 60px 20px;
    }

    /* Responsif untuk tablet (portrait) */
    @media (max-width: 1024px) {
    .headerrr{
        font-size: 2rem;
        padding: 45px 15px;
        background-size: 100% auto;
    }
    }

    /* Responsif untuk ponsel (portrait) */
    @media (max-width: 480px) {
    .headerrr {
        font-size: 1rem;
        padding: 30px 10px;
        background-size: 100% auto;
    }
    }

    /* Responsif untuk tablet dalam mode landscape */
    @media (max-width: 1366px) and (orientation: landscape) {
    .headerrr {
        font-size: 2.5rem;
        padding: 50px 15px;
        background-size: 100% auto;
    }
    }

    /* Responsif untuk ponsel dalam mode landscape */
    @media (max-width: 667px) and (orientation: landscape) {
    .headerrr {
        font-size: 2.5rem;
        padding: 40px 15px;
        background-size: 100px;
    }
    }

    </style>
    <div class="headerrr">
        Transparansi Pengelolaan Keuangan
    </div>

        <style>
            body {
                color: white;
                padding: 20px;
                font-family: 'Poppins', sans-serif;
                background-color: white;
            }
            .containerr {
                max-width: 900px;
                margin: auto;
                background: white;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            }
            h1 {
                color: #034EA1;
                font-size: 24px;
                font-weight: bold;
            }
            .search-box {
                margin-top: 20px;
                display: flex;
                flex-direction: row;
                gap: 10px;
            }
            .search-box input {
                flex: 1;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
            }
            .search-box button {
                background-color: #034EA1;
                color: white;
                padding: 10px 15px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }
            .document {
                margin-top: 20px;
                padding: 15px;
                border: 1px solid #ddd;
                border-radius: 8px;
                background: white;
            }
            .document h2 {
                color: #1e40af;
                font-size: 18px;
            }
            .document p, .document .date {
                color: #4b5563;
                font-size: 14px;
            }
            .document .date {
                font-size: 12px;
            }
            .buttons {
                margin-top: 10px;
            }
            .buttons a {
                text-decoration: none;
            }

            .view-btn {
                background: #034EA1;
                color: white;
                padding: 8px 12px;
                border-radius: 5px;
                border: none;
                cursor: pointer;
            }
            .download-btn {
                background: #034EA1;
                color: white;
                padding: 8px 12px;
                border-radius: 5px;
                border: none;
                cursor: pointer;
            }

            .view-btn:hover,
            .download-btn:hover {
                background: #0466c8; /* Warna lebih cerah saat hover */
                transition: background 0.3s ease-in-out;
                cursor: pointer;
            }

            /* Responsiveness */
            @media (max-width: 768px) {
                .containerr {
                    padding: 15px;
                }
                .search-box {
                    flex-direction: column;
                }
                .search-box input {
                    width: 100%;
                }
            }

            @media (max-width: 480px) {
                h1 {
                    font-size: 20px;
                }
                .document h2 {
                    font-size: 16px;
                }
                .document p, .document .date {
                    font-size: 12px;
                }
                .download-btn {
                    padding: 6px 10px;
                }
            }
        </style>

<div class="containerr">
    <h1>Perubahan APBD Tahun 2023</h1>
    <div class="document">
        <h2>Perubahan RAPBD Kota Balikpapan Tahun 2023</h2>
        <div class="buttons">
        </div>
        <div class="document">
            <h2>Raperda Perubahan Anggaran Pendapatan dan Belanja Daerah Tahun Anggaran 2023</h2>
            <div class="buttons">
                <a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2023/Rancangan%20Perubahan%20APBD.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
            </div>
        </div>
        <div class="document">
            <h2>Ringkasan RKA Perubahan Anggaran Pendapatan dan Belanja Daerah Tahun Anggaran 2023</h2>
            <div class="buttons">
                <a href="https://web.balikpapan.go.id/detail/read/58981/ringkasan-rka-perubahan-anggaran-pendapatan-dan-belanja-daerah-tahun-anggaran-2023"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
            </div>
        </div>
    </div>
    <div class="document">
        <h2>Perubahan APBD Tahun 2023</h2>
        <div class="buttons">
        </div>
        <div class="document">
            <h2>Peraturan Kepala Daerah Perubahan APBD Tahun Anggaran 2023</h2>
            <div class="buttons">
                <a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2023/PERDA%20NO%204%20THN%202023%20TTG%20APBD-P.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
            </div>
        </div>
        <div class="document">
            <h2>Peraturan Kepala Daerah Perubahan Penjabaran APBD Tahun Anggaran 2023</h2>
            <div class="buttons">
                <a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2023/PERWAL%2016%20THN%202023%20TTG%20PENJABARAN%20APBD-P%20TA.%202023.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
            </div>
        </div>
        <div class="document">
            <h2>Ringkasan DPA Perubahan Penjabaran APBD Tahun Anggaran 2023</h2>
            <div class="buttons">
                <a href="https://web.balikpapan.go.id/detail/read/58982/ringkasan-dpa-perubahan-penjabaran%20apbd-tahun-anggaran-2023"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
            </div>
        </div>
    </div>
</section>

    <section>
    <style>
        /* Style untuk section */
        .section-container {
            position: relative;
            width: 100%;
            height: 75px;
            background-color: white; /* Warna latar belakang section */
            padding: 20px;
            box-sizing: border-box;
            margin-bottom: -100px;
        }

        /* Posisi gambar di kanan bawah */
        .section-container img {
            position: absolute;
            bottom: 10px;
            right: 10px;
            max-width: 20vw; /* Ukuran maksimal gambar 20% dari lebar section */
            max-height: 20vh; /* Ukuran maksimal gambar 20% dari tinggi section */
            width: auto;
            height: auto;
        }

        /* Responsif untuk layar tablet portrait */
        @media (max-width: 768px) {
            .section-container img {
                max-width: 30vw;
                max-height: 30vh;
            }
        }

        /* Responsif untuk layar tablet landscape */
        @media (min-width: 769px) and (max-width: 1024px) {
            .section-container img {
                max-width: 25vw;
                max-height: 25vh;
            }
        }

        /* Responsif untuk perangkat mobile */
        @media (max-width: 480px) {
            .section-container img {
                max-width: 40vw;
                max-height: 40vh;
            }
        }
        @media (min-width: 1568px) {
            .section-container img {
                max-width: 15vw; /* Ukuran maksimal gambar 15% dari lebar section */
                max-height: 15vh; /* Ukuran maksimal gambar 15% dari tinggi section */
            }
        }
    </style>
        <div class="section-container">
            <img src="assets/img/balikpapan_nyaman.png" alt="Gambar di Pojok Kanan Bawah" />
         </div>
    </section>

    <section class="responsive-image-section">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .responsive-image-container {
            position: relative;
            overflow: hidden;
        }

        .responsive-image {
            width: 100%;
            height: auto;
            display: block; /* Menghilangkan celah default pada gambar */
        }

        .blue-section {
            background-color: #034EA1; /* Biru */
            text-align: center;
            padding: 50px 20px;
            margin: 0;
        }

        .blue-section img.logo-hero {
            width: 120px; /* Logo hero lebih kecil */
            margin-bottom: 20px;
        }

        .logo-row {
            display: flex; /* Flexbox untuk menyusun gambar sejajar */
            justify-content: center;
            align-items: center;
            gap: 30px;
            flex-wrap: wrap; /* Membuat gambar bisa ter-wrap jika space terbatas */
            margin-bottom: 20px;
        }

        .logo-row img {
            width: 100px; /* Ukuran logo default */
            height: auto;
            transition: width 0.3s ease; /* Efek transisi saat mengubah ukuran */
        }

        .white-line {
            height: 4px;
            background-color: white;
            width: 100%;
            margin-top: 50px;
        }

        /* Responsiveness for Mobile and Tablet */
        @media (min-width: 768px) { /* Mobile */
            .blue-section {
                padding: 40px 15px; /* Padding lebih kecil untuk mobile */
            }

            .blue-section img.logo-hero {
                width: 100px; /* Ukuran logo hero lebih kecil untuk mobile */
            }

            .logo-row img {
                width: 80px; /* Ukuran logo lebih kecil */
            }

            .logo-row img:hover {
                width: 120px; /* Membesarkan logo saat hover */
            }
        }

        @media (max-width: 1120px) and (orientation: landscape) { /* Mobile Landscape */
            .logo-row {
                display: flex; /* Flexbox untuk landscape */
                justify-content: center; /* Tengahkan logo */
                gap: 15px; /* Jarak antar logo */
            }

            .logo-row img {
                width: 90px; /* Ukuran logo lebih kecil */
            }

            .logo-row img:hover {
                width: 120px; /* Membesarkan logo saat hover */
            }
        }

        @media (min-width: 8100px) and (max-width: 1200px) { /* Tablet */
            .blue-section {
                padding: 50px 20px; /* Padding sedang untuk tablet */
            }

            .blue-section img.logo-hero {
                width: 110px; /* Ukuran logo hero sedang */
            }

            .logo-row img {
                width: 90px; /* Ukuran logo sedang */
            }

            .logo-row img:hover {
                width: 130px; /* Membesarkan logo saat hover */
            }
        }

        @media (min-width: 1119px) { /* Desktop */
            .blue-section {
                padding: 60px 40px; /* Padding besar untuk desktop */
            }

            .blue-section img.logo-hero {
                width: 150px; /* Ukuran logo hero lebih besar */
            }

            .logo-row img {
                width: 150px; /* Ukuran logo lebih besar */
            }

            .logo-row img:hover {
                width: 180px; /* Membesarkan logo saat hover */
            }
        }
    </style>
</main>
    <div class="responsive-image-container">
        <!-- Gambar whistleblower -->
        <img
            src="assets/img/batik.png"
            alt="Whistleblower System"
            class="responsive-image">
    </div>


    <div class="blue-section">
        <img src="assets/img/balikpapan_putih.png" alt="Hero Logo" class="logo-hero">
        <div class="logo-row">
            <a href="https://datin.balikpapan.go.id/"><img src="assets/img/sikopin.png" alt="Logo 1">
            <a href="http://sipembelanja.balikpapan.go.id/"><img src="assets/img/shope.png" alt="Logo 2">
            <a href="https://elhkpn.kpk.go.id/portal/user/pengumuman_lhkpn/UmtGRlZsVk9Vbkp2ZURSNVpHUjRhbFF5YzJSVk9EZEJXVVpQSzJoNVZFUmFMMGM0TUZrd2NFbFRjMll3Y25kckt6STRhR2xuUm5KS1pUUlJUSEJOVkE9PQ=="><img src="assets/img/lhkpn.png" alt="Logo 3">
            <a href="https://www.lapor.go.id/"><img src="assets/img/lapor.png" alt="Logo 4">
            <a href="https://datin.balikpapan.go.id/"><img src="assets/img/anak.png" alt="Logo 5">
            <a href="https://web.balikpapan.go.id/whistleblower"><img src="assets/img/pluit.png" alt="Logo 6">
        </div>
        <div class="white-line"></div>
    </div>
    <footer>
        <style>
            footer {
              margin-top: 0;
                background-color: #1B2127;
                color: white;
                padding: 40px 20px;
            }

            footer h5 {
                font-size: 18px;
                font-weight: bold;
                margin-bottom: 15px;
                color: white;
            }

            footer .divider {
                width: 100%;
                height: 2px;
                background-color: white;
                margin: 10px 0;
            }

            footer .icon-text {
                display: flex;
                align-items: center;
                gap: 10px;
                margin-bottom: 15px;
                font-family: 'Poppins', sans-serif;
            }

            footer .icon-row {
                display: flex;
                align-items: center;
                justify-content: space-between;
                gap: 20px;
            }

            footer .icon-text i {
                font-size: 20px;
                font-family: 'Poppins', sans-serif;
            }

            footer .icon-text p {
                margin: 0;
                line-height: 1.5;
            }

            footer .contact-info {
                margin-top: 20px;
            }

            footer .form-control {
                background-color: transparent;
                border: 1px solid white;
                border-radius: 20px;
                color: white;
                width: 100%;
                padding: 15px;
                font-size: 16px;
            }

            footer .form-control::placeholder {
                color: #b0b0b0;
            }

            footer .form-control:focus {
                box-shadow: none;
                border-color: #ffffff;
            }

            footer .form-actions {
                display: flex;
                gap: 10px;
                margin-top: 15px;
                flex-wrap: wrap; /* Membuat tombol responsif */

            }

            /* Tombol untuk Lihat Buku Tamu */
            footer .form-actions .btn-blue {
                width: 48%; /* Setengah lebar untuk tombol */
                background: linear-gradient(90deg, #034EA1 0%, #1A76D2 100%);
                color: white;
                border: none;
                transition: background-color 0.3s;
                border-radius: 70px;
                padding: 12px 30px;
                display: inline-flex;
                align-items: center;
                cursor: pointer;
                justify-content: center;
                font-family: 'Poppins', sans-serif;
            }

            footer .form-actions .btn-blue:hover {
              background: linear-gradient(90deg, #034EA1 100%, #1A76D2 0%);
            }

            /* Tombol untuk Kirim */
            footer .form-actions .btn-green {
                width: 50%; /* Setengah lebar untuk tombol */
                background: linear-gradient(90deg, #8BC43F 0%, #00CB44 100%);
                color: white;
                border: none;
                transition: background-color 0.3s;
                border-radius: 70px;
                padding: 12px 30px;
                display: inline-flex;
                align-items: center;
                cursor: pointer;
                justify-content: center;
                font-family: 'Poppins', sans-serif;
            }

            footer .form-actions .btn-green:hover {
              background: linear-gradient(90deg, #8BC43F 100%, #00CB44 0%);
            }

            footer .button-container {
                position: relative;
                text-align: right;
                margin-top: 20px;
            }

            footer .button-container .btn-blue {
                background: linear-gradient(90deg, #034EA1 0%, #1A76D2 100%);
                border-radius: 70px;
                padding: 8px 20px;
                display: inline-flex;
                align-items: center;
                cursor: pointer;
                font-family: 'Poppins', sans-serif;
            }

            footer .button-container .btn-blue span {
                color: white;
                font-size: 16px;
                font-weight: 700;
                font-family: 'Poppins', sans-serif;
            }

            footer .button-container .arrow-icon {
                margin-left: 10px;
            }

            footer .button-container .btn-green {
                background: linear-gradient(90deg, #8BC43F 0%, #00CB44 100%);
                border-radius: 70px;
                padding: 8px 20px;
                display: inline-flex;
                align-items: center;
                cursor: pointer;
                font-family: 'Poppins', sans-serif;
            }

            footer .button-container .btn-green span {
                color: white;
                font-size: 16px;
                font-weight: 700;
                font-family: 'Poppins', sans-serif;
            }

            footer .bottom-divider {
                margin-top: 40px;
                width: 100%;
                height: 2px;
                background-color: white;
            }

            footer .copyright {
                text-align: center;
                margin-top: 20px;
                font-size: 14px;
                color: #b0b0b0;
            }

    /* Responsif untuk layar kecil (tablet dan mobile) */
    @media (max-width: 1024px) {
        footer .row {
            flex-direction: column;
            align-items: center;
        }

        footer .button-container {
            text-align: center;
            margin-top: 20px;
        }

        footer h5 {
            font-size: 20px; /* Ukuran font judul diperbesar untuk tablet */
            font-weight: bold;
        }

        footer .form-actions .btn {
            width: 100%; /* Lebar tombol penuh pada tablet */
            padding: 15px 30px; /* Ukuran tombol diperbesar */
            font-size: 18px; /* Ukuran teks tombol diperbesar */
        }

        footer .form-control {
            width: 100%; /* Input form memanfaatkan ruang penuh */
            max-width: 600px; /* Batasi ukuran maksimum jika diperlukan */
            padding: 15px; /* Padding input form diperbesar */
            font-size: 16px; /* Ukuran font pada input form diperbesar */
            margin: 10px auto; /* Penempatan form di tengah */
            box-sizing: border-box; /* Pastikan padding dihitung dengan lebar */
        }
    }

    /* Responsif untuk layar sangat kecil (mobile) */
    @media (max-width: 768px) {
        footer .row {
            flex-direction: column;
            align-items: center;
        }

        footer .button-container {
            text-align: center;
            margin-top: 20px;
        }

        footer h5 {
            font-size: 16px; /* Ukuran font judul lebih kecil untuk mobile */
        }

        footer .form-actions .btn {
            width: 100%; /* Lebar tombol penuh pada perangkat mobile */
            padding: 10px 20px; /* Ukuran tombol disesuaikan */
            font-size: 16px; /* Ukuran teks tombol tetap jelas */
        }

        footer .form-control {
            width: 100%; /* Input form memanfaatkan ruang penuh */
            max-width: 500px; /* Batasi ukuran maksimum jika diperlukan */
            padding: 12px; /* Padding input form disesuaikan */
            font-size: 14px; /* Ukuran font pada input form disesuaikan */
            margin: 10px auto; /* Penempatan form di tengah */
            box-sizing: border-box; /* Pastikan padding dihitung dengan lebar */
        }
    }

        </style>
        <div class="container">
            <div class="row">
                <!-- Left Section -->
                <div class="col-md-6">
                    <h5>Lokasi</h5>
                    <div class="divider"></div>
                    <img src="assets/img/maps.png" alt="Map" class="img-fluid my-3">

                    <h5>Kontak</h5>
                    <div class="divider"></div>

                    <div class="contact-info">
                        <div class="icon-text">
                            <i class="bi bi-geo-alt"></i>
                            <p>Pemerintah Kota Balikpapan<br>
                            Jl. Jenderal Sudirman no.1 rt.13, Balikpapan</p>
                        </div>
                        <div class="icon-row">
                            <div class="icon-text">
                                <i class="bi bi-telephone"></i>
                                <p>0542-421500, 421600, 734115</p>
                            </div>
                            <div class="icon-text">
                                <i class="bi bi-envelope"></i>
                                <p>admin@balikpapan.go.id</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Section -->
                <div class="col-md-6">
                    <form>
                        <div class="mb-3">
                            <input
                                type="text"
                                class="form-control with-icon-placeholder"
                                placeholder=" Nama"
                                style="font-family: 'Font Awesome 5 Free', Poppins;"
                            >
                        </div>
                        <div class="mb-3">
                            <input
                                type="email"
                                class="form-control with-icon-placeholder"
                                placeholder=" Email"
                                style="font-family: 'Font Awesome 5 Free', Poppins;"
                            >
                        </div>
                        <div class="mb-3">
                            <input
                                type="text"
                                class="form-control with-icon-placeholder"
                                placeholder="✎ Judul"
                                style="font-family: 'Font Awesome 5 Free', Poppins;"
                            >
                        </div>
                        <div class="mb-3">
                            <textarea
                                class="form-control with-icon-placeholder"
                                rows="5"
                                placeholder=" Isi Pesan"
                                style="font-family: 'Font Awesome 5 Free', Poppins;"
                            ></textarea>
                        </div>
                        <div class="form-actions">
                            <button type="button" class="btn btn-blue">
                                <span>Lihat Buku Tamu</span>
                                <div class="arrow-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path d="M12.354 7.646a.5.5 0 0 0 0-.708L8.707 3.707a.5.5 0 0 0-.707.707L10.793 7H1a.5.5 0 0 0 0 1h9.793l-2.793 2.793a.5.5 0 1 0 .707.707l3.646-3.646z" />
                                    </svg>
                                </div>
                            </button>
                            <button type="submit" class="btn btn-green">
                                <span>Kirim</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Bottom Divider -->
            <div class="bottom-divider"></div>

            <!-- Copyright -->
            <div class="copyright">
                Copyright © 2025 Pemerintah Kota Balikpapan
            </div>
        </div>
    </footer>
</main>
  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
