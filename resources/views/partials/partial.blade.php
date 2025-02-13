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
            footer .iframe-container {
        position: relative;
        width: 100%; /* Lebar penuh sesuai kontainer induk */
        height: 50%;
        padding-top: 37%; /* Rasio aspek 16:9 (Tinggi = Lebar * 9/16) */
        overflow: hidden;
    }

    footer .iframe-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0;
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

        @media (max-width: 1119px) and (orientation: landscape) { /* Mobile Landscape */
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
        /* cari */
            .herro {
                position: relative;
                width: 100%;
                height: 100vh;
                overflow: hidden;
            }

            .herro-bg {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-size: cover;
                background-position: center;
                z-index: 1;
                animation: sliderr 5s infinite;
            }

            @keyframes sliderr {
                0% {
                    background-image: url('assets/img/slider1.jpg');
                }
                50% {
                    background-image: url('assets/img/balikpapan_malam.jpg');
                }
                100% {
                    background-image: url('assets/img/slider1.jpg');
                }
            }

            .herro-content {
                position: relative;
                z-index: 2;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 100%;
                padding: 0 20px;
                text-align: center;
            }

            .loggo {
                width: 250px;
                height: auto;
                margin-bottom: 2rem;
            }

            .herro-title {
                color: white;
                font-size: 2.5rem;
                font-weight: bold;
                text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
                margin: 0;
            }

            .search-bar {
                margin-top: 1.5rem;
                display: flex;
                justify-content: center;
                width: 100%;
            }

            .search-bar input {
                width: 80%;
                max-width: 500px;
                padding: 10px 15px;
                font-size: 1rem;
                border: 1px solid #ccc;
                border-radius: 5px 0 0 5px;
                outline: none;
                font-family: 'Poppins', sans-serif;
            }

            .search-bar button {
                padding: 10px 20px;
                font-size: 1rem;
                color: white;
                background-color: #034EA1;
                border: none;
                border-radius: 0 5px 5px 0;
                cursor: pointer;
                transition: background-color 0.3s;
            }

            .search-bar button:hover {
                background-color: #007bff;
            }

            .overlayy {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 1;
                background: rgba(0, 0, 0, 0.3);
            }

            /* Responsiveness */
            @media (max-width: 1024px) {
                .loggo {
                    width: 400px;
                }

                .herro-title {
                    font-size: 5rem;
                }
            }

            @media (max-width: 768px) {
                .loggo {
                    width: 300px;
                    margin-bottom: 1.5rem;
                }

                .herro-title {
                    font-size: 2rem;
                    padding: 0 10px;
                }

                .herro-content {
                    padding: 0 15px;
                }
            }

            @media (max-width: 480px) and (orientation: landscape) {
                .loggo {
                    width: 200px;
                    margin-bottom: 1rem;
                }

                .herro-title {
                    font-size: 1.5rem;
                    padding: 0 5px;
                }

                .search-bar input {
                    width: 70%;
                    font-size: 0.9rem;
                }

                .search-bar button {
                    font-size: 0.9rem;
                }
            }
            /* end cari */


            /* berita */
            .news-section-wrapper {
                    border: 3px solid #034EA1; /* Border biru di luar */
                    border-radius: 15px; /* Membuat sudut border lebih bulat */
                    padding: 20px; /* Padding di dalam border */
                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Shadow di belakang border */
                    margin: 20px; /* Margin untuk memberi jarak di sekitar section */
                    font-family: 'Poppins', sans-serif;
                }

                /* Style untuk section berita */
                .news-section {
                    padding: 10px 20px; /* Mengurangi padding atas agar lebih rapat ke atas */
                }

                /* List Berita Tengah */
                .news-list {
                    list-style-type: none;
                    padding: 0;
                    margin: 0;
                }

                /* Setiap item berita */
                .news-list li {
                    position: relative;
                    padding: 15px 10px 30px; /* Ruang bawah tambahan untuk tanggal */
                    border-bottom: 1px solid #ddd; /* Garis pembatas antar berita */
                    display: flex;
                    flex-direction: column; /* Mengatur tata letak judul dan tanggal secara vertikal */
                    justify-content: space-between;
                }

                /* Menghilangkan garis pembatas pada berita terakhir */
                .news-list li:last-child {
                    border-bottom: none;
                }

                /* Judul Berita */
                .news-list li strong {
                    font-size: 16px;
                    font-weight: bold;
                    color: #034EA1;
                }

                /* Tanggal Berita */
                .news-list li .date {
                    font-size: 12px;
                    color: #666;
                    position: absolute;
                    bottom: 10px; /* Posisi di bawah */
                    right: 10px; /* Posisi di kanan */
                }

                /* Judul Berita */
                .news-title {
                    font-size: 48px;
                    font-weight: bold;
                    color: #034EA1;
                }

                /* Garis Biru di bawah judul */
                .blue-line {
                    border-bottom: 3px solid #034EA1;
                    margin-left: 10px;
                    flex-grow: 1;
                    margin-right: 20px; /* Memberikan jarak di sisi kanan sebelum tombol */
                }

                .buttonnn {
        display: inline-block;
        border-radius: 70px;
        background: transparent;
        padding: 2px;
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .button-content {
        display: flex;
        align-items: center;
        gap: 8px;
        background: linear-gradient(90deg, #8BC43F 0%, #00CB44 100%);
        color: white;
        padding: 10px 25px;
        border-radius: 70px;
        font-weight: 600;
    }

    .buttonnn:hover .button-content {
        background: #034EA1;
        color: white;
    }
                /* Layout Row untuk mengatur kolom */
                .row {
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: space-between;
                    align-items: flex-start; /* Menjamin kolom-kolom seimbang secara vertikal */
                }

                /* Gambar Berita Kiri */
                .col-md-4 {
                    flex: 0 0 33.33%; /* Setiap kolom akan memiliki lebar sepertiga */
                    margin-bottom: 15px; /* Menambahkan jarak antar kolom */
                }

                .news-item {
                    position: relative;
                    margin-bottom: 15px;
                    display: flex;
                    flex-direction: column;
                }

                /* Gambar Berita */
                .news-item img {
                    width: 100%;
                    height: auto;
                    border-radius: 15px;
                }

                /* Overlay untuk Menampilkan Title dan Tanggal Berita */
                .overrlay {
                    position: absolute;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    background-color: rgba(0, 0, 0, 0.5);
                    color: white;
                    padding: 20px;
                    border-radius: 15px;
                    display: flex;
                    flex-direction: column;
                    justify-content: flex-end;
                }

                /* Judul Berita dalam Overlay */
                .overrlay h5 {
                    margin: 0;
                    font-size: 15px;
                    font-weight: bold;
                    color: white;
                }

                /* Tanggal Berita dalam Overlay */
                .overrlay .date {
                    font-size: 10px;
                    font-weight: normal;
                    margin-top: 5px;
                    color: white;
                }

                /* Membuat scroll panjang dengan tinggi yang sesuai */
                .scrollable-list {
                    max-height: 430px;
                    overflow-y: auto;
                    padding-right: 10px; /* Menambahkan jarak di sebelah kanan scroll */
                }

                .blue-box {
                    background-color: #034ea1; /* Background biru dengan kode warna */
                    color: white;
                    padding: 20px;
                    max-height: 430px;
                    overflow-y: auto;
                    border-radius: 8px;
                    padding-right: 10px; /* Menambahkan jarak di sebelah kanan scroll */
                }

                /* Gambar Bulat untuk Artikel */
                .article-img {
                    width: 25px;
                    height: 25px;
                    border-radius: 50%;
                    margin-right: 10px;
                }

                /* Daftar Artikel */
                .article-list {
                    list-style-type: none;
                    padding: 0;
                }

                .article-list li {
                    display: flex;
                    align-items: center;
                    margin-bottom: 15px;
                    padding-bottom: 10px;
                    border-bottom: 1px solid #ddd; /* Garis pemisah antar artikel */
                }

                .article-list li img {
                    width: 25px;
                    height: 25px;
                    border-radius: 50%;
                    object-fit: cover;
                    margin-right: 15px;
                }

                /* Responsif untuk tablet dan mobile */
                @media (max-width: 768px) {
                    .news-title {
                        font-size: 15px;
                        margin-left: 15px; /* Memberikan jarak kiri pada judul */
                    }

                    .blue-line {
                        display: none;
                    }

                    .buttonnn {
                        width: 100%;
                        justify-content: center;
                        margin-top: 10px;
                        padding: 10px 15px; /* Mengurangi padding pada mobile */
                    }

                    .col-md-4 {
                        flex: 0 0 100%; /* Memastikan kolom mengambil 100% lebar pada perangkat kecil */
                        margin-bottom: 20px; /* Memberikan jarak antar kolom */
                    }

                    /* Memastikan scroll panjang pada perangkat kecil */
                    .scrollable-list {
                        max-height: 350px;
                    }

                    .blue-box {
                        max-height: 350px;
                    }

                    .news-section {
                        padding-top: 0; /* Mengurangi jarak atas pada mobile */
                    }
                }

                @media (max-width: 576px) {
                    .buttonnn {
                        font-size: 14px;
                        padding: 8px 15px;
                    }

                    .news-item {
                        margin-bottom: 15px;
                    }

                    .blue-box {
                        max-height: 250px;
                    }
                }
                 /* walikota */
                 body {
                        font-family: 'Poppins', sans-serif;
                        margin: 0;
                        padding: 0;
                        background-color: white;
                    }

                    .flex-container {
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                        padding: 30px 0;
                        background-color: white;
                        flex-wrap: wrap;
                    }

                    .left-section {
                        position: relative;
                        width: 300px;
                        height: 320px;
                        text-align: center;
                        margin-bottom: 20px;
                    }

                    .background-circle {
                        width: 260px;
                        height: 250px;
                        position: absolute;
                        top: 50px;
                        left: 20px;
                        background: rgba(3, 78, 161, 0.12);
                        border-radius: 9999px;
                    }

                    .profile-img {
                        width: 90%;
                        height: auto;
                        border-radius: 9999px;
                        position: relative;
                    }

                    .bottom-banner {
                      position: absolute;
                  bottom: 0;
                  left: 50%;
                  transform: translateX(-50%);
                  width: 85%;
                  height: auto;
                  background: #034EA1;
                  border-radius: 70px;
                  display: flex;
                  flex-direction: column;
                  justify-content: center;
                  align-items: center;
                  padding: 10px 20px; /* Tambahkan padding untuk ruang */
                  text-align: center;
              }

                    .name {
                      font-size: 14px;
                  font-weight: 700; /* Bold untuk nama */
                  color: white;
                  margin-bottom: 5px;
                  font-family: 'Poppins', sans-serif;
                    }

                    .title {
                      font-size: 14px;
                  font-weight: 300; /* Tipis untuk jabatan */
                  color: white;
                  margin: 0;
                  font-family: 'Poppins', sans-serif;
                    }

                    .right-section {
                        flex: 1;
                        padding: 0 20px;
                    }

                    .title-large {
                        color: #034EA1;
                        font-size: 42px;
                        font-weight: 700;
                        font-family: 'Poppins', sans-serif;
                    }

                    .description {
                        color: #034EA1;
                        font-size: 18px;
                        line-height: 1.5;
                        text-align: justify;
                        font-family: 'Poppins', sans-serif;
                    }

                    .image-section {
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        padding: 20px;
                        max-width: 300px;
                    }

                    .city-img {
                        width: 100%;
                        height: auto;
                        object-fit: cover;
                        border-radius: 8px;
                    }

                    .button-container {
                  position: relative;
                  text-align: right;
                  margin-top: 20px;
              }

              .button {
                  border-radius: 70px;
                  padding: 12px 30px;
                  display: inline-flex;
                  align-items: center;
                  cursor: pointer;
                  transition: transform 0.2s ease;

              }

              .button span {
                margin top: 2px;
                background: linear-gradient(90deg, #8BC43F 0%, #00CB44 100%);
                color: white;
                padding: 10px 20px;
                border-radius: 25px;
                text-decoration: none;
                display: flex;
                align-items: center;
                gap: 5px;
                font-weight: bold;
                white-space: nowrap;
                transition: color 0.3s ease;
                border: none;
                cursor: pointer;
            }

                .button:hover span {
                background: #034EA1;
                color: white; /* Warna biru untuk teks saat hover */
                }

                    /* Responsive Styles */
                    @media (max-width: 1024px) { /* Tablet */
                        .flex-container {
                            flex-direction: column;
                            padding: 20px;
                        }

                        .image-section {
                            order: 1;
                            max-width: 100%;
                        }

                        .title-large {
                            font-size: 36px;
                        }

                        .description {
                            font-size: 16px;
                        }

                        .button-container {
                            margin-top: 30px;
                        }

                        .city-img {
                            width: 80%;
                            margin: 0 auto;
                        }

                        .bottom-banner {
                      width: 90%;
                  }

                .name {
                      font-size: 13px;
                  }

                  .title {
                      font-size: 12px;
                  }

                        .button {
                      padding: 10px 20px;
                      font-size: 16px;
                  }
                    }

                    @media (max-width: 768px) { /* Mobile */
                        .city-img {
                            display: none; /* Hide image on smaller screens */
                        }

                        .title-large {
                            font-size: 28px;

                        }

                        .description {
                            font-size: 14px;
                        }

                        .button {
                      padding: 8px 16px;
                      font-size: 14px;
                  }



                  .arrow-icon {
                      width: 12px;
                      height: 12px;
                  }

                  .bottom-banner {
                      width: 95%;
                  }

                  .name {
                      font-size: 13px;
                  }

                  .title {
                      font-size: 12px;

                  }

                  .button-container {
                      text-align: center; /* Center-align button on smaller screens */
                      margin-top: 10px;
                  }
                    }
                    /* end walikota */

                    /* iklan */
                    * {
                box-sizing: border-box;
                margin: 0;
                padding: 0;
            }
            .slideshow-wrapper {
                max-width: 100%;
                position: relative;
                margin: auto;
                overflow: hidden;
            }
            .slideshow-content {
                display: flex;
                transition: transform 1s ease-in-out;
            }
            .slide-item {
                min-width: 100%;
                text-align: center;
            }
            .slide-item img {
                width: 90%;
                height: auto;
            }
            .navigation-dots {
                text-align: center;
                padding: 10px;
            }
            .nav-dot {
                height: 12px;
                width: 12px;
                margin: 0 5px;
                background-color: #bbb;
                border-radius: 50%;
                display: inline-block;
                cursor: pointer;
            }
            .nav-dot:hover, .active-dot {
                background-color: #717171;
            }

            /* Navigation buttons */
            .btn-prev, .btn-next {
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                background-color: rgba(0, 0, 0, 0.5);
                color: white;
                border: none;
                padding: 10px;
                cursor: pointer;
                display: none;
                z-index: 10;
            }
            .btn-prev { left: 10px; }
            .btn-next { right: 10px; }

            .slideshow-wrapper:hover .btn-prev,
            .slideshow-wrapper:hover .btn-next {
                display: block;
            }

            /* Responsive adjustments */
            @media screen and (max-width: 768px) {
                .slideshow-wrapper {
                    max-width: 90%;
                }
                .nav-dot {
                    height: 10px;
                    width: 10px;
                }
            }

            @media screen and (max-width: 480px) {
                .slideshow-wrapper {
                    max-width: 100%;
                }
                .nav-dot {
                    height: 8px;
                    width: 8px;
                }
            }
            /* end iklan */

            /* event kota */
            .event-kota h2 {
                color: #034EA1;
            }

            .carousel-item img {
        width: 100%;          /* Pastikan gambar memenuhi lebar container */
        height: 600px;        /* Tetapkan tinggi gambar agar seragam */
        object-fit: cover;    /* Potong gambar agar tetap proporsional */
        object-position: center; /* Fokus di tengah gambar */
    }


            .overlay {
                position: absolute;
                bottom: 0;
                left: 0;
                width: 100%;
                height: 35%; /* Tinggi overlay untuk laptop */
                background: rgba(0, 0, 0, 0.5);
                color: white;
                display: flex;
                justify-content: center;
                align-items: flex-start;
                padding: 15px;
                box-sizing: border-box;
            }

            .overlay-content {
                text-align: left; /* Pastikan semua teks rata kiri */
            }

            .overlay-content .date {
                font-size: 16px; /* Ukuran tetap untuk laptop */
                margin: 0;
            }

            .overlay-content .title {
                font-size: 40px; /* Ukuran tetap untuk laptop */
                font-weight: bold;
                margin-top: 5px;
            }

            /* Responsive Adjustments */
            @media (max-width: 1200px) { /* Laptop kecil */
                .carousel-item img {
                    height: 400px;
                }

                .overlay {
                    height: 30%;
                }

                .overlay-content .date {
                    font-size: 15px; /* Sedikit lebih kecil */
                }

                .overlay-content .title {
                    font-size: 28px; /* Sedikit lebih kecil */
                }
            }

            @media (max-width: 768px) { /* Tablet */
                .carousel-item img {
                    height: 300px;
                }

                .overlay {
                    height: 40%; /* Tinggi lebih besar untuk tablet */
                }

                .overlay-content .date {
                    font-size: 14px; /* Ukuran lebih kecil untuk tablet */
                }

                .overlay-content .title {
                    font-size: 25px; /* Ukuran lebih kecil untuk tablet */
                }
            }

            @media (max-width: 480px) { /* Mobile */
                .carousel-item img {
                    height: 200px;
                }

                .overlay {
                    height: 50%; /* Tinggi penuh untuk mobile */
                }

                .overlay-content .date {
                    font-size: 12px; /* Ukuran lebih kecil untuk mobile */
                }

                .overlay-content .title {
                    font-size: 20px; /* Ukuran lebih kecil untuk mobile */
                }
            }
            /* end eventkota */

            /* layanan */
            .container-layanan {
                    width: 90%;
                    max-width: 1280px;
                    margin: 50px auto;
                    text-align: left;
                }

                .title-layanan {
                    font-size: 42px;
                    font-weight: 700;
                    margin-bottom: 10px;
                    font-family: 'Poppins', sans-serif;
                    color: #034ea1;
                }

                .subtitle-layanan {
                    font-size: 18px;
                    font-weight: 300;
                    margin-bottom: 30px;
                    font-family: 'Poppins', sans-serif;
                    color: #034EA1;
                }

                .services-layanan {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 20px;
            }

            .services-column {
                display: flex;
                flex-direction: column;
                gap: 20px;
            }


                .service-card-layanan {
                    display: flex;
                    align-items: center;
                    background: #fff;
                    border-radius: 12px;
                    padding: 20px;
                    box-shadow: 0 4px 8px#034EA1;
                    transition: transform 0.3s ease, box-shadow 0.3s ease;
                    cursor: pointer;
                }

                .service-card-layanan:hover {
                    transform: scale(1.05);
                    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
                }

                .service-card-layanan img {
                    width: 80px;
                    height: 80px;
                    margin-right: 20px;
                    border-radius: 10px;
                    transition: transform 0.3s ease;
                }

                .text-layanan h2 {
                    font-size: 20px;
                    font-weight: 600;
                    margin: 0 0 10px 0;
                    font-family: 'Poppins', sans-serif;
                    color: #034EA1;
                    text-align: justify;
                }

                .text-layanan p {
                    font-size: 13px;
                    font-weight: 300;
                    color: #034EA1;
                    margin: 0;
                    font-family: 'Poppins', sans-serif;
                }

                /* Tombol Lihat Semua */

                .btn-container {
                grid-column: 1 / -1;
                text-align: center;
                margin-top: 30px;
            }

            .btn-layanan {
        display: inline-flex; /* Agar ukuran sesuai dengan kontennya */
        border-radius: 70px;
        background: transparent;
        padding: 2px;
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
        text-decoration: none;
        margin: 20px auto;
        justify-content: center;
        pointer-events: none; /* Mencegah parent menerima hover */
    }

    .btn-layanan-content {
        display: flex;
        align-items: center;
        gap: 8px;
        background: linear-gradient(90deg, #8BC43F 0%, #00CB44 100%);
        color: white;
        padding: 10px 25px;
        border-radius: 70px;
        font-weight: 600;
        font-family: 'Poppins', sans-serif;
        pointer-events: auto; /* Hanya bagian ini yang bisa di-hover */
    }


                .btn-layanan:hover .btn-layanan-content {
                    background: #034EA1;
                    color: white;
                }

                @media (max-width: 1024px) {
                .services-layanan {
                    grid-template-columns: 1fr;
                }

                .services-column {
                    gap: 15px;
                }
            }

                @media (max-width: 768px) {
                    .title-layanan {
                    font-size: 32px;
                }

                    .subtitle-layanan {
                        font-size: 16px;
                        text-align: center;
                    }

                    .service-card-layanan {
                    flex-direction: row;
                    padding: 15px;
                }

                .service-card-layanan img {
                    margin-bottom: 0;
                    margin-right: 15px;
                }
                    .text-layanan h2 {
                        text-align: center;
                    }
                }
                /* endlayanan */

                /* info penting */
                    .slider-custom {
                        width: 100%;
                        max-width: 1400px;
                        position: relative;
                        overflow: hidden;
                        margin: auto;
                    }
                    .slider-header {
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                        margin-bottom: 15px;
                        padding: 0 10px;
                    }
                    .slider-header h2 {
                        font-size: 3em;
                        color: #034EA1;
                        font-family: 'Poppins', sans-serif;
                        font-weight: bold;

                    }

                    /* CSS Unik untuk tombol baru */
                    .button-container-custom {
                        position: relative;
                        text-align: right;
                        margin-top: 10px;
                    }

                    .button-custom {
                  border-radius: 70px;
                  padding: 12px 30px;
                  display: inline-flex;
                  align-items: center;
                  cursor: pointer;
                  transition: transform 0.2s ease;

              }

              .button-custom span {
                margin top: 2px;
                background: linear-gradient(90deg, #8BC43F 0%, #00CB44 100%);
                color: white;
                padding: 10px 20px;
                border-radius: 25px;
                text-decoration: none;
                display: flex;
                align-items: center;
                gap: 5px;
                font-weight: bold;
                white-space: nowrap;
                transition: color 0.3s ease;
                border: none;
                cursor: pointer;
            }

                .button-custom:hover span {
                background: #034EA1;
                color: white; /* Warna biru untuk teks saat hover */
                }

                    .slides-custom {
                        display: flex;
                        gap: 15px;
                        transition: transform 0.5s ease-in-out;
                        padding: 10px;
                    }
                    .slide-custom {
                        flex: 0 0 25%;
                        box-sizing: border-box;
                        background: #f9f9f9;
                        border: 1px solid #ccc;
                        border-radius: 10px;
                        padding: 10px;
                        text-align: center;
                        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                        position: relative;
                    }
                    .slide-custom img {
                        width: 80%;
                        height: auto;
                        margin-bottom: 10px;
                    }
                    .slide-custom h3 {
                        font-size: 1em;
                        margin-bottom: 5px;
                        font-family: 'Poppins', sans-serif;
                        text-align: justify;
                    }
                    .slide-custom p {
                        font-size: 0.85em;
                        color: #555;
                        margin-top: 10px;
                        font-family: 'Poppins', sans-serif;
                        text-align: justify;

                    }
                    .slide-custom button {
                        background-color: #034ea1;
                        color: #fff;
                        border: none;
                        padding: 8px 10px;
                        border-radius: 5px;
                        cursor: pointer;
                        font-size: 0.85em;
                    }
                    .slide-custom button:hover {
                        background-color: #0056b3;
                    }
                    .controls-custom {
                        position: absolute;
                        top: 50%;
                        width: 100%;
                        display: flex;
                        justify-content: space-between;
                        transform: translateY(-50%);
                        padding: 0 15px;
                        opacity: 0;
                        transition: opacity 0.3s ease;
                    }
                    .slider-custom:hover .controls-custom {
                        opacity: 1;
                    }
                    .control-custom {
                        background: rgba(0, 0, 0, 0.3);
                        color: #fff;
                        border: none;
                        padding: 10px;
                        border-radius: 50%;
                        cursor: pointer;
                        font-size: 1.2em;
                    }
                    .control-custom:hover {
                        background: rgba(0, 0, 0, 0.6);
                    }
                    .indicators-custom {
                        display: flex;
                        justify-content: center;
                        margin-top: 15px;
                    }
                    .indicator-custom {
                        width: 12px;
                        height: 12px;
                        background-color: #ddd;
                        border-radius: 50%;
                        margin: 0 5px;
                        cursor: pointer;
                    }
                    .indicator-custom.active {
                        background-color: #034EA1;
                    }

                    .blue-line {
                    border-bottom: 3px solid #034EA1;
                    margin-left: 10px;
                    flex-grow: 1;
                    margin-right: 20px; /* Memberikan jarak di sisi kanan sebelum tombol */

                    }

                    /* Responsive Styles */
                    @media (max-width: 1024px) {
                    .slide-custom {
                    flex: 0 0 25%;
                    }
                    .slider-header h2 {
                    font-size: 1.8em;
                    }
                    }
                    @media (max-width: 1022px) {
                    .slide-custom {
                    flex: 0 0 50%;
                    margin-bottom: 10px;
                    }
                    .slider-header {
                    flex-direction: column;
                    text-align: center;
                    }
                    .button-container-custom {
                    margin-top: 20px;
                    position: relative;
                    text-align: center;
                    }
                    }

                    @media (max-width: 764px) {
                    .slide-custom {
                    flex: 0 0 100%;
                    margin-bottom: 10px;
                    }
                    .slider-header {
                    flex-direction: column;
                    text-align: center;
                    }
                    .button-container-custom {
                    margin-top: 20px;
                    position: relative;
                    text-align: center;
                    }
                    }
                    /* end info penting */




</style>
</head>

<body class="index-page">



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

@yield('home')

</main>

    <div class="blue-section">
        <img src="assets/img/balikpapan_putih.png" alt="Hero Logo" class="logo-hero">
        <div class="logo-row">
            <a href="https://datin.balikpapan.go.id/"><img src="assets/img/sikopin.png" alt="Logo 1">
            <a href="http://sipembelanja.balikpapan.go.id/"><img src="assets/img/shope.png" alt="Logo 2">
            <a href="https://elhkpn.kpk.go.id/portal/user/pengumuman_lhkpn/UmtGRlZsVk9Vbkp2ZURSNVpHUjRhbFF5YzJSVk9EZEJXVVpQSzJoNVZFUmFMMGM0TUZrd2NFbFRjMll3Y25kckt6STRhR2xuUm5KS1pUUlJUSEJOVkE9PQ=="><img src="assets/img/lhkpn.png" alt="Logo 3">
            <a href="https://www.lapor.go.id/"><img src="assets/img/lapor.png" alt="Logo 4">
            <a href="https://datin.balikpapan.go.id/"><img src="assets/img/anak.png" alt="Logo 5">
            <a href="https://web.balikpapan.go.id/wbs"><img src="assets/img/pluit.png" alt="Logo 6"></a>
        </div>
        <div class="white-line"></div>
    </div>
    <footer>
        <style>


        </style>
        <div class="container">
            <div class="row">
                <!-- Left Section -->
                <div class="col-md-6">
                    <h5>Lokasi</h5>
                    <div class="divider"></div>
                    <div class="iframe-container"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7977.66972300458!2d116.8307189!3d-1.2721786!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df1473bb9404897%3A0x94d96108f98b652c!2sBalikpapan%20Mayor&#39;s%20Office!5e0!3m2!1sen!2sid!4v1739180593156!5m2!1sen!2sid"allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>

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

   let activeIndex = 0;
            const slidesContainer = document.querySelector('.slideshow-content');
            const dots = document.getElementsByClassName("nav-dot");
            const totalItems = document.getElementsByClassName("slide-item").length;

            function autoSlide() {
                activeIndex++;
                if (activeIndex >= totalItems) {
                    activeIndex = 0;
                }
                updateSlide();
                setTimeout(autoSlide, 5000);
            }

            function updateSlide() {
                slidesContainer.style.transform = `translateX(-${activeIndex * 100}%)`;
                for (let i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active-dot", "");
                }
                dots[activeIndex].className += " active-dot";
            }

            function selectSlide(n) {
                activeIndex = n - 1;
                updateSlide();
            }

            function switchSlide(n) {
                activeIndex += n;
                if (activeIndex >= totalItems) {
                    activeIndex = 0;
                } else if (activeIndex < 0) {
                    activeIndex = totalItems - 1;
                }
                updateSlide();
            }

            autoSlide();

            // info penting
            const slidesCustom = document.querySelector('.slides-custom');
                const slideCustom = document.querySelectorAll('.slide-custom');
                const prevCustom = document.querySelector('.prev');
                const nextCustom = document.querySelector('.next');
                const indicatorsCustom = document.querySelectorAll('.indicator-custom');
                let currentIndexCustom = 0;

                function updateSlideCustom(position) {
                    slidesCustom.style.transform = `translateX(${-position * 100}%)`;
                    indicatorsCustom.forEach((indicator, index) => {
                        indicator.classList.toggle('active', index === position);
                    });
                }

                nextCustom.addEventListener('click', () => {
                    currentIndexCustom = (currentIndexCustom + 1) % 2; // Hanya ada 2 grup item
                    updateSlideCustom(currentIndexCustom);
                });

                prevCustom.addEventListener('click', () => {
                    currentIndexCustom = (currentIndexCustom - 1 + 2) % 2; // Hanya ada 2 grup item
                    updateSlideCustom(currentIndexCustom);
                });

                indicatorsCustom.forEach((indicator, index) => {
                    indicator.addEventListener('click', () => {
                        currentIndexCustom = index;
                        updateSlideCustom(currentIndexCustom);
                    });
                });

                setInterval(() => {
                    currentIndexCustom = (currentIndexCustom + 1) % 2;
                    updateSlideCustom(currentIndexCustom);
                }, 5000);

</script>

</body>

</html>
