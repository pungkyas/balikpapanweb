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
        background: url('assets/img/apel.png') no-repeat center center/cover;
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
        margin-left: 180px;
        position: relative;
        max-width: 800px;
        z-index: 2;

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
<section class="berita-container">
    <div class="voverlay"></div>
    <div class="berita-content">
        <div class="breadcrumb">
            <a href="{{ url('/home')}}">Beranda</a> > <a href="/berita"><strong>Berita</strong></a>
        </div>
        <h1 class="berita-title">Wali Kota Balikpapan Sampaikan Ekspos Akhir Tahun 2024</h1>
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
            <img src="assets/img/apel.png" alt="Berita Utama">
            <h2>Wali Kota Balikpapan Sampaikan Ekspos Akhir Tahun 2024</h2>
            <p>BALIKPAPAN - Pemerintah Kota Balikpapan menggelar Ekspos Akhir Tahun Pemerintah Kota Balikpapan dan Silaturahmi Bersama Ketua RT dan LPM se-Balikpapan, Sabtu (20/12/2024) malam di Balikpapan Sport and Convention Center (BSCC) Dome. Ribuan Ketua RT dan LPM menyaksikan paparan dari Wali Kota Rahmad Mas'ud.

                Dalam pemaparannya, Wali Kota Rahmad Mas'ud menerangkan bahwa berdasarkan data Direktorat Jenderal Kependudukan dan Catatan Sipil (Dukcapil) pada semester I 2024 penduduk kota Balikpapan ada 746.804 jiwa. Ini naik 1,12 persen dibanding tahun sebelumnya.

                Indeks pembangunan manusia di kota Balikpapan mengalami peningkatan pada tahun 2024. Yakni 82,62 atau mengalami peningkatan 0,59 poin jika dibanding 2023. Angka ini berada di atas rata-rata Provinsi Kalimantan Timur maupun nasional.

                Selanjutnya tingkat pengangguran terbuka kota Balikpapan tahun 2024 sebesar 6,22 persen, angka ini mengalami peningkatan dibandingkan tahun 2023 yaitu 6,09 persen. Walau begitu presentasi penduduk miskin di kota Balikpapan tahun ini mengalami penurunan dari 2,31 persen di tahun 2023, menjadi 2,23 persen di 2024.

                "Sementara indeks gini yang menggambarkan tingkat ketimpangan pengeluaran penduduk mengalami penurunan jika dibanding Tahun 2022. Dari 0,334 menjadi 0,323 tahun 2024. Angka ini masih relatif terkendali dan berada di bawah indeks gini nasional," beber Wali Kota Rahmad Mas'ud.

                Perekonomian kota Balikpapan pada triwulan 3 tahun 2024 tumbuh sebesar 3,11 persen year on year (yoy). Balikpapan juga jadi penyumbang kontribusi tertinggi ke-3 pada pembentukan nilai tambah regional Provinsi Kalimantan Timur sebesar 18,09 persen.

                "Inflasi di kota Balikpapan pada tahun 2024 masih berada dalam rentang kendali atau target nasional 2,5 ± 1," sebutnya.

                sejauh ini beberapa upaya telah dilakukan oleh pemerintah kota dalam rangka pengendalian inflasi. Diantaranya penerapan urban farming, pemantauan harga stok barang kebutuhan pokok dan barang penting (bapokting), penyelenggaraan pasar murah, pengoperasian Kios Penyeimbang manuntung di Pasar Klandasan, penyaluran cadangan pangan pemerintah daerah, gerakan tangan murah 3 kali per pekan, juga panen bersama petani Milenial Green House.

                "Pemkot Balikpapan juga memberikan subsidi sejumlah komoditi dan melaksanakan berbagai kegiatan TPID atau tim pengendali inflasi daerah. Seperti high level meeting dan lainnya bersama para stakeholder. Selain itu juga bansos pengendalian dan penanganan dampak inflasi," tutur Rahmad.

                Anggaran pendapatan dan belanja daerah (APBD) kota Balikpapan cenderung mengalami peningkatan dari tahun 2020 hingga 2024. Pada APBD tahun 2024 setelah perubahan total, pendapatan daerah Kota Balikpapan sebesar Rp4 triliun. "Sedangkan belanja daerah tahun 2024 setelah perubahan dialokasikan sebesar Rp 4,545 triliun," beber wali kota.

                Untuk diketahui juga pengelolaan keuangan daerah kota Balikpapan menunjukkan trend positif berdasarkan hasil pengukuran IPKD atau indeks pengelolaan keuangan daerah oleh Kementerian Dalam Negeri Tahun 2022 hingga 2024. Pemerintah kota Balikpapan hingga kini telah 11 kali berturut-turut meraih predikat wajar tanpa pengecualian (WTP). "Skor ipkd meningkat menjadi 82,068 dengan kategori A Baik. Ini juga menempati peringkat 3 tertinggi nasional," sebutnya.

                Beberapa realisasi program prioritas Pemerintah kota Balikpapan tahun 2024 yakni penguatan birokrasi pemerintahan, peningkatan kualitas pelayanan kesehatan dan pendidikan, pengentasan kemiskinan, penyediaan air minum yang sehat dan merata, pengendalian banjir, peningkatan kualitas lingkungan hidup dan kondisi sosial yang nyaman, pengembangan Balikpapan sebagai Kota MICE dan wisata, pengembangan Balikpapan sebagai kota kreatif, juga privatalisasi Perusda.

                "Penguatan birokrasi kami realisasikan melalui pemenuhan kuantitas ASN maupun pengembangan kompetensi mereka. Sementara untuk peningkatan kualitas pelayanan pendidikan adalah dibangunnya SMP negeri di Kecamatan Balikpapan Timur dan Balikpapan Tengah yang akan menerima peserta didik pada tahun ajaran 2025-2026," urainya.

                Untuk pengentasan kemiskinan, pemerintah kota Balikpapan telah melakukan penguatan data kemiskinan dan memberikan bantuan sosial. Bantuan ini menyasar penerima 7.363 masyarakat rentan. Terdiri dari keluarga miskin ekstrem, pengemudi ojek online, petani maupun nelayan.

                "Tahun ini juga telah dilakukan job market fair sebanyak tiga kali, melakukan pelatihan tenaga kerja, serta pemagangan," kata wali kota.

                Wali kota juga menyampaikan apresiasinya atas pencapaian yang telah diterima pemerintah kota Balikpapan. Yang mana pada tahun 2024 ini sebanyak 24 penghargaan tingkat provinsi dan 27 penghargaan tingkat nasional. (diskominfo/cha)</p>
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
