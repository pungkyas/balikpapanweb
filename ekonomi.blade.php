<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Presento Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
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

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
      <a href="{{ url('/home')}}" class="logo d-flex align-items-center me-auto">
        <img src="assets/img/logo.png" alt="">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
            <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="/moto-daerah">Moto dan Lambang Daerah</a></li>
                  <li><a href="/penghargaan">Penghargaan</a></li>
                  <li><a href="/sejarah">Sejarah</a></li>
                  <li><a href="/struktur">Struktur Organisasi</a></li>
                  <li><a href="/visi_misi">Visi & Misi </a></li>
                  <li><a href="/kepala_daerah">Kepala Daerah</a></li>
                  <li><a href="/organisasi">Organisasi Perangkat Daerah</a></li>
                  <li><a href="/peta">Peta Kota</a></li>
                  <li><a href="/selayang_pandang">Selayang Pandang</a></li>
                </ul>
             <li class="dropdown"><a href="#"><span>Seputar Kota</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="/pariwisata">Pariwisata</a></li>
                        <li><a href="/transportasi">Transportasi</a></li>
                        <li><a href="/no_telp">No Telepon Penting</a></li>
                        <li><a href="/wilayah">Wilayah Administrasi</a></li>
                        <li><a href="/pendidikan">Pendidikan</a></li>
                        <li><a href="/kesehatan">Kesehatan</a></li>
                        <li><a href="/ekonomi">Ekonomi</a></li>
                    </ul>
                    <li class="dropdown"><a href="#"><span>Program Kerja</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                          <li><a href="#">Data Statistik</a></li>
                          <li><a href="#">ILPPD</a></li>
                          <li><a href="#">Survey Kepuasan Masyarakat</a></li>
                          <li><a href="#">Roadmap Reformasi Birokrasi Kota Balikpapan</a></li>
                          <li><a href="#">Transportasi Pengolahan Keuangan Daerah</a></li>
                          <li><a href="#">Laporan Kinerja Kota</a></li>
                          <li><a href="#">Status Lingkungan Hidup Daerah</a></li>
                          <li><a href="#">Perencanaan Pembangunan</a></li>
                          <li><a href="#">Aset</a></li>
                          <li><a href="#">Realisasi Anggaran</a></li>
                        </ul>
                        <li class="dropdown"><a href="#"><span>Produk Hukum</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                              <li><a href="#">Perda</a></li>
                              <li><a href="#">Perwali</a></li>
                            </ul>
          <li><a href="#team">Event Kota</a></li>
          <li><a href="blog.html">PPID</a></li>
          <li class="dropdown"><a href="#"><span>Masyarakat</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Buku Tamu</a></li>
              <li><a href="#">Whistleblower</a></li>
              <li><a href="#">Aduan Masyarakat</a></li>
              <li><a href="#">Kunjungan Kerja</a></li>
            </ul>
          <li><a href="#contact">Mail</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>

  <main class="main">
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
        font-size: 1.3rem;
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
        No Telephone Penting
    </div>
    </section>


<section>
    <style>
        .containerrr {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            font-family: 'Poppins', sans-serif;
        }
        .section-header {
            text-align: center;
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 20px;
            color: #034EA1;
        }
        .section-content {
            background-color: #fff;
            padding: 20px;
        }
        .section-content h2 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 10px;
            color: #034EA1;
        }
        .section-content p {
            font-size: 1rem;
            margin-bottom: 15px;
            color: #034EA1;
        }
        .section-content ol {
            margin-left: 20px;
            margin-bottom: 15px;
            color: #034EA1;
        }
        .section-content ul {
            margin-left: 20px;
            margin-bottom: 15px;
            color: #034EA1;
        }
        .section-content ol ul li {
            font-size: 1rem;
            margin-bottom: 8px;
            color: #034EA1;
        }
        @media (max-width: 768px) {
            .section-header {
                font-size: 1.8rem;
            }
            .section-content h2 {
                font-size: 1.4rem;
            }
            .section-content p, .section-content ol li {
                font-size: 0.95rem;
            }
        }
</style>
<section>
    <div class="containerrr">
        <div class="section-header">
            Potensi Ekonomi Kota Balikpapan
        </div>
        <div class="section-content">
            <h2>Peran dan Fungsi Kota</h2>
            <p>Berdasarkan RTRW Provinsi Kalimantan Timur, Kota Balikpapan diarahkan sebagai:</p>
            <ol>
                <li>Pusat pemerintahan kota.</li>
                <li>Pusat perdagangan regional.</li>
                <li>Pusat industri.</li>
                <li>Pusat transportasi udara internasional.</li>
                <li>Pusat pengolahan migas.</li>
            </ol>
            <p>Sebagai gerbang Indonesia Timur, Balikpapan memiliki Bandara Internasional, pelabuhan utama, dan fasilitas transportasi lengkap, menjadikannya simpul utama distribusi barang di Kalimantan Timur.</p>
        </div>

        <div class="section-content">
            <h2>Pengembangan Ruang Wilayah</h2>
            <p>Pengembangan Kota Balikpapan berfokus pada perdagangan, jasa, dan industri pengolahan. Kawasan pusat kota meliputi:</p>
            <ul>
                <li>Balikpapan Selatan: Kawasan kota lama.</li>
                <li>Karang Joang, Balikpapan Utara: Rencana pusat kota kedua.</li>
                <li>Teritip, Balikpapan Timur: Rencana pusat kota ketiga.</li>
            </ul>
        </div>

        <div class="section-content">
            <h2>Komoditas Unggulan</h2>
            <ul>
                <li>Sektor Pertanian: Pepaya mini, karet, salak, nanas.</li>
                <li>Industri Khas: Kerajinan manik-manik, batu permata, rumput laut.</li>
            </ul>
        </div>

        <div class="section-content">
            <h2>Potensi Perikanan</h2>
            <p>Wilayah pesisir memiliki sumber daya perikanan yang besar, termasuk budidaya tambak dan karamba. Potensi utama:</p>
            <ul>
                <li>Ikan kerapu (macan, sunu, lumpur).</li>
                <li>Udang, bandeng, kerang, dan rumput laut.</li>
            </ul>
            <p>Langkah strategis: mengalihkan fokus dari penangkapan ke budidaya untuk menjaga ekosistem dan meningkatkan kesejahteraan nelayan.</p>
        </div>

        <div class="section-content">
            <h2>Pengembangan Industri</h2>
            <p>Kota Balikpapan sebagai sentra industri difokuskan pada:</p>
            <ul>
                <li>Relokasi industri kecil/rumah tangga untuk mencegah dampak lingkungan.</li>
                <li>Kawasan Industri Kecil Somber (9 hektar) untuk 150-200 usaha kecil.</li>
            </ul>
        </div>

        <div class="section-content">
            <h2>Pariwisata</h2>
            <p>Sebagian besar potensi wisata Kota Balikpapan berasal dari wisata alam dan sejarah. Kota ini juga menjadi:</p>
            <ol>
                <li>Pusat Kegiatan Nasional (PKN): Pelayanan skala nasional untuk perdagangan, jasa, dan industri.</li>
                <li>Lokasi Pelabuhan Laut Internasional: Transit distribusi barang nasional dan internasional, didukung akses ALKI II.</li>
            </ol>
            <p>Sebagai gerbang Indonesia Timur, Balikpapan memiliki Bandara Internasional, pelabuhan utama, dan fasilitas transportasi lengkap, menjadikannya simpul utama distribusi barang di Kalimantan Timur.</p>
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
