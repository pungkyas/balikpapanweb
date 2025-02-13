@extends('partials.partial')
@section('home')
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }


    .berita-container {
        position: relative;
        width: 100%;
        height: 60vh;
        background: url('assets/img/ibu ibu.png') no-repeat center center/cover;
        display: flex;
        align-items: center;
        color: white;
        padding: 20px;
    }

    .voverlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
    }

    .berita-content {
        position: relative;
        max-width: 800px;
        z-index: 2;
        margin-left: 12%;

    }

    .breadcrumb {
        font-size: 18px;
        margin-bottom: 10px;
        margin-top: 50px;
    }

    .breadcrumb a {
        color: #f9f9f9;
        text-decoration: none;
    }

    .breadcrumb a:hover {
        text-decoration: underline;
    }

    .berita-title {
        font-size: 36px;
        font-weight: bold;
        margin-bottom: 10px;
        color: #ffffff;
    }

    .berita-meta {
        font-size: 14px;
        opacity: 0.8;
    }

    .stats {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-top: 10px;
    }

    .stats span {
        display: flex;
        align-items: center;
        font-size: 14px;
    }

    .stats i {
        margin-right: 5px;
    }

    .btn-share {
        margin-top: 15px;
        padding: 10px 15px;
        background-color: #28a745;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        display: inline-block;
        font-size: 14px;
    }

    .btn-share:hover {
        background-color: #218838;
    }

    /* Responsiveness */
    @media (max-width: 768px){
        .berita-title {
            font-size: 20px;
            text-align: left;

        }

        .berita-container {
            height: 45vh;
            padding: 10px;
            text-align: left;
            margin-top: 20px;
        }

        .berita-content {
            text-align: left;
            margin-right: 12%;

        }

        .stats {
            align-items: left;
        }
    }

    @media (max-width: 480px) {
        .berita-title {
            font-size: 15px;
            text-align: left;

        }

        .berita-container {
            height: 45vh;
            padding: 10px;
            text-align: left;
            margin-top: 20px;
        }

        .berita-content {
            text-align: left;
            margin-right: 12%;

        }

        .stats {
            align-items: left;
        }
    }

    body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
    /* Updated Main Content */
    .containerr {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1fr 300px;
        gap: 40px;
        padding: 0 20px;
    }

    .content {
        background: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 5px 25px rgba(0,0,0,0.05);
    }

    .content img {
        width: 100%;
        height: 400px;
        object-fit: cover;
        border-radius: 8px;
        margin-bottom: 30px;
    }

    .content h2 {
        color: #034EA1;
        margin-bottom: 25px;
        font-size: 2rem;
        font-weight: bold;
    }

    .content p {
        font-family: 'Poppins', sans-serif;
        text-align: justify;
        line-height: 1.8;
        color: #555;
        margin-bottom: 20px;
        font-size: 16px;
    }

        .related-news {
            flex: 1;
            position: sticky;
            top: 120px;
            height: fit-content;
            background: white;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .related-news h3 {
            margin-bottom: 10px;
            border-bottom: 2px solid #034EA1;
            padding-bottom: 5px;
        }
        .news-item {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 15px;
        }
        .news-item img {
            width: 60px;
            height: 60px;
            border-radius: 5px;
            object-fit: cover;
        }
        .news-item a {
            text-decoration: none;
            color: #333;
            font-size: 14px;
            font-weight: bold;
        }
        @media (max-width: 768px) {
            .containerr {
                display: flex;
                flex-direction: column;
            }

            .content {
                padding: 20px;
            }

            .content img {
                height: 250px;
            }

            .content h2 {
                font-size: 1.5rem;
            }

            .content p {
                font-size: 14px;
            }

            .related-news {
                order: 2;
                margin-top: 20px;
                position: static;
                padding: 10px;
            }

            .news-item img {
                width: 50px;
                height: 50px;
            }

            .news-item a {
                font-size: 12px;
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
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
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
<section class="berita-container">
    <div class="voverlay"></div>
    <div class="berita-content">
        <div class="breadcrumb">
            <a href="{{ url('/home')}}">Beranda</a> > <a href="/berita"><strong>Berita</strong></a>
        </div>
        <h1 class="berita-title">HUT ke-25 DWP Kota Balikpapan, Jadi Momen Refleksi Perjalanan Organisasi</h1>
        <p class="berita-meta">    <i class="bi bi-calendar-event"></i> Senin, 30 Desember 2024 |
            <i class="bi bi-person"></i> Penulis: Admin</p>

        <div class="stats">
            <span>👀 294 kali</span>
            <span>🔄 0 kali dibagikan</span>
        </div>

        <a href="#" class="btn-share">Bagikan Berita</a>
    </div>
</section>


<section>
    <div class="containerr">
        <div class="content">
            <img src="assets/img/ibu ibu.png" alt="Berita Utama">
            <h2>Masyarakat Balikpapan Diimbau Optimalkan Kerja Bakti, Cegah DPD dan Leptospirosis</h2>
            <p>BALIKPAPAN - Seluruh Kecamatan di Kota Balikpapan serentak melaksanakan kerja bakti massal pada Sabtu (21/12/2024) di masing-masing wilayahnya. Pada kegiatan ini juga dilakukan video conference dari masing-masing kecamatan yang dipimpin Kepala Dinas Kesehatan (Dinkes) Kota Balikpapan, Alwiati yany juga mewakili Ketua TP PKK Nurlena Rahmad Mas'ud.

                Alwiati membuka kegiatan didampingi oleh Camat Balikpapan Kota, Roshin Suparlan di Aula Kecamatan. Ia menyampaikan, kerja bakti massal ini adalah upaya pemberantasan sarang nyamuk yang melibatkan seluruh masyarakat.

                "Tren DBD (demam berdarah dengue) mengalami peningkatan dari tahun 2023 sebesar 1.019 jiwa. Hingga minggu kedua Desember ini sudah ada 1.465 kasus. Peningkatan signifikan ini disebabkan curah hujan tinggi pada Desember ini," sebut Alwiati.

                Pemberantasan sarang nyamuk ini sebagai upaya pencegahan terjadinya penambahan kasus lagi. Ia oun menyampaikan pesan Ketua TP PKK agar seluruh tim penggerak PKK dan warga bersama mencegah terjadinya kasus DBD melalui kegiatan semacam ini.

                "Silakan melakukan kerja bakti di lingkungan masing-masing dan menerapkan 3M plus seperti memelihara ikan pemakan jentik nyamuk, memasang kelambu air, periksa jentik dan lainnya," ungkapnya.

                Alwiati juga menambahkan, masyarakat diharapkan mewaspadai keberadaan tikus yang merajalela di musim penghujan. Karena tikus-tikus ini bisa masuk ke dalam rumah dan menjadi penyebab penyakit Leptospirosis.

                "Karena beberapa tikus ini setelah dilakukan pemeriksaan terbukti positif Leptospirosis. Sudah dilakukan pemeriksaan pada beberapa sampel tikus. Jangan sampai ini menimbulkan kematian pada anak-anak karena bermain di lantai yang ada bekas kencing tikus," ungkapnya.

                Selain melakukan upaya pemberantasan sarang nyamuk, masyarakat juga diminta waspada akan penyakit yang bisa ditularkan oleh hewan pengerat ini.

                Sementara, Camat Balikpapan Kota, Roshin Suparlan mengatakan, kerja bakti semacam ini sebenarnya sudah sering dilakukan oleh masyarakat Balikpapan Kota. Apalagi dengan adanya musim penghujan, kerja bakti ditingkatkan untuk mencegah DBD.

                "Maka upaya kami juga meningkatkan program Jumantik, memberikan kelambu air. Kami akan distribusikan kelambu air maupun bantuan abate dari Dinkes Kota. Juga akan kami maksimalkan pemberantasan sarang nyamuk mulai dari pemberian kelambu air dan abate," tandasnya. (diskominfo/cha)</p>
        </div>
        <div class="related-news">
            <h3>Berita Terkait</h3>
            <div class="news-item">
                <a href="/detail_berita_1"><img src="assets/img/upacara.png" alt="">
                Apel Terakhir 2024, Sekda sampaikan Evaluasi untuk ASN di Lingkungan Pemkot Balikpapan</a>
            </div>
            <div class="news-item">
                <a href="/detail_berita"><img src="assets/img/apel.png" alt="">
                Wali Kota Balikpapan Sampaikan Ekspos Akhir Tahun 2024</a>
            </div>
            <div class="news-item">
                <a href="/detail_berita_2"><img src="assets/img/hut dwp.jpg" alt="">
                HUT ke-25 DWP Kota Balikpapan, Jadi Momen Refleksi Perjalanan Organisasi</a>
            </div>
            <div class="news-item">
                <a href="/detail_berita_3"><img src="assets/img/ibu ibu.png" alt="">
                Masyarakat Balikpapan Diimbau Optimalkan Kerja Bakti, Cegah DPD dan Leptospirosis</a>
            </div>
        </div>
    </div>
</body>
</section>
<section>
        <div class="section-container">
            <img src="assets/img/balikpapan_nyaman.png" alt="Gambar di Pojok Kanan Bawah" />
         </div>
    </section>
<section>
    <div class="responsive-image-section">
</main>
    <div class="responsive-image-container">
        <!-- Gambar whistleblower -->
        <img
            src="assets/img/batik.png"
            alt="Whistleblower System"
            class="responsive-image">
    </div>
