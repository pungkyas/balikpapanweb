@extends('partials.partial')
@section('home')
{{-- judul --}}
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
    .awards-section {
    max-width: 1000px;
    margin: 20px auto;
    padding: 20px;
    font-family: 'Poppins', sans-serif;
    line-height: 1.6;
}

/* Styling untuk tahun dan jumlah penghargaan */
.award h2 {
    font-weight: bold;
    font-size: 1.8rem;
    color: #034EA1;
    margin-bottom: 10px;
}

/* Styling untuk daftar penghargaan */
.award ol {
    padding-left: 20px;
    margin-bottom: 20px;
}

.award li {
    font-size: 1.2rem;
    margin-bottom: 8px;
    color: #034EA1
}


/* Responsif untuk layar kecil */
@media (max-width: 768px) {
    .awards-section {
        padding: 15px;
    }

    .award h2 {
        font-size: 1.5rem;
    }

    .award li {
        font-size: 1rem;
    }

    .award li.small {
        font-size: 0.9rem;
    }
}
/* balikpapan nyaman */
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
        /* batik */
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
        Penghargaan
    </div>
<section class="awards-section">
    <div class="award">
        <h2>2022 (44 Penghargaan)</h2>
        <ol>
            <li>Camat Terbaik SeKalimantan Timur - Pemerintah Provinsi Kalimantan Timur</li>
            <li>Panji Keberhasilan Bidang Daya Saing Daerah - Pemerintah Provinsi Kalimantan Timur</li>
            <li>Panji Keberhasilan Bidang Hukum dan Hak Asasi Manusia - Pemerintah Provinsi Kalimantan Timur</li>
            <li>Panji Keberhasilan Bidang Keolahragaan - Pemerintah Provinsi Kalimantan Timur</li>
            <li>Panji Keberhasilan Bidang Koperasi dan Usaha Kecil dan Menengah - Pemerintah Provinsi Kalimantan Timur</li>
            <li>Panji Keberhasilan Bidang Lingkungan Hidup - Pemerintah Provinsi Kalimantan Timur</li>
            <li>Panji Keberhasilan Bidang Pelayanan Administrasi Terpadu Kecamatan (PATEN) - Pemerintah Provinsi Kalimantan Timur</li>
            <li>Panji Keberhasilan Bidang Pelayanan Publik Kategori Kota - Pemerintah Provinsi Kalimantan Timur</li>
            <li>Panji Keberhasilan Bidang Pelayanan Terpadu Satu Pintu - Pemerintah Provinsi Kalimantan Timur
            <li>Panji Keberhasilan Bidang Pengelolaan Keuangan Daerah - Pemerintah Provinsi Kalimantan Timur</li>
            <li>Panji Keberhasilan Bidang Pengembangan Kompetensi Sumber Daya Manusia Terintegrasi di Provinsi Kalimantan Timur - Pemerintah Provinsi Kalimantan Timur</li>
            <li>Panji Keberhasilan Bidang Penyelenggara Penanggulangan Bencana Daerah - Pemerintah Provinsi Kalimantan Timur</li>
            <li>Panji Keberhasilan Bidang Penyelenggaraan Administrasi Kependudukan dan Catatan Sipil - Pemerintah Provinsi Kalimantan Timur</li>
            <li>Panji Keberhasilan Bidang Sektor Industri - Pemerintah Provinsi Kalimantan Timur</li>
            <li>Panji Keberhasilan Bidang Tim Penggerak PKK Berprestasi Kategori Kota - Pemerintah Provinsi Kalimantan Timur</li>
            <li>Panji Keberhasilan Bidang Trantibun Umum, Ketentraman Masyarakat dan Perlindungan Masyarakat (Trantibum dan Linmas) Kategori Kota - Pemerintah Provinsi Kalimantan Timur</li>
            <li>Terbaik II Bidang Kepemudaan - Pemerintah Provinsi Kalimantan Timur</li>
            <li>Terbaik II Bidang Kesejahteraan Sosial - Pemerintah Provinsi Kalimantan Timur</li>
            <li>Terbaik II Bidang Ketenagakerjaan - Pemerintah Provinsi Kalimantan Timur</li>
            <li>Terbaik II Bidang Pemberdayaan Masyarakat dan Penyelenggaraan Kelurahan - Pemerintah Provinsi Kalimantan Timur</li>
            <li>Terbaik II Bidang Sektor Perdagangan - Pemerintah Provinsi Kalimantan Timur</li>
            <li>Terbaik II Bidang Smart City Kabupaten/Kota - Pemerintah Provinsi Kalimantan Timur</li>
            <li>Terbaik III Bidang Dewan Kerajinan Nasional Daerah - Pemerintah Provinsi Kalimantan Timur</li>
            <li>Terbaik III Bidang Perdagangan - Pemerintah Provinsi Kalimantan Timur</li>
            <li>Terbaik III Bidang Pembangunan Keluarga, Kependudukan dan Keluarga Berencana (Bangga Kencana) Kategori Kota - Pemerintah Provinsi Kalimantan Timur, DP3AKB</li>
            <li>Terbaik III Bidang Pembangunan Kesehatan Kategori Kota - Pemerintah Provinsi Kalimantan Timur, Dinkes</li>
            <li>Terbaik III Bidang Pemberdayaan Perempuan dan Perlindungan Anak - Pemerintah Provinsi Kalimantan Timur, DP3AKB</li>
            <li>Terbaik III Bidang Pencegahan Korupsi (PK) pada Pemerintah Kabupaten dan Kota - Pemerintah Provinsi Kalimantan Timur, Inspektorat</li>
            <li>Penghargaan Atas Capaian Realisasi Investasi Tahun 2021 Kepada Pemerintah Daerah - Kementerian Investasi BKPM RI</li>
            <li>Predikat A Pelayanan Prima Dari Hasil Evaluasi Kinerja Pelayanan Publik - Kementerian Pendayagunaan Aparatur Negara dan Reformasi Birokrasi, DPMPTSP</li>
            <li>Human Initiative Award Kategori Mitra Kolaborasi Pemerintah Lokal (Kategori Pemerintah Daerah Terbaik Versi Human Initiative) - Human Initiative</li>
            <li>Predikat Kota Terbaik Dalam Perencanaan Pembangunan Daerah - Pemerintah Provinsi Kalimantan Timur</li>
            <li>Nirwasita Tantra bagi Kepala Daerah Tahun 2021 - Kementerian Lingkungan Hidup dan Kehutanan</li>
            <li>Anugerah Tanda Mata atas Partisipasi dan Kontribusi dalam Pengembangan dan Kebijakan Positif bagi Pendidikan Agama Islam di Sekolah - Direktorat Jenderal Pendidikan Islam Kementerian Agama RI</li>
            <li>Juara 2 Pengelola Jaringan Dokumentasi dan Informasi Hukum Kabupaten/Kota Se Kalimantan Timur Tahun 2021 - Pemerintah Provinsi Kalimantan Timur, Bagian Humas Sekretariat Daerah</li>
            <li>Predikat Wajar Tanpa Pengecualian Laporan Hasil Pemeriksaan atas Laporan Keuangan Pemerintah Daerah (LKPD) Kabupaten/Kota Tahun Anggaran 2021 Se-Provinsi Kalimantan Timur - BPK-RI</li>
            <li>Terbaik 1 Kategori Ketahanan Pangan - Pemerintah Provinsi Kalimantan Timur</li>
            <li>Adiwiyata Tingkat Provinsi - Pemerintah Provinsi Kalimantan Timur</li>
            <li>Peringkat 3 Green Leadership Nirwasita Tantra Kriteria Kepala Daerah Kategori Kota Besar - Kementerian Lingkungan Hidup dan Kehutanan</li>
            <li>Peringkat 2 Nirwasita Tantra untuk Pemerintahan Daerah Kategori Kota Besar - Kementerian Lingkungan Hidup dan Kehutanan</li>
            <li>Peringkat 2 Penghargaan Nirwasita Tantra Kategori DPRD Tingkat Kota Besar - Kementerian Lingkungan Hidup dan Kehutanan</li>
            <li>Peringkat Nindya Sebagai Kota Menuju Kota Layak Anak (KLA) Tahun 2022 - Kementerian Pemberdayaan Perempuan Perlindungan Anak (PPPA)</li>
            <li>Penghargaan BKN Award Kategori Special Mention Peningkatan Pelayanan Kepegawaian BKN - Badan Kepegawaian Negara</li>
            <li>Penghargaan dalam Bidang Pembina Olahraga Berprestasi - Kementerian Pemuda dan Olahraga</li>
        </ol>

    </div>
    <div class="award">
        <h2>2021 (44 Penghargaan)</h2>
        <ol>
            <li>Panji Keberhasilan Bidang Sektor Koperasi - Pemprov Kaltim</li>
            <li>Panji Keberhasilan Bidang Dekranasda - Pemprov Kaltim</li>
            <li>Panji Keberhasilan Bidang Perhubungan Kategori Kota - Pemprov Kaltim</li>
            <li>Panji Keberhasilan Bidang Pendidikan - Pemprov Kaltim</li>
            <li>Panji Keberhasilan Bidang Apresiasi Bunda PAUD - Pemprov Kaltim</li>
            <li>Panji Keberhasilan Bidang Kebudayaan - Pemprov Kaltim</li>
            <li>Panji Keberhasilan Bidang Kepemudaan - Pemprov Kaltim</li>
            <li>Panji Keberhasilan Bidang Keolahragaan - Pemprov Kaltim</li>
            <li>Panji Keberhasilan Bidang Kesejahteraan Sosial - Pemprov Kaltim</li>
            <li>Panji Keberhasilan Bidang Lingkungan Hidup - Pemprov Kaltim</li>
            <li>Panji Keberhasilan Bidang Pelayanan Terpadu Satu Pintu - Pemprov Kaltim</li>
            <li>Panji Keberhasilan Bidang Daya Saing Daerah - Pemprov Kaltim</li>
            <li>Panji Keberhasilan Bidang Pengembangan Kompetensi Aparatur (PNS) - Pemprov Kaltim</li>
            <li>Panji Keberhasilan Bidang Pengembangan Iptek dan Inovasi - Pemprov Kaltim</li>
            <li>Panji Keberhasilan Bidang Peningkatan Pelayanan Publik Kategori Kota - Pemprov Kaltim</li>
            <li>Panji Keberhasilan Bidang Penyelenggaraan Trantibum dan Satlinmas di Kabupaten/Kota Se-Kaltim - Pemprov Kaltim</li>
            <li>Panji Keberhasilan Bidang Tim Penggerak PKK Berprestasi Kategori Kota - Pemprov Kaltim</li>
            <li>Terbaik II Bidang Pembangunan Hukum & HAM - Pemprov Kaltim</li>
            <li>Terbaik II Bidang Pencegahan Korupsi - Pemprov Kaltim</li>
            <li>Terbaik II Bidang Pariwisata Kategori Kota - Pemprov Kaltim</li>
            <li>Terbaik II Bidang Sektor Perdagangan - Pemprov Kaltim</li>
            <li>Terbaik II Bidang Kesehatan - Pemprov Kaltim</li>
            <li>Terbaik II Bidang Ketenagakerjaan - Pemprov Kaltim</li>
            <li>Terbaik II Bidang Penyelenggaraan Penataan Ruang - Pemprov Kaltim</li>
            <li>Terbaik II Bidang Penyelenggaraan Administrasi Kependudukan dan Pencatatan Sipil Kategori Kota - Pemprov Kaltim</li>
            <li>Terbaik II Bidang Keberhasilan Pembangunan Keluarga Berencana Kategori Kota - Pemprov Kaltim</li>
            <li>Terbaik II Bidang Pelayanan Administrasi Terpadu Kecamatan (Paten) - Pemprov Kaltim</li>
            <li>Terbaik II Bidang Pemberdayaan Masyarakat dan Penyelenggaraan Pemerintahan Kelurahan - Pemprov Kaltim</li>
            <li>Terbaik III Bidang Kinerja Penyelenggaraan Pemerintahan Daerah (LPPD) Kategori Kota - Pemprov Kaltim</li>
            <li>Terbaik III Bidang Keberhasilan Keterbukaan Informasi Publik - Pemprov Kaltim</li>
            <li>Terbaik III Bidang Sektor Industri - Pemprov Kaltim</li>
            <li>Terbaik III Bidang Perpustakaan dan Minat Baca - Pemprov Kaltim</li>
            <li>Terbaik III Bidang Tata Kelola Kearsipan - Pemprov Kaltim</li>
            <li>Terbaik III Bidang Pemberdayaan Perempuan dan Perlindungan Anak Kategori Kota - Pemprov Kaltim</li>
            <li>Terbaik III Bidang Pengelolaan Keuangan Daerah - Pemprov Kaltim</li>
            <li>Terbaik II Camat Berprestasi se-Kaltim - Pemprov Kaltim</li>
            <li>Terbaik I Satpol PP se-Kaltim - Pemprov Kaltim</li>
            <li>Penghargaan Pelayanan Publik Sangat Baik - KemenPAN RB</li>
            <li>Peringkat I Penghargaan Pembangunan Daerah kategori Kota - Pemprov Kaltim</li>
            <li>Penghargaan Akuntabilitas Kinerja Tahun 2021 Predikat B - KemenPAN RB</li>
            <li>Juara umum pada Lomba Hari Kesatuan Gerak (HKG) ke-49 tahun 2021 tingkat Provinsi Kalimantan Timur - TP PKK Pemprov Kaltim</li>
            <li>Anugerah Parahati Ekapraya Kategori Pratama - Kementerian Pemberdayaan Perempuan dan Perlindungan Anak Republik Indonesia</li>
            <li>Pelayanan Psikososial untuk ODGJ - Rumah Sakit Jiwa Daerah Atma Husada Mahakam Samarinda</li>
        </ol>
    </div>
    <div class="award">
        <h2>2020 (70 Penghargaan)</h2>
        <ol>
            <li>Panji Keberhasilan Bidang Pencegahan dan Pemberantasan Korupsi - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Pariwisata Kategori Kota - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Industri - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Perhubungan - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Kesehatan - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Kepemudaan - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Keolahragaan - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Penyelenggaraan Penataan Ruang - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Lingkungan Hidup - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Daya Saing Daerah - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Pemberdayaan Perempuan dan Perlindungan Anak Kategori Kota - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Kependudukan, Keluarga Berencana dan Pembangunan Keluarga (KKBPK) Kategori Kota - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Pencegahan dan Pemberantasan Penyalahgunaan dan Peredaran Gelap Narkoba - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Penyelenggaraan Trantibum dan Satlinmas di Kabupaten/Kota se-kaltim - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Tim Penggerak PKK Berprestasi - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Pemberdayaan masyarakat dan Penyelenggaraan Pemerintahan Kelurahan - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang Perdagangan - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang Koperasi - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang Pendidikan - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang Apresiasi Bunda PAUD - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang Pelayanan Terpadu Satu Pintu - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang Perpustakaan dan Minat baca - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang Tata Kelola Kearsipan - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang IPTEK dan Inovasi - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang Kebudayaan - Pemerintah Prov Kaltim</li>
            <li>Terbaik III Bidang Penyelenggaraan Pemerintahan Daerah (LPPD) kategori Kota - Pemerintah Prov Kaltim</li>
            <li>Terbaik III Bidang Keberhasilan Pengelolaan e-Government - Pemerintah Prov Kaltim</li>
            <li>Terbaik III Bidang Keberhasilan Keterbukaan Informasi Publik - Pemerintah Prov Kaltim</li>
            <li>Terbaik III Bidang Pembangunan Hortikultural - Pemerintah Prov Kaltim</li>
            <li>Terbaik III Bidang Dekranasda - Pemerintah Prov Kaltim</li>
            <li>Terbaik III Bidang Penyelenggaraan Administrasi Kependudukan dan Pencatatan Sipil Kategori Kota - Pemerintah Prov Kaltim</li>
            <li>Terbaik III Bidang Kondusifitas Daerah - Pemerintah Prov Kaltim</li>
            <li>Terbaik III Bidang Prestasi Penyelenggaraan Diklat Aparatur - Pemerintah Prov Kaltim</li>
            <li>Juara II Inovasi KTP Virtual Pengganti KTP-el di kota Balikpapan - Pemerintah Prov Kaltim</li>
            <li>Camat Terbaik II - Pemerintah Prov Kaltim</li>
            <li>Kelurahan Terbaik I - Pemerintah Prov Kaltim</li>
            <li>Kelurahan Pemenang lomba BBGRM - Pemerintah Prov Kaltim</li>
            <li>Tata Kelola Kearsipan Predikat Memuaskan - ANRI & KemenPAN RB</li>
            <li>10 besar nasional Penghargaan Pembangunan Daerah (PPD) 2020 - Bappenas</li>
            <li>Pemuda Pelopor Bidang Pendidikan - Pemerintah Prov Kaltim</li>
            <li>Pemuda Pelopor Bidang Pengelolaan SDA, Lingkungan dan Pariwisata - Pemerintah Prov Kaltim</li>
            <li>Pemuda Pelopor Bidang Inovasi Teknologi - Pemerintah Prov Kaltim</li>
            <li>Proper Hijau - Pemerintah Prov Kaltim</li>
            <li>Smart Governance - Pemerintah Prov Kaltim</li>
            <li>Penghargaan sertifikat Proklim Utama 2020 - Kemen LH dan Kehutanan</li>
            <li>Penghargaan sertifikat Proklim Utama 2020 - Kemen LH dan Kehutanan</li>
            <li>Penghargaan sertifikat Proklim Utama 2020 - Kemen LH dan Kehutanan</li>
            <li>Penghargaan sertifikat Proklim Utama 2020 - Kemen LH dan Kehutanan</li>
            <li>Penghargaan sertifikat Proklim Utama 2020 - Kemen LH dan Kehutanan</li>
            <li>Penghargaan sertifikat Proklim Utama 2020 - Kemen LH dan Kehutanan</li>
            <li>Penghargaan sertifikat Proklim Utama 2021 - Kemen LH dan Kehutanan</li>
            <li>Anugerah Produktivitas Siddhakarya - Pemerintah Prov Kaltim</li>
            <li>Gatra Award 2020 kategori pengembang Usaha Mikro, Kecil, dan Menengah (UMKM) dan Kewirausahaan di masa pandemi - Gatra Media Group</li>
            <li>Penghargaan Terbaik I Inovasi dan Kreativitas Pelayanan Perangkat Daerah (PEPES IKAN PEDA) - Pemerintah Prov Kaltim</li>
            <li>Juara 1 Perilaku Hidup Bersih dan Sehat - TP PKK Prov Kaltim</li>
            <li>Juara 1 Lingkungan Bersih dan Sehat - TP PKK Prov Kaltim</li>
            <li>Juara 1 Administrasi PKK - TP PKK Prov Kaltim</li>
            <li>Juara 1 Dasa Wisma - TP PKK Prov Kaltim</li>
            <li>Juara 1 Pola Asuh Anak dan Remaja - TP PKK Prov Kaltim</li>
            <li>Juara 1 Panji Keberhasilan PKK - TP PKK Prov Kaltim</li>
            <li>Juara 2 Posyandu - TP PKK Prov Kaltim</li>
            <li>Juara 2 PKK-KKBPK-Kesehatan - TP PKK Prov Kaltim</li>
            <li>Juara 2 Hatinya PKK - TP PKK Prov Kaltim</li>
            <li>Juara 2 Usaha Peningkatan Pendapatan Keluarga - TP PKK Prov Kaltim</li>
            <li>Penghargaan dari Pemerintah RI kepada Pemerintah Daerah Lingkup Provinsi Kaltim Untuk Raihan Opini WTP - BPK</li>
            <li>Penghargaan Program Elektronifikasi Transaksi Pemerintah Terbaik - BI</li>
            <li>Top 46 Sp4n Lapor Nasional - Kemenpan & RB</li>
            <li>Kota Peduli HAM - Kemenkumham</li>
            <li>Penghargaan Peringkat Pertama Mitra Bhakti Husada Kategori Instansi dan Perkantoran - Kemenkes</li>
            <li>IGA Kategori Kota Sangat Inovatif - Kemendagri</li>
        </ol>
    </div>
    <div class="award">
        <h2>2019 (77 Penghargaan)</h2>
        <ol>
            <li>Panji Keberhasilan Bidang Pencegahan dan Pemberantasan Korupsi - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Keterbukaan Informasi Publik - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Industri - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Perdagangan - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Koperasi - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Pencegahan dan Pemberantasan, Penyalahgunaan dan Peredaran Gelap Narkoba - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Perhubungan - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Pendidikan - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Apresiasi Bunda PAUD - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Kebudayaan Kota - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Kesehatan - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Perpustakaan dan Minat Baca - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang PATEN (Pelayanan Administrasi Terpadu Kecamatan) - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Kepemudaan - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Tim Penggerak PKK Berprestasi - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Penanggulangan Bencana Daerah - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Lingkungan Hidup - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Penyelenggaraan Administrasi Kependudukan dan Pencatatan Sipil Kategori Kota - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Pariwisata - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang Keberhasilan Pengelolaan e-Government - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang Dekranasda - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang Pelayanan Terpadu Satu Pintu - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang Daya Saing Daerah - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang Tata Kelola Kearsipan - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang Keolahragaan - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang Pemberdayaan Masyarakat dan Penyelenggaraan Pemerintahan Kelurahan - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang Program Kependudukan, Keluarga Berencana dan Pembangunan Keluarga - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang Pemberdayaan Perempuan dan Perlindungan Anak Kategori Kota - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang Kondusifitas Kota - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang Pengembangan Iptek dan Inovasi - Pemerintah Prov Kaltim</li>
            <li>Terbaik III Bidang Kinerja Penyelenggaraan Pemerintahan Daerah (LPPD) - Pemerintah Prov Kaltim</li>
            <li>Adipura (XXII) - Kementerian LHK</li>
            <li>Keterlibatan dan Partisipasi Aktif Aparatur Damkar - Kemendgri</li>
            <li>Indonesian Creative Leader - MNC Group</li>
            <li>Pembina UKS - Pemerintah Prov Kaltim</li>
            <li>Pakarti Utama III - TP-PKK Pusat</li>
            <li>Juara Umum HKG-PKK - TP-PKK Prov Kaltim</li>
            <li>Public Service of the Year - Pemerintah Prov Kaltim</li>
            <li>Penghargaan Proper Hijau - Pemerintah Prov Kaltim</li>
            <li>Sekolah Adiwiyata - Pemerintah Prov Kaltim</li>
            <li>Opini WTP - BPK Perwakilan Kaltim</li>
            <li>Aditya Karya Mahatva Yodha Award - Kementerian Sosial</li>
            <li>Menuju Kota Layak Anak Kategori Nindya - Kemen PPPA</li>
            <li>Penghargaan Kelembagaan UPTD PPA Terbaik I - Kemen PPPA</li>
            <li>Puspaga Mandiri Terbaik II Kategori Kota - Kemen PPPA</li>
            <li>Sekolah Ramag Anak Terbaik II - Kemen PPPA</li>
            <li>Sekolah Ramah Anak Terbaik III kategori SLB - Kemen PPPA</li>
            <li>Puskesmas Ramah Anak - Kemen PPPA</li>
            <li>Pakarti Madya I Tingkat nasional Pelaksana Terbaik IVA Test Kategori Kota - TP PKK Pusat</li>
            <li>Juara I Lomba Cipta Menu - Pemerintah Prov Kaltim</li>
            <li>Upakarya Wanua Nugraha - Kemendagri</li>
            <li>Juara 1 Lomba Kelurahan - Kemendagri</li>
            <li>Apresiasi Kota Terpopuler di Medsos - Ikatan Humas Indonesia</li>
            <li>Wahana Tata Nugraha - Kemenhub</li>
            <li>BKN Award 2019 - BKN RI</li>
            <li>Natamukti Award Bidang UMKM - International Council for Small Business (ICSB) Indonesia / Kemenkop UKM</li>
            <li>Penghargaan atas opini WTP - Kemenkeu</li>
            <li>Anugrah Aksara Utama - Kemendikbud</li>
            <li>Juara III MTQ ke-41 Kaltim - Pemerintah Prov Kaltim</li>
            <li>Kota Layak Pemuda kategori Utama - Kemenpora</li>
            <li>PR Indonesia Most Popular Leader in Social Media - PR Indonesia</li>
            <li>Peringkat III Penilaian Fasilitas Kesehatan Tk I Berprestasi Tk. Nasional Kriteria Puskesmas Perkotaan - Kemenkes</li>
            <li>Dokter Teladan Nasional - Kemenkes</li>
            <li>Juara III LSS UKS/M Tingkat TK/RA - Kemenkes</li>
            <li>Juara III Pembina UKS - Kemenkes</li>
            <li>Kota Sehat / Swasti Saba - Kemendagri</li>
            <li>Bunda Paud Tingkat Nasional - Kemendikbud</li>
            <li>Role Model Penyelenggara Pelayanan Publik Kategori sangat Baik - Kemenpan RB</li>
            <li>Role Model Penyelenggara Pelayanan Publik Kategori Pelayanan Prima - Kemenpan RB</li>
            <li>Korpri Award - Korpri DP Nasional</li>
            <li>Predikat terbaik capaian aksi koordinasi dan supervisi pencegahan korupsi - Kemendagri</li>
            <li>Kota Peduli HAM - Kemenkumham</li>
            <li>Zona Integritas Wilayah Bebas Korupsi - Kemenpan RB</li>
            <li>Adiwiyata Mandiri - Kemen LH</li>
            <li>Adiwiyata Nasional - Kemen LH</li>
            <li>IRSA Kategori Manajemen Keselamatan Jalan dan Kategori jalan Yang berkeselamatan - Bappenas</li>
            <li>Anugerah Sapta Pesona Kategori Destinasi Belanja Terpopuler - Kemen Pariwisata dan Ekonomi Kreatif</li>
        </ol>
    </div>
    <div class="award">
        <h2>2018 (71 Penghargaan)</h2>
        <ol>
            <li>Panji Keberhasilan Bidang Pencegahan dan Pemberantasan Korupsi - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Keterbukaan Informasi Publik - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Industri - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Perdagangan - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Koperasi - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Dekranasda - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Pelayanan Terpadu Satu Pintu - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Daya Saing Daerah - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Perhubungan - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Pendidikan - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Kebudayaan Kota - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Kesehatan - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Tata Kelola Kearsipan - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Pemberdayaan Masyarakat dan Penyelenggaraan Pemerintahan Kelurahan - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Tim Penggerak PKK Berprestasi - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Lingkungan Hidup - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Penyelenggaraan Administrasi Kependudukan dan Pencatatan Sipil Kategori Kota - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Pariwisata Kategori Kota - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang PATEN (Pelayanan Administrasi Terpadu Kecamatan) - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang Pembangunan Hukum dan HAM - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang Pencegahan dan Pemberantasan Penyalahgunaan dan Peredaran Gelap Narkoba - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang Keberhasilan Pengelolaan e-Government - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang Program Kependudukan, KB dan Pembangunan Keluarga - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang Apresiasi Bunda PAUD (Pendidikan Anak Usia Dini) - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang Perpustakaan dan Minat Baca - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang Pengembangan IPTEK dan Inovasi - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang Penyelenggaraan Penataan Ruang - Pemerintah Prov Kaltim</li>
            <li>Terbaik III Bidang Pemberdayaan Perempuan dan Perlindungan Anak Kategori Kota - Pemerintah Prov Kaltim</li>
            <li>Terbaik III Bidang Keolahragaan - Pemerintah Prov Kaltim</li>
            <li>Terbaik III Bidang Penanggulangan Kemiskinan - Pemerintah Prov Kaltim</li>
            <li>Terbaik III Bidang Kinerja Penyelenggaraan Pemerintahan Daerah (LPPD) - Pemerintah Prov Kaltim</li>
            <li>Terbaik III Bidang Prestasi Penyelenggaraan Diklat Aparatur - Pemerintah Prov Kaltim</li>
            <li>Terbaik III Bidang Ketenagakerjaan - Pemerintah Prov Kaltim</li>
            <li>Peringkat I Lomba Kelurahan Terbaik Tingkat Prov. Kaltim - Pemerintah Prov Kaltim</li>
            <li>Peringkat III Lomba Camat Berprestasi Tingkat Prov. Kaltim - Pemerintah Prov Kaltim</li>
            <li>Penilaian peringkat kerja perusahaan dalam pengelolaan lingkungan hidup (Proper) Hijau - Pemprov Kaltim</li>
            <li>Adiwiyata Provinsi Kaltim - Pemprov Kaltim</li>
            <li>BKN Award 2018 atas Pengelolaan Kepegawaian Terbaik kategori Kab/Kota Tipe A - BKN</li>
            <li>Yokatta Wonderful Indonesia Tourism Awards (Yowita) 2018 kategori kota Terbaik di Provinsi Kaltim dan kategori 10 Besar Kota Terbaik Nasional - Kemenpar RI</li>
            <li>National Procurement Award 2018 - LKPP</li>
            <li>Pemenang III kategori Puskesmas Perkotaan - Kemenkes</li>
            <li>Penganugrahan Menuju KLA Strata MADYA - Kementerian Pemberdayaan Perempuan dan Perlindungan Anak</li>
            <li>Penghargaan Pengembangan Forum Anak Terbaik - DP3AKB</li>
            <li>Penyelenggaraan Sekolah Ramah Anak Terbaik Jenjang SD - DP3AKB</li>
            <li>Pembina Pelayanan Publik Terbaik - Kemenpan & RB</li>
            <li>Role Model Penyelenggara Pelayanan Publik Kategori Sangat Baik - Disdukcapil</li>
            <li>Role Model Penyelenggara Pelayanan Publik Kategori Sangat Baik - RSUD Balikpapan</li>
            <li>Unit Penyelenggara Pelayanan Publik Kategori Sangat Baik - DPMPT</li>
            <li>Pakarti Utama II Pelaksana Terbaik Tertib Administrasi PKK - TP PKK Pusat / Kemendagri</li>
            <li>Terbaik I INAGARA (Inovasi Administrasi Negara) - LAN RI</li>
            <li>Anugrah Ki Hajar Kategori MADYA - Kemendikbud</li>
            <li>Piagam Penghargaan Pemerintah RI atas Opini WTP terhadap LKPD TA. 2017 - Kemenkeu RI</li>
            <li>Smart Sanitation Award 2018 - Kemenkes & AKKOPSI (Asosiasi Kabupaten/Kota Peduli Sanitasi)</li>
            <li>Natamukti - International Council for Small Business (ICBS) & Kemenkop & UKM</li>
            <li>Penghargaan Unit Pelayanan Publik Kategori Pelayanan Prima - Kemenpan & RB</li>
            <li>Penghargaan Unit Pelayanan Publik Kategori Pelayanan Prima - DPMPT</li>
            <li>Penghargaan Unit Pelayanan Publik Kategori B - Disdukcapil</li>
            <li>Peringkat Pertama Keterbukaan Informasi Publik (KIP) Kaltim 2018 - Komisi Informasi Kaltim</li>
            <li>Peringkat 2 Kategori Waste to Energy - KemenPUPR</li>
            <li>Peringkat II Pemenang Website Awards 2018, Kategori BUMD/PERUSDA Kalimantan Timur - Komisi Informasi Provinsi Kalimantan Timur</li>
            <li>Peringkat 3 Website Awards 2018 - Set. DPRD</li>
            <li>Website Awards 2018 Kategori Inovasi dan Kreativitas Pengelolaan Website - DPPR</li>
            <li>Indonesia Road Safety Award (IRSA) 2018 Pemenang Pilar Manajemen Keselamatan Jalan Kategori Excellent City - Bappenas</li>
            <li>Penghargaan Zona Integritas Menuju Wilayah Bebas Korupsi (WBK) dan Wilayah Birokrasi Bersih Dan Melayani (WBBM) - Kemenpan & RB</li>
            <li>Kota Peduli HAM - Kemenkum & HAM</li>
            <li>Opini WTP - BPK Perwakilan Kaltim</li>
            <li>Universal Health Coverage (UHC) - Kemendagri</li>
            <li>Smart Environment - Kemenkominfo</li>
            <li>Penghargaan Peran Aktif dan Kepedulian terhadap Perlindungan Pegawai Non PNS - BPJS</li>
            <li>Kinerja Pengurangan Sampah - KemenLH</li>
            <li>TPA (Tempat Pemrosesan Akhir) Terbaik - KemenLH</li>
        </ol>
    </div>
    <div class="award">
        <h2>2017 (87 Penghargaan)</h2>
        <ol>
            <li>Panji Keberhasilan Bidang Pencegahan dan Pemberantasan Korupsi - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Prestasi Penyelenggaraan Diklat Aparatur - Badan Kepegawaian dan Pengembangan SDM</li>
            <li>Panji Keberhasilan Bidang Keberhasilan E-Government - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Industri - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Perdagangan - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Pelayanan Terpadu Satu Pintu - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Daya Saing Daerah - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Pencegahan dan Pemberantasan Penyalahgunaan Peredaran Gelap Narkoba - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Perhubungan - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Apresiasi Bunda PAUD - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Kesehatan - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Perpustakaan dan Minat Baca - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Penyelenggaraan Administrasi Kependudukan dan Pencatatan Sipil - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Ketenagakerjaan - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Tim Penggerak PKK Berprestasi - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Lingkungan Hidup - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Penanggulangan Kemiskinan - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang Pembangunan Hukum dan HAM - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang Keberhasilan Keterbukaan Informasi Publik - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang Kehutanan - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang Koperasi - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang Pendidikan - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang Pelayanan Administrasi Terpadu Kecamatan (PATEN) - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang Pembinaan dan Penyelenggaraan Pemerintahan Kelurahan - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang Pemberdayaan Perempuan dan Anak - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang Penyelenggaraan Penataan Ruang - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang Tata Kelola Kearsipan - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang Pariwisata Kategori Kota - Pemerintah Prov Kaltim</li>
            <li>Terbaik III Bidang Kinerja Penyelenggaraan Pemerintahan Daerah Kategori Kota - Pemerintah Prov Kaltim</li>
            <li>Terbaik III Bidang Kepemudaan - Pemerintah Prov Kaltim</li>
            <li>Terbaik III Bidang Keolahragaan - Pemerintah Prov Kaltim</li>
            <li>Terbaik III Bidang Program Kependudukan Keluarga Berencana dan Pemberdayaan Keluarga - Pemerintah Prov Kaltim</li>
            <li>Terbaik III Bidang Penataan Ruang - Pemerintah Prov Kaltim</li>
            <li>Terbaik III Bidang Kebudayaan Kategori Kota - Pemerintah Prov Kaltim</li>
            <li>Terbaik III Bidang Penyelenggaraan Penanggulangan Bencana Daerah - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang Pariwisata Kategori Kota - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang Pramuka - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang Dekranasda - Pemerintah Prov Kaltim</li>
            <li>Wahana Tata Nugraha - Kementerian Perhubungan</li>
            <li>Evaluasi LAKIP dengan Nilai B - Kementerian PAN & RB</li>
            <li>Anugerah Pangripta Nusantara - Pemerintah Prov Kaltim</li>
            <li>Penghargaan Kepada Pembina dan Pimpinan Penyelenggara Pelayanan Publik Terbaik Role Model - Kementerian PAN & RB</li>
            <li>Sindo Weekly Government Award 2017 Kategori Ekonomi Kreatif - Sindo Weekly</li>
            <li>Opini WTP - BPK Kaltim</li>
            <li>Juara Umum Hari Kesatuan Gerak PKK (HKG-PKK) tingkat Provinsi Kaltim tahun 2017 - Pemerintah Prov Kaltim</li>
            <li>Piala Bergilir Lomba Hari Keluarga Nasional (Harganas) XXIV tahun 2017 - Pemerintah Prov Kaltim</li>
            <li>Pakarti Utama I Lomba Pelaksanaan PKK-KB-KES kategori Kota - BKKBN</li>
            <li>Adipura Kencana (XX) - Kementerian LHK</li>
            <li>Adiwiyata Mandiri - Kementerian LHK</li>
            <li>Adiwiyata Mandiri - Kementerian LHK</li>
            <li>Adiwiyata Mandiri - Kementerian LHK</li>
            <li>Adiwiyata Mandiri - Kementerian LHK</li>
            <li>Adiwiyata Mandiri - Kementerian LHK</li>
            <li>Adiwiyata Mandiri - Kementerian LHK</li>
            <li>Nirwasita Tantra 2017 Tingkat Kota - Kementerian LHK</li>
            <li>Kalpataru - Kementerian LHK</li>
            <li>Bupati/Walikota Terbaik Tahun 2017 - Kementerian PAN & RB</li>
            <li>Pemenang Ketiga Borneo Innovation Award 2017 - Lembaga Administrasi Negara</li>
            <li>Piagam Penghargaan Paramesti - Kementerian Kesehatan</li>
            <li>Penilaian peringkat kerja perusahaan dalam pengelolaan lingkungan hidup (Proper) Biru - Pemprov Kaltim</li>
            <li>Tanda Kehormatan Tokoh Bakti Koperasi - Kementerian KUKM</li>
            <li>Koperasi Berprestasi Tingkat Nasional - Kementerian KUKM</li>
            <li>Penganugrahan Menuju KLA kategori MADYA - Kementerian Pemberdayaan Perempuan dan Perlindungan Anak</li>
            <li>Penghargaan Pengembangan Forum Anak Terbaik - DP3AKB</li>
            <li>Penghargaan Percepatan Cakupan Pemberian Akta Kelahiran Anak kategori MADYA - DP3AKB</li>
            <li>Penghargaan Sekolah Ramah Anak Terbaik - DP3AKB</li>
            <li>Penghargaan Tunas Muda Pelopor Indonesia (TMPI) - DP3AKB</li>
            <li>Penghargaan Adaptasi Perubahan Iklim Fokus Anak (APiFA) - Unicef & KPPPA</li>
            <li>Penghargaan kategori kondisi keuangan daerah terbaik peringkat 1 seindonesia - Kemendagri & UGM</li>
            <li>Peringkat ke 3 transparansi keuangan daerah tingkat kota se Kalimantan - Kemendagri & UGM</li>
            <li>Pencapaian imunisasi > 80% - Kemenkes</li>
            <li>Pencapaian Tertinggi indikator TB paru - Dinkes Pemprov Kaltim</li>
            <li>Kota Peduli HAM - Kemenkumham</li>
            <li>Rating Ekonomi Cerdas - ITB</li>
            <li>Rating Sosial Cerdas - ITB</li>
            <li>Rating Lingkungan Cerdas - ITB</li>
            <li>Rating Kesehatan Cerdas - ITB</li>
            <li>Rating Mobilitas - ITB</li>
            <li>Rating Kesiapan Integrasi - ITB</li>
            <li>Rating Kesiapan Infrastruktur - ITB</li>
            <li>Rating Ekosistem Kompetitif - ITB</li>
            <li>Rating Ekosistem Inovasi - ITB</li>
            <li>Indonesia Road Safety Award (IRSA) 2017 Kategori Manajemen Keselamatan Jalan dan Kendaraan yang Berkeselamatan - Bappenas</li>
            <li>Predikat Kepatuhan Tinggi terhadap Standar Pelayanan Publik - Ombudsman RI</li>
            <li>Leadership Award - Kemendagri</li>
            <li>Aptisi Award 2017 Kategori Kepala Daerah Berkomitmen Tinggi Pada Perguruan Tinggi Swasta - Asosiasi Perguruan Tinggi Swasta Indonesia (APTISI)</li>
            <li>Penghargaan Keberhasilan menyusun dan menyajikan laporan keuangan tahun 2016 dengan capaian standar tinggi - Kementerian Keuangan</li>
        </ol>
    </div>
    <div class="award">
        <h2>2016 (70 Penghargaan)</h2>
        <ol>
            <li>Panji Keberhasilan Bidang Pariwisata Kategori Kota - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Kinerja Penyelenggaraan Pemerintah Daerah - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Administrasi Kependudukan Kategori Kota - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Industri - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Daya Saing Daerah - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Pendidikan - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Kesehatan - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Hukum dan HAM - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Pencegahan dan Pemberantasan Korupsi - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Lingkungan Hidup - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Penanggulangan Kemiskinan - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Pembangunan Bidang Pembangunan Holtikultura - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Pencegahan dan Pemberantasan Narkoba - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Perhubungan Wahana Tata Nugraha - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Kwartir Cabang Gerakan Pramuka - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Penyelenggaraan Penataan Ruang - Pemerintah Prov Kaltim</li>
            <li>Panji Keberhasilan Bidang Kebudayaan - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang Pelayanan Administrasi Terpadu Kecamatan (PATEN) - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang Pembinaan Penyelenggaraan Pemerintah Daerah - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang Pemberdayaan Perempuan dan Perlindungan Anak - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang Tata Kelola Kearsipan - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang Pembangunan Perpustakaan dan Minat Baca - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang Pemeringkatan E-Government - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang Pengelolaan Keuangan Daerah - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang Tim Penggerak PKK Berprestasi - Pemerintah Prov Kaltim</li>
            <li>Terbaik II Bidang Ketenagakerjaan - Pemerintah Prov Kaltim</li>
            <li>Terbaik III Bidang Keterbukaan Informasi dan Pemeringkatan PPID - Pemerintah Prov Kaltim</li>
            <li>Terbaik III Bidang Pembangunan Keolahragaan - Pemerintah Prov Kaltim</li>
            <li>Terbaik III Bidang Kependudukan dan KB - Pemerintah Prov Kaltim</li>
            <li>Terbaik III Bidang Perdagangan - Pemerintah Prov Kaltim</li>
            <li>Terbaik III Bidang Pelayanan Terpadu - Pemerintah Prov Kaltim</li>
            <li>Terbaik III Bidang Pendidikan Anak Usia Dini - Pemerintah Prov Kaltim</li>
            <li>Rekor Makan Buah Naga Terbanyak (5119 buah) - LEPRID</li>
            <li>Rekor Penghargaan Nasional dan Internasional Selama 5 Tahun Terakhir (2011-2015) - LEPRID</li>
            <li>Jawa Pos Grup Award 2016 Untuk 10 Kepala Daerah Terbaik Versi Jawa Pos Grup - Jawa Pos Grup</li>
            <li>Unit Kerja Pelayanan Publik Kategori Kepatuhan Tinggi dalam Standar Pelayanan Publik - Ombudsman RI Perwakilan Kalimantan Timur</li>
            <li>Unit Kerja Pelayanan Publik Kategori Kepatuhan Tinggi dalam Standar Pelayanan Publik - Ombudsman RI Perwakilan Kalimantan Timur</li>
            <li>Penghargaan atas Partisipasi Pemda dalam Pencegahan dan Penanggulangan Kebakaran untuk Kota Sedang - Kemendagri</li>
            <li>10 Besar LPPD Terbaik - Kemendagri</li>
            <li>Penghargaan atas Keberhasilan dalam Membina dan Mengembangkan UKS di Wilayahnya - Gubernur Kalimantan Timur</li>
            <li>Peringkat I Pembina K3 - Kemenaker</li>
            <li>Pembina Program Pencegahan & Penanggulangan HIV dan AIDS di Tempat Kerja Tahun 2016 - Kemenaker</li>
            <li>Special Mention Kategori Pemerintah Kota - Kementerian & Profesional</li>
            <li>Opini WTP - BPK Kaltim</li>
            <li>Top 35 SINOVIK (Sistem Inovasi Pelayanan Publik) Indonesia - Kemen PAN & RB</li>
            <li>Terbaik II Nasional Anugerah Nawacita Legislasi 2016 (Perda KIBLA) - Kemenkumham</li>
            <li>Adipura Paripurna - Kementerian LH & Kehutanan</li>
            <li>Peringkat II Nirwasita Tantra Award 2016 - Kementerian LH & Kehutanan</li>
            <li>Pakarti Utama II Tk Nasional Posyandu - PKK Pusat/Kemendagri</li>
            <li>TPID Inovatif 2015 Tk. Kabupaten/kota - Pemerintah Pusat</li>
            <li>Kota Terbaik Koridor Kalimantan - Frontier Consulting Group & Tempo Media Grup</li>
            <li>Kota Potensial Kategori Infrastruktur - Frontier Consulting Group & Tempo Media Grup</li>
            <li>Top Kota Tiap Koridor - Frontier Consulting Group & Tempo Media Grup</li>
            <li>Kalimantan PR Indonesia Media Relation Award and Summit (KALPRIMAS) 2016 - Majalah PR Indonesia & PT Isentia Jakarta</li>
            <li>Bhumandala Award / SIMTARU - Badan Informasi Geospasial</li>
            <li>Kawastara Pawitra - Kemendikbud/ LPPKS</li>
            <li>BNN Award - BNN</li>
            <li>Sanipura Award - Kementerian PMK</li>
            <li>Ki Hajar Award - Kemendikbud</li>
            <li>Natamukti Satria - International Council for Small Business</li>
            <li>Peringkat III Penghargaan Penanaman Pohon Tahun 2015 - Kementerian LHK</li>
            <li>Indonesia Road Safety Award (IRSA) 2016 - Kementerian Perhubungan dan Adira Insurance</li>
            <li>Regional Marketeers Award 2016 - Marketeers dan Indonesia Marketing Association</li>
            <li>Gold Champions WOW Service Excellent Award - Marketeers dan Indonesia Marketing Association</li>
            <li>Gold Champions WOW Service Excellent Award - Marketeers dan Indonesia Marketing Association</li>
            <li>Gold Champions WOW Service Excellent Award - Marketeers dan Indonesia Marketing Association</li>
            <li>Gold Champions WOW Service Excellent Award - Marketeers dan Indonesia Marketing Association</li>
            <li>Opini WTP untuk LKPD tahun 2015 - Kementerian Keuangan RI</li>
            <li>Kota Peduli Hak Azazi Manusia - Kementerian Hukum dan HAM</li>
            <li>Penghargaan Program Langit Biru :Terbaik I kategori Kota Besar Evaluasi Kualitas Udara Perkotaan Tahun 2016 - Kementerian LHK</li>
        </ul>
        </ol>
    </div>
    <div class="award">
        <h2>2015 (30 Penghargaan)</h2>
        <ol>
            <li>Panji Keberhasilan Pembangunan Bidang Pariwisata Kategori Kota</li>
            <li>Panji Keberhasilan Pembangunan Bidang Kepemudaan</li>
            <li>Panji Keberhasilan Pembangunan Bidang Kebudayan</li>
            <li>Panji Keberhasilan Pembangunan Bidang Pendidikan</li>
            <li>Terbaik III Keberhasilan Pembangunan Bidang Bunda PAUD Kategori Penuntasan Satu Desa Satu PAUD</li>
            <li>Panji Keberhasilan Pembangunan Bidang Kinerja Penyelenggaraan Pemerintah Daerah Kategori Kota</li>
            <li>Panji Keberhasilan Pembangunan Bidang Pembinaan Penyelenggaraan Pemerintahan Kelurahan</li>
            <li>Panji Keberhasilan Pembangunan Tim Penggerak PKK berprestasi</li>
            <li>Terbaik II Keberhasilan Pembangunan pengelola bina keluarga balita (BKB) Tahun 2014</li>
            <li>Penghargaan Badan Lingkungan Hidup</li>
            <li>Panji Keberhasilan Pembangunan Bidang Kependudukan</li>
            <li>Panji Keberhasilan Pembangunan Bidang Penyelenggaraan Tata Ruang</li>
            <li>Panji Keberhasilan Pembangunan Bidang Wahana tata Nugraha</li>
            <li>Panji Keberhasilan Pembangunan Bidang Kesehatan</li>
            <li>Panji Keberhasilan Pembangunan Bidang Pembangunan Hukum dan Ham</li>
            <li>Panji Keberhasilan Pembangunan Bidang Keterbukaan Informasi Publik</li>
            <li>Panji Keberhasilan Pembangunan Bidang Perekonomian</li>
            <li>Panji Keberhasilan Pembangunan Bidang Pembangunan Perpustakaan dan Minat Baca</li>
            <li>Terbaik II Keberhasilan Pembangunan Bidang Pencegahaan dan Pemberantasan Korupsi</li>
            <li>Terbaik II Keberhasilan Pembangunan Bidang Daya Saing Daerah</li>
            <li>Terbaik II Keberhasilan Pembangunan Bidang Pengelolaan Keuangan Daerah</li>
            <li>Terbaik II Keberhasilan Pembangunan Bidang Pencegahan dan Pemberantasan Penyalahgunaan dan Peredaran Gelap Narkoba</li>
            <li>Terbaik II Keberhasilan Pembangunan Bidang Penyelenggaraan Penanggulangan Bencana</li>
            <li>Terbaik II Keberhasilan Pembangunan Bidang Peningkatan E-Government</li>
            <li>Terbaik III Keberhasilan Pembangunan Bidang Kelautan dan Perikanan</li>
            <li>Predikat Kepatuhan Standar Pelayanan Publik UU 25 Tahun 2009 Tentang Pelayanan Publik (PDAM Kota Balikpapan)</li>
            <li>Predikat Kepatuhan Standar Pelayanan Publik UU 25 Tahun 2009 Tentang Pelayanan Publik (Kecamatan Balikpapan Selatan)</li>
            <li>Predikat Kepatuhan Standar Pelayanan Publik UU 25 Tahun 2009 Tentang Pelayanan Publik (Dinas Kependudukan dan Catatan Sipil)</li>
            <li>Predikat Kepatuhan Standar Pelayanan Publik UU 25 Tahun 2009 Tentang Pelayanan Publik (Dinas Tata Kota dan Perumahan)</li>
            <li>Piagam Penghargaan Terbaik I Pemeringkatan Keterbukaan Informasi Publik dari Komisi Informasi Provinsi Kalimantan Timur</li>
        </ol>
    </div>
    <div class="award">
        <h2>2014 (42 Penghargaan)</h2>
        <ol>
            <li>Panji Keberhasilan Pembangunan Bidang Kinerja Penyelenggara Pemerintah Daerah Kategori Kota</li>
            <li>Panji Keberhasilan Pembangunan Bidang Lingkungan Hidup</li>
            <li>Panji Keberhasilan Pembangunan Bidang Perekonomian</li>
            <li>Panji Keberhasilan Pembangunan Bidang Daya Saing Daerah</li>
            <li>Panji Keberhasilan Pembangunan Bidang Perhubungan Wahana Tata Nugraha</li>
            <li>Panji Keberhasilan Pembangunan Bidang Keolahragaan</li>
            <li>Panji Keberhasilan Pembangunan Bidang Kesehatan</li>
            <li>Panji Keberhasilan Pembangunan Bidang Pembinaan Penyelenggaraan Pemerintahan Kelurahan</li>
            <li>Panji Keberhasilan Pembangunan Bidang Kebudayaan dan Pariwisata Kategori Kota</li>
            <li>Terbaik II Keberhasilan Pembangunan bidang pencegahan dan pemberantasan korupsi</li>
            <li>Terbaik II Keberhasilan Pembangunan bidang perpustakaan dan minat baca</li>
            <li>Terbaik II Keberhasilan Pembangunan bidang administrasi kategori kota</li>
            <li>Terbaik II Keberhasilan Pembangunan bidang perdagangan</li>
            <li>Terbaik II Keberhasilan Pembangunan bidang pemeringkatan e-government</li>
            <li>Terbaik II Keberhasilan Pembangunan pemeringkatan pejabat pengelola informasi dan dokumentasi (PPID)</li>
            <li>Terbaik III Keberhasilan Pembangunan bidang koperasi</li>
            <li>Terbaik III Keberhasilan Pembangunan bidang ketenagakerjaan</li>
            <li>Terbaik III Keberhasilan Pembangunan bidang pemberdayaan perempuan dan perlindungan anak</li>
            <li>Terbaik III Keberhasilan Pembangunan bidang pembinaan teknologi tepat guna dan pos pelayanan teknologi (posyantek)</li>
            <li>Terbaik III Keberhasilan Pembangunan bidang pelaksanaan program kependudukan dan keluarga berencana</li>
            <li>Terbaik III Keberhasilan Pembangunan bidang pembangunan hukum dan HAM</li>
            <li>Tokoh Pembina Koperasi</li>
            <li>Kepala Daerah Peduli Pendidikan</li>
            <li>Penilaian Laporan Penyelenggaraan Pemerintah Daerah (LPPD)</li>
            <li>The 1st Champion Overall Society Category dalam ajang Indonesia Digital Society Award (IDSA)</li>
            <li>Juara Harapan II Pelaksana terbaik Gotong Royong Masyarakat Tk. Nasional Dalam Rangka BBGRM XI (Kelurahan Manggar)</li>
            <li>Adipura Kencana</li>
            <li>Pembina K3 (Kesehatan dan Keselamatan Kerja) Terbaik (Walikota Rizal Effendi)</li>
            <li>Pakarti Madya Terbaik III HATINYA PKK (Kelurahan Margo Mulyo)</li>
            <li>Pakarti Madya II LBS Nasional (RT 41 Kelurahan Sepinggan)</li>
            <li>Predikat Kepatuhan Terhadap Standar Pelayanan Publik (BPMP2T dan RS Sayang Ibu)</li>
            <li>Wahana Tata Nugraha</li>
            <li>Opini Wajar Tanpa Pengecualian (WTP)</li>
            <li>Raskin Award 2014</li>
            <li>Penghargaan Adibahasa Terbaik Pertama</li>
            <li>ESC Award</li>
            <li>National Procurement Award 2014</li>
            <li>Indonesian Road Safety Award 2014 (IRSA)</li>
            <li>Juara II Anugerah Media Humas 2014 kategori Penerbitan Media Internal</li>
            <li>Pencapaian Terbaik I Tahun 2014, Kategori kota, Sub Bidang Penyelenggaraan Penataan Ruang</li>
            <li>Penghargaan Citra Abadi Kesehatan Tahun 2014 (Walikota Rizal Effendi sebagai Kepala Daerah dengan capaian MDGs Kesehatan Terbaik)</li>
            <li>Kota Peduli HAM</li>
        </ol>
    </div>
    <div class="award">
        <h2>2013 (49 Penghargaan)</h2>
        <ol>
            <li>Panji Keberhasilan Pembangunan Bidang Pembangunan Hukum dan Hak Asasi Manusia</li>
            <li>Panji Keberhasilan Pembangunan Bidang Penyelenggara Pemerintah daerah Kategori Kota</li>
            <li>Panji Keberhasilan Pembangunan Bidang Kebudayaan dan Kepariwisataan</li>
            <li>Panji Keberhasilan Pembangunan Bidang Perekonomian</li>
            <li>Panji Keberhasilan Pembangunan Bidang Perdagangan</li>
            <li>Panji Keberhasilan Pembangunan Bidang Perhubungan dan Wahana Tata Nugraha</li>
            <li>Panji Keberhasilan Pembangunan Bidang Ketenagakerjaan</li>
            <li>Panji Keberhasilan Pembangunan Bidang Pemberdayaan Perempuan dan Perlindungan Anak</li>
            <li>Panji Keberhasilan Pembangunan Bidang Pelaksanaan Program Kependudukan dan Keluarga Berencana</li>
            <li>Panji Keberhasilan Pembangunan Bidang Tim Penggerak PKK Berprestasi</li>
            <li>Trophy Keberhasilan Pembangunan Bidang Lingkungan Hidup (Terbaik II)</li>
            <li>Trophy Keberhasilan Pembangunan Bidang Pemeringkatan E-Government (Terbaik III)</li>
            <li>Trophy Keberhasilan Pembangunan Bidang Kelautan dan Perikanan (Terbaik II)</li>
            <li>Trophy Keberhasilan Pembangunan Bidang Pendidikan (Terbaik II)</li>
            <li>Trophy Keberhasilan Pembangunan Bidang Kesehatan (Terbaik II)</li>
            <li>Trophy Keberhasilan Pembangunan Bidang Administrasi Kependudukan (Terbaik III)</li>
            <li>Trophy Keberhasilan Pembangunan Bidang Kesejahteraan Sosial (Terbaik II)</li>
            <li>Trophy Keberhasilan Pembangunan Bidang Gerakan Pramuka (Terbaik III)</li>
            <li>Trophy Keberhasilan Pembangunan Bidang Keolahragaan (Terbaik II)</li>
            <li>Trophy Keberhasilan Pembangunan Bidang Daya Saing Daerah (Terbaik III)</li>
            <li>Piagam Lurah Berprestasi (M. Idris, Lurah Manggar Baru)</li>
            <li>Piagam Kelurahan Berprestasi (Terbaik III)</li>
            <li>Piagam Kelompok Tani (Terbaik I) (Gabungan Kelompok Tani “Tani Makmur”)</li>
            <li>Piagam Penghargaan Pelaksana Program (Terbaik I) (RS Bersalin Sayang Ibu Balikpapan)</li>
            <li>Piagam penghargaan Pengelola Bina Keluarga Balita (BKB) (Terbaik I) (Tim Penggerak PKK Balikpapan)</li>
            <li>Piagam Penghargaan Posyandu (Terbaik I) (Posyandu Gatra Mulya, Kel. Margo Mulyo, Balikpapan Barat)</li>
            <li>Piagam Pengharagan kepada Ibu Sri Mulyati (warga Gn Samarinda) sebagai Pelaku Usaha Telur Asin Pindang “Jaya Rasa” yang telah berprestasi di tingkat nasional</li>
            <li>Pelaksanaan pelayanan e-KTP terbaik I se-Indonesia Tengah</li>
            <li>Terbaik Pertama IMP (Inovasi Manajemen Perkotaan) Award, bidang Pengelolaan Tata Ruang, Sub Bidang RTH</li>
            <li>Pembina K3 (Kesehatan dan Keselamatan Kerja)</li>
            <li>Wahana Tata Nugraha kategori lalu lintas</li>
            <li>Tim Pengendali inflasi Daerah terbaik se-Indonesia Timur</li>
            <li>Adipura Kencana Kategori Kota Besar</li>
            <li>Juara II Nasional Hatinya PKK</li>
            <li>Adiwiyata Mandiri (SD Kemala Bhayangkari)</li>
            <li>Kalpataru</li>
            <li>Penghargaan Status Lingkungan Hidup Daerah (SLHD)</li>
            <li>Grand Otonomi Award Bid. Pelayanan Publik</li>
            <li>Penghargaan PPID Terbaik</li>
            <li>Ksatria Bhakti Husada (Walikota Rizal Effendi atas upayanya meningkatkan partisipasi masyarakat dalam kegiatan kesehatan)</li>
            <li>Mitra Bhakti Husada (Total E&P Indonesie)</li>
            <li>Swasti Sabha Wiwerda (Forum Kota Sehat (Forkohat) Balikpapan)</li>
            <li>Terbaik Ketiga Partisipasi Penanaman 1 Milyar Pohon, Kategori Kota</li>
            <li>Penghargaan AMPL (Pokja AMPL atas pengembangan gugus AMPL di seluruh kelurahan)</li>
            <li>Penghargaan Indonesian Road Safety Award</li>
            <li>Paramadana Madya Koperasi 2013</li>
            <li>Kota Peduli HAM</li>
            <li>Peringkat III lomba tata kelola kearsipan teladan lembaga kearsipan daerah kabupaten/kota se-kalimantan timur</li>
            <li>Pemenang Pakarti Utama II Kategori Kota Pelaksana Terbaik Pemanfaatan Pekarangan (Hatinya PKK)</li>
        </ol>
    </div>
    <div class="award">
        <h2>2012 (32 Penghargaan)</h2>
        <ol>
            <li>Innovative Government Award</li>
            <li>Panji Keberhasilan Pembangunan Bidang Lingkungan Hidup</li>
            <li>Panji Keberhasilan Pembangunan Bidang Perekonomian</li>
            <li>Panji Keberhasilan Pembangunan Bidang Kelautan dan Perikanan</li>
            <li>Panji Keberhasilan Pembangunan Bidang Perhubungan (WTN)</li>
            <li>Panji Keberhasilan Pembangunan Bidang Pembinaan Olahraga</li>
            <li>Tropy Keberhasilan Pembangunan Bidang Kinerja Penyelenggaraan Pemerintahan Daerah</li>
            <li>Tropy Keberhasilan Pembangunan Bidang Pemeringkatan E-Government</li>
            <li>Tropy Keberhasilan Pembangunan Bidang Perizinan Terpadu Satu Pintu</li>
            <li>Tropy Keberhasilan Pembangunan Bidang Pengelolaan Keuangan Daerah</li>
            <li>Tropy Keberhasilan Pembangunan Bidang Kesehatan</li>
            <li>Tropy Keberhasilan Pembangunan Bidang Perpustakaan dan Minat Baca</li>
            <li>Tropy Keberhasilan Pembangunan Bidang Pembinaan Generasi Muda</li>
            <li>Tropy Keberhasilan Pembangunan Bidang Gerakan Pramuka</li>
            <li>Penghargaan Tim Pengendali Inflasi daerah</li>
            <li>Wahana Tata Nugraha</li>
            <li>Adipura (ke-15 yang diterima kota Balikpapan)</li>
            <li>Adiwiyata Mandiri (SDN 001 Balikpapan Selatan, SMPN 1, dan SMAN 1)</li>
            <li>Adiwiyata Nasional (SD Kemala Bhayangkari)</li>
            <li>Status Lingkungan Hidup Daerah</li>
            <li>Peringkat III Taman Kota Se-Indonesia</li>
            <li>LPPKS Award (atas penerapan Permendiknas No. 28/2010)</li>
            <li>Pengelolaan Kepegawaian Terbaik</li>
            <li>Pakarti Madya</li>
            <li>Kota Layak Anak Kategori Pratama</li>
            <li>Daerah Tertib Ukur</li>
            <li>Pengelolaan DAS Manggar</li>
            <li>Inovasi Pengolahan Produk Peternakan berdaya saing (Pelaku usaha telur asin JAYA RASA, Ibu Sri Mulyani, warga Gn. Samarinda)</li>
            <li>Grand Award Citra Produk Pertanian berdaya saing 2013 (Pelaku usaha telur asin JAYA RASA, Ibu Sri Mulyani, warga Gn. Samarinda)</li>
            <li>Pelaksana Terbaik Program Rumah Sakit Sayang Ibu (RSSI) Tingkat Provinsi Kalimantan Timur</li>
            <li>Award Indonesia Bermutu (Dinas Pendapatan Daerah)</li>
            <li>Piagam Penghargaan (Kepala Disdukcapil Drs. Chairil Anwar atas keberhasilan pencapaian target perekaman e-KTP lebih cepat dari tenggat waktu)</li>
          </ul>
        </ol>
    </div>
    <div class="award">
        <h2>2011 (8 Penghargaan)</h2>
        <ol>
            <li>Peringkat 2 Environmentally Sustainable Cities</li>
            <li>Adiwiyata Mandiri</li>
            <li>Adiwiyata Madya</li>
            <li>Adiwiyata Pratama</li>
            <li>Peringkat Pertama Lomba Video Sanitasi City (Sanitation Summit)</li>
            <li>Swasti Saba Wistara</li>
            <li>Adi Bhakti Mina Bahari</li>
            <li>Innovative Government Award</li>
        </ol>
    </div>
    <div class="award">
        <h2>2010 (34 Penghargaan)</h2>
        <ol>
            <li>Panji Keberhasilan Pembangunan Bidang Pendidikan</li>
            <li>Panji Keberhasilan Pembangunan Bidang Pariwisata</li>
            <li>Panji Keberhasilan Pembangunan Bidang Kesehatan</li>
            <li>Panji Keberhasilan Pembangunan Bidang Lingkungan Hidup</li>
            <li>Panji Keberhasilan Pembangunan Bidang Administrasi Kependudukan</li>
            <li>Panji Keberhasilan Pembangunan Bidang Kinerja Penyelenggaraan Pemerintahan Daerah</li>
            <li>Panji Keberhasilan Pembangunan Bidang Pembinaan Generasi Muda/Pramuka</li>
            <li>Trophy Tertib Lalu Lintas dan Angkutan Kota</li>
            <li>Trophy Keberhasilan Pembangunan Bidang Iklim Investasi (Terbaik II)</li>
            <li>Trophy Bidang Pemeringkatan e-Government</li>
            <li>Otonomi Award (Penghargaan Bidang Pelayanan Publik Kategori Administrasi)</li>
            <li>Otonomi Award (Grand Kategori Bidang Pelayanan)</li>
            <li>Adipura</li>
            <li>Adiwiyata Mandiri</li>
            <li>Adiwiyata Pratama</li>
            <li>Wahana Tata Nugraha (ke-15)</li>
            <li>Neraca Status Lingkungan Hidup</li>
            <li>Plakat Kebersihan</li>
            <li>Penerbitan Peraturan Daerah Pemberian Akta Kelahiran Bebas Bea</li>
            <li>Satyalancana Pembangunan</li>
            <li>Penghijauan dan Konservasi Alam Wana Lestari</li>
            <li>Pekerjaan Umum Cipta Karya</li>
            <li>Amal Bhakti Kementerian Agama Bidang Pembinaan Kerukunan Umat Beragama</li>
            <li>Panji Keberhasilan Pembangunan Bidang Pendidikan</li>
            <li>Panji Keberhasilan Pembangunan Bidang Kesehatan</li>
            <li>Panji Keberhasilan Pembangunan Bidang Lingkungan Hidup</li>
            <li>Panji Keberhasilan Pembangunan Bidang Kelautan & Perikanan</li>
            <li>Panji Keberhasilan Pembangunan Bidang Kinerja Ekonomi Daerah</li>
            <li>Panji Keberhasilan Pembangunan Bidang Tim Penggerak PKK Berprestasi</li>
            <li>Trophy Ketenagakerjaan</li>
            <li>Trophy Pengelolaan Keuangan Daerah</li>
            <li>Trophy Peningkatan E-Government</li>
            <li>Trophy Kinerja Penyelenggaraan Pemerintah Daerah</li>
            <li>Trophy Minat Baca / Perpustakaan Administrasi Kependudukan</li>
        </ol>
    </div>
    <div class="award">
        <h2>2009 (5 Penghargaan)</h2>
        <ol>
            <li>Zakat Award Bidang Kelembagaan Terbaik</li>
            <li>Raskin Award</li>
            <li>Adipura XIV</li>
            <li>Kalpataru</li>
            <li>Adiwiyata</li>
        </ol>
    </div>
    <div class="award">
        <h2>2008 (8 Penghargaan)</h2>
        <ol>
            <li>Piala Citra Pelayanan Prima (Kelurahan Gn Bahagia)</li>
            <li>Piagam Citra Pelayanan Prima (Kecamatan Balikpapan Tengah)</li>
            <li>Piagam Citra Pelayanan Prima (Unit Pelayanan Perempuan dan Anak Polresta Balikpapan)</li>
            <li>Karya Inovasi Tata Ruang</li>
            <li>Penghargaan ISO 9001 Versi 2000 (Kecamatan Balikpapan Selatan)</li>
            <li>Penghargaan ISO 9001 Versi 2001 (Puskesmas Klandasan Ilir)</li>
            <li>Piagam Citra Pelayanan Prima (Bandara Internasional Sepinggan)</li>
            <li>Trophy Manggala Karya Bhakti Husada (MKBH Arutala)</li>
        </ol>
    </div>
    <div class="award">
        <h2>2007 (5 Penghargaan)</h2>
        <ol>
            <li>Adipura XII</li>
            <li>Adiwiyata (Penghargaan Sekolah Berwawasan Lingkungan) (SMPN 1 Balikpapan)</li>
            <li>Sertifikat Kalpataru</li>
            <li>Status Lingkungan Hidup Daerah</li>
            <li>Wahana Tata Nugraha (ke-14)</li>
        </ol>
    </div>
    <div class="award">
        <h2>2006 (8 Penghargaan)</h2>
        <ol>
            <li>Penganugrahan Ekonomi Award</li>
            <li>Adipura XI</li>
            <li>Kalpataru</li>
            <li>KPPOD (Penghargaan dari Komite Pemantau Pelaksanaan Otonomi Daerah tahun 2007, Bid. Penyelenggaraan Pemerintahan)</li>
            <li>Piala Citra Pelayanan Prima (Kecamatan Balikpapan Selatan)</li>
            <li>Piala Citra Pelayanan Prima (RS Bersalin Sayang Ibu)</li>
            <li>Piala Citra Pelayanan Prima (Samsat Kota Balikpapan)</li>
            <li>Wahana Tata Nugraha (ke-13)</li>
        </ol>
    </div>
    <div class="award">
        <h2>2005 (4 Penghargaan)</h2>
        <ol>
            <li>Swasti Saba</li>
            <li>Adipura X</li>
            <li>Tata Ruang</li>
            <li>Wahana Tata Nugraha (ke-12)</li>
        </ol>
    </div>
    <div class="award">
        <h2>2004 (2 Penghargaan)</h2>
        <ol>
            <li>Wahana Tata Nugraha (ke-11)</li>
            <li>Adipura IX (Kategori Kota Besar)</li>
        </ol>
    </div>
    <div class="award">
        <h2>2003 (2 Penghargaan)</h2>
        <ol>
            <li>Bangun Praja Lingkungan Terbaik I (Penghargaan Bidang Kebersihan, Lingkungan Hidup, Amdal, Hutan Kota, dan Mangrove)</li>
            <li>Wahana Tata Nugraha (ke-10)</li>
        </ol>
    </div>
    <div class="award">
        <h2>2002 (1 Penghargaan)</h2>
        <ol>
            <li>Wahana Tata Nugraha (ke-9)</li>
        </ol>
    </div>
    <div class="award">
        <h2>2001 (2 Penghargaan)</h2>
        <ol>
            <li>Wahana Tata Nugraha (ke-8)</li>
            <li>Neraca Kualitas Lingkungan Hidup Daerah</li>
        </ol>
    </div>
    <div class="award">
        <h2>2000 (3 Penghargaan)</h2>
        <ol>
            <li>Neraca Kualitas Lingkungan Hidup Daerah</li>
            <li>Kalpataru (Kategori Pembina Lingkungan)</li>
            <li>Wahana Tata Nugraha (ke-7)</li>
        </ol>
    </div>
    <div class="award">
        <h2>1997 (17 Penghargaan)</h2>
        <ol>
            <li>Adipura VIII</li>
            <li>Wahana Tata Nugraha (ke-6)</li>
            <li>Peduli Lingkungan (Pondok Pesantren Hidayatullah)</li>
            <li>Penghijauan Sejuta Pohon</li>
            <li>Wiyata Mandala</li>
            <li>Peremajaan Perumahan dan Pemukiman (LKMD GSI)</li>
            <li>Manggala Penghijauan Terbaik</li>
            <li>Sertifikat Pemenang Lomba Konservasi Sumber Daya Alam</li>
            <li>Penghijauan Sejuta Pohon</li>
            <li>Wiyata Mandala (SMP 1)</li>
            <li>Takesra dan Kukesra (BKKBN)</li>
            <li>Abdi Satya Bhakti (PLN Cab. Balikpapan)</li>
            <li>Pembinaan Karang Taruna</li>
            <li>Adhikara Grahatama</li>
            <li>Manggala Penghijauan Terbaik</li>
            <li>Sertifikat Pemenang Lomba Konservasi Sumber Daya Alam</li>
            <li>Gerakan Hari Sayang Ibu</li>
        </ol>
    </div>
    <div class="award">
        <h2>1996 (4 Penghargaan)</h2>
        <ol>
            <li>Adipura VII</li>
            <li>Wahana Tata Nugraha (ke-5)</li>
            <li>Pengelola Terbaik UPPKS Untuk LGB II</li>
            <li>Abdi Satya Bhakti (PT Telkom)</li>
        </ol>
    </div>
    <div class="award">
        <h2>1995 (4 Penghargaan)</h2>
        <ol>
            <li>Adipura VI</li>
            <li>Wahana Tata Nugraha (ke-4)</li>
            <li>Upakarti</li>
            <li>Penghargaan bidang Perumahan dan Pemukiman dari Menteri Perumahan Rakyat</li>
        </ol>
    </div>
    <div class="award">
        <h2>1994 (14 Penghargaan)</h2>
        <ol>
            <li>Adipura V</li>
            <li>Wahana Tata Nugraha (ke-3)</li>
            <li>Dokter Teladan</li>
            <li>UKS</li>
            <li>Klinik Sayang Bayi</li>
            <li>Rumah Sakit Sayang Bayi</li>
            <li>Rumah Sakit Sayang Bayi (Kategori Swasta)</li>
            <li>Balita Sehat</li>
            <li>Bina Keluarga Balita</li>
            <li>Lomba Gerakan Ibu Sehat Sejahtera</li>
            <li>Unit Percontohan Usaha Pelestarian Sumber Daya Alam</li>
            <li>Petugas Lapangan Penghijauan Teladan (PLP)</li>
            <li>Lomba Taman Sekolah</li>
            <li>Lomba Taman Pasar</li>
        </ol>
    </div>
    <div class="award">
        <h2>1993 (14 Penghargaan)</h2>
        <ol>
            <li>Adipura V</li>
            <li>Wahana Tata Nugraha (ke-3)</li>
            <li>Dokter Teladan</li>
            <li>UKS</li>
            <li>Klinik Sayang Bayi</li>
            <li>Rumah Sakit Sayang Bayi</li>
            <li>Rumah Sakit Sayang Bayi (Kategori Swasta)</li>
            <li>Balita Sehat</li>
            <li>Bina Keluarga Balita</li>
            <li>Lomba Gerakan Ibu Sehat Sejahtera</li>
            <li>Unit Percontohan Usaha Pelestarian Sumber Daya Alam</li>
            <li>Petugas Lapangan Penghijauan Teladan (PLP)</li>
            <li>Lomba Taman Sekolah</li>
            <li>Lomba Taman Pasar</li>
        </ol>
    </div>
    <div class="award">
        <h2>1992 (8 Penghargaan)</h2>
        <ol>
            <li>Adipura III</li>
            <li>Wahana Tata Nugraha (ke-1)</li>
            <li>Puskesmas Terbaik</li>
            <li>Posyandu Terbaik</li>
            <li>Bayi Sehat</li>
            <li>UKS</li>
            <li>Unit Percontohan Usaha Pelestarian Sumber Daya Alam</li>
            <li>Upakarti</li>
        </ol>
    </div>
    <div class="award">
        <h2>1991 (6 Penghargaan)</h2>
        <ol>
            <li>Adipura II</li>
            <li>Puskesmas Terbaik</li>
            <li>Posyandu Terbaik</li>
            <li>Bayi Sehat</li>
            <li>Toga</li>
            <li>Unit Percontohan Usaha Pelestarian Sumber Daya Alam</li>
        </ol>
    </div>
    <div class="award">
        <h2>1990 (1 Penghargaan)</h2>
        <ol>
            <li>Sertifikat Adipura I</li>
        </ol>
    </div>
    <div class="award">
        <h2>1987 (1 Penghargaan)</h2>
        <ol>
            <li>Parasamiya Purna Karya Nugraha (Pembangunan di seluruh aspek dan partisipasi masyarakat dalam menyukseskan pembangunan)</li>
        </ol>
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
</main>
@endsection
