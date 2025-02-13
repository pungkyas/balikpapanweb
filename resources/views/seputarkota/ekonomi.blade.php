@extends('partials.partial')
@section('home')
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
    /* deskripsi */
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
        /* balikpapan nyaman */
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
  <main class="main">
    <section>
    <div class="headerrr">
        Ekonomi
    </div>
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
        <div class="section-container">
            <img src="assets/img/balikpapan_nyaman.png" alt="Gambar di Pojok Kanan Bawah" />
         </div>
    </section>

    <section class="responsive-image-section">
</main>
    <div class="responsive-image-container">
        <!-- Gambar whistleblower -->
        <img
            src="assets/img/batik.png"
            alt="Whistleblower System"
            class="responsive-image">
    </div>
@endsection
