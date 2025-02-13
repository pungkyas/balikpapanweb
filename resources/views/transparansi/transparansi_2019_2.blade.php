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

    h2 {
            padding-bottom: 50px;
            text-align: center;
            color: #034EA1;
        }

        table {
            width: 80%;
            margin: 0 auto 20px;
            border-collapse: collapse;
            font-family: 'Poppins', sans-serif;
        }

        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
            color: #034EA1;
        }

        th {
            background-color: #034EA1;
            color: #ffffff;
        }

        .justify-text {
            text-align: justify;
        }

        .warna-container {
            text-align: center;
        }

        .warna-container img {
            max-width: 50%; /* Ukuran default gambar angkot */
            height: auto;
            display: block;
            margin: 0 auto;
        }

        .maskapai-container img {
            max-width: 15%; /* Mengecilkan ukuran gambar maskapai */
            height: auto;
            display: block;
            margin: 0 auto;
        }

        .warna-container span {
            display: auto;
            margin-top: 5px;
            font-size: 14px;
        }

        .warna-box {
            display: inline-block;
            width: 16px;
            height: 16px;
            background-color: orange;
            border: 1px solid #034EA1;
            vertical-align: middle;
        }

        .warna-box2 {
            display: inline-block;
            width: 16px;
            height: 16px;
            background-color: #D9D9D9;
            border: 1px solid #034EA1;
            vertical-align: middle;
        }

        .warna-box3 {
            display: inline-block;
            width: 16px;
            height: 16px;
            background-color: #76E50E;
            border: 1px solid #034EA1;
            vertical-align: middle;
        }

        .warna-box4 {
            display: inline-block;
            width: 16px;
            height: 16px;
            background-color: #14C2F7;
            border: 1px solid #034EA1;
            vertical-align: middle;
        }

        .warna-box5 {
            display: inline-block;
            width: 16px;
            height: 16px;
            background-color: #FFEE00;
            border: 1px solid #034EA1;
            vertical-align: middle;
        }

        .warna-box6 {
            display: inline-block;
            width: 16px;
            height: 16px;
            background-color: #5188E0;
            border: 1px solid #034EA1;
            vertical-align: middle;
        }

        .warna-box7 {
            display: inline-block;
            width: 16px;
            height: 16px;
            background-color: #00CB44;
            border: 1px solid #034EA1;
            vertical-align: middle;
        }

        .warna-box8 {
            display: inline-block;
            width: 16px;
            height: 16px;
            background-color: #E0CC86;
            border: 1px solid #034EA1;
            vertical-align: middle;
        }

        .section-divider {
            width: 100%;
            margin: 40px auto 20px;
            border-top: 2px solid #034EA1;
            margin-bottom: 50px;
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

        /* Responsive styles */
        @media (max-width: 1024px) {
            table {
                width: 90%;
            }
            th, td {
                padding: 8px;
                font-size: 14px;
            }
        }

        @media (max-width: 768px) {
            table {
                width: 100%;
            }
            th, td {
                padding: 6px;
                font-size: 12px;
            }
            h2 {
                font-size: 18px;
            }
        }

        @media (max-width: 480px) {
            th, td {
                padding: 4px;
                font-size: 10px;
            }
            h2 {
                font-size: 16px;
            }
            .maskapai-container img {
                max-width: 20%; /* Mengecilkan gambar maskapai lebih jauh untuk perangkat kecil */
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
    <section>
    <div class="headerrr">
        Transparansi Pengelolaan Keuangan
    </div>
        <h2>Ringkasan DPA Perangkat Daerah 2019</h2>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Dokumen</th>
                    <th>Tautan</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>1.01.01.01</td><td class="justify-text">Dinas Pendidikan dan Kebudayaan</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/ringkasanDPAOPD2019/1.01_.01_.01_._-_DINAS_PENDIDIKAN_DAN_KEBUDAYAAN_1.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>1.01.02.00</td><td class="justify-text">Dinas Kesehatan</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/ringkasanDPAOPD2019/1.01_.02_.00_._-_DINAS_KESEHATAN_1.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>1.01.02.01</td><td class="justify-text">Rumah Sakit Umum Daerah Kota Balikpapan</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/ringkasanDPAOPD2019/1.01_.02_.01_._-_RUMAH_SAKIT_UMUM_DAERAH_KOTA_BALIKPAPAN_1.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>1.01.02.02</td><td class="justify-text">Rumah Sakit Khusus Bersalin Sayang Ibu</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/ringkasanDPAOPD2019/1.01_.02_.02_._-_RUMAH_SAKIT_KHUSUS_BERSALIN_SAYANG_IBU_1.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>1.01.03.01</td><td class="justify-text">Dinas Pekerjaan Umum</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/ringkasanDPAOPD2019/1.01_.03_.01_._-_DINAS_PEKERJAAN_UMUM_1.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>1.01.04.01</td><td class="justify-text">Dinas Perumahan dan Permukiman</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/ringkasanDPAOPD2019/1.01_.04_.01_._-_DINAS_PERUMAHAN_DAN_PERMUKIMAN_1.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>1.01.05.01</td><td class="justify-text">Badan Penanggulangan Bencana Daerah</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/ringkasanDPAOPD2019/1.01_.05_.01_._-_BADAN_PENANGGULANGAN_BENCANA_DAERAH_1.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>1.01.05.02</td><td class="justify-text">Satuan Polisi Pamong Praja</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/ringkasanDPAOPD2019/1.01_.05_.02_._-_SATUAN_POLISI_PAMONG_PRAJA_1.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>1.01.06.01</td><td class="justify-text">Dinas Sosial</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/ringkasanDPAOPD2019/1.01_.06_.01_._-_DINAS_SOSIAL_1.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>1.02.01.01</td><td class="justify-text">Dinas Ketenagakerjaan</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/ringkasanDPAOPD2019/1.02_.01_.01_._-_DINAS_KETENAGAKERJAAN_1.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>1.02.02.01</td><td class="justify-text">Dinas Pemberdayaan Perempuan, Perlindungan Anak dan Keluarga</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/ringkasanDPAOPD2019/1.02_.02_.01_._-_DINAS_PEMBERDAYAAN_PEREMPUAN,_PERLINDUNGAN_ANAK_DAN_KELUARGA_BERENCANA_.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>1.02.04.01</td><td class="justify-text">Dinas Pertanahan dan Penataan Ruang</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/ringkasanDPAOPD2019/1.02_.04_.01_._-_DINAS_PERTANAHAN_DAN_PENATAAN_RUANG_1.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>1.02.05.01</td><td class="justify-text">Dinas Lingkungan Hidup</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/ringkasanDPAOPD2019/1.02_.05_.01_._-_DINAS_LINGKUNGAN_HIDUP_1.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>1.02.06.01</td><td class="justify-text">Dinas Kependudukan dan Pencatatan Sipil</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/ringkasanDPAOPD2019/1.02_.06_.01_._-_DINAS_KEPENDUDUKAN_DAN_PENCATATAN_SIPIL_1.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>1.02.09.01</td><td class="justify-text">Dinas Perhubungan</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/ringkasanDPAOPD2019/1.02_.09_.01_._-_DINAS_PERHUBUNGAN_1.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>1.02.10.10</td><td class="justify-text">Dinas Komunikasi dan Informatika</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/ringkasanDPAOPD2019/1.02_.10_.10_._-_DINAS_KOMUNIKASI_DAN_INFORMATIKA_1.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>1.02.11.01</td><td class="justify-text">Dinas Koperasi, Usaha Mikro, Kecil, Menengah dan Perindustrian</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/ringkasanDPAOPD2019/1.02_.11_.01_._-_DINAS_KOPERASI,_USAHA_MIKRO,_KECIL,_MENENGAH_DAN_PERINDUSTRIAN_1.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>1.02.12.01</td><td class="justify-text">Dinas Penanaman Modal dan Perizinan Terpadu</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/ringkasanDPAOPD2019/1.02_.12_.01_._-_DINAS_PENANAMAN_MODAL_DAN_PERIJINAN_TERPADU_1.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>1.02.17.01</td><td class="justify-text">Dinas Perpustakaan dan Arsip</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/ringkasanDPAOPD2019/1.02_.17_.01_._-_DINAS_PERPUSTAKAAN_DAN_ARSIP_1.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>2.00.02.01</td><td class="justify-text">Dinas Pemuda, Olahraga dan Pariwisata</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/ringkasanDPAOPD2019/2.00_.02_.01_._-_DINAS_PEMUDA_OLAH_RAGA_DAN_PARIWISATA_1.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>2.00.03.01</td><td class="justify-text">Dinas Pangan, Pertanian dan Perikanan</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/ringkasanDPAOPD2019/2.00_.03_.01_._-_DINAS_PANGAN,_PERTANIAN_DAN_PERIKANAN_1.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>2.00.06.01</td><td class="justify-text">Dinas Perdagangan</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/ringkasanDPAOPD2019/2.00_.06_.01_._-_DINAS_PERDAGANGAN_1.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>3.00.01.01</td><td class="justify-text">Inspektorat Kota</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/ringkasanDPAOPD2019/3.00_.01_.01_._-_INSPEKTORAT_KOTA_1.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>3.00.02.01</td><td class="justify-text">Badan Perencanaan Pembangunan Daerah</td><td><a href="hhttp://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/ringkasanDPAOPD2019/3.00_.02_.01_._-_BADAN_PERENCANAAN_PEMBANGUNAN_DAERAH,_PENELITIAN_DAN_PENGEMBANGAN_.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>3.00.03.01</td><td class="justify-text">Badan Pengelola Keuangan Daerah</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/ringkasanDPAOPD2019/3.00_.03_.01_._-_BADAN_PENGELOLA_KEUANGAN_DAERAH_1.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>3.00.03.02</td><td class="justify-text">Badan Pengelola Pajak Daerah dan Retribusi Daerah</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/ringkasanDPAOPD2019/3.00_.03_.02_._-_BADAN_PENGELOLA_PAJAK_DAERAH_DAN_RETRIBUSI_DAERAH_1.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>3.00.04.01</td><td class="justify-text">Badan Kepegawaian dan Pengembangan SDM</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/ringkasanDPAOPD2019/3.00_.04_.01_._-_BADAN_KEPEGAWAIAN_DAN_PENGEMBANGAN_SUMBER_DAYA_MANUSIA_1.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>4.00.01.01</td><td class="justify-text">Sekretariat Daerah</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/ringkasanDPAOPD2019/4.00_.01_.01_._-_SEKRETARIAT_DAERAH_1.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>4.00.01.02</td><td class="justify-text">Walikota dan Wakil Walikota</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/ringkasanDPAOPD2019/4.00_.01_.02_._-_WALIKOTA_DAN_WAKIL_WALIKOTA_1.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>4.00.02.01</td><td class="justify-text">Sekretariat DPRD</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/ringkasanDPAOPD2019/4.00_.02_.01_._-_SEKRETARIAT_DPRD_.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>4.00.02.02</td><td class="justify-text">Dewan Perwakilan Rakyat Daerah</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/ringkasanDPAOPD2019/4.00_.02_.02_._-_DEWAN_PERWAKILAN_RAKYAT_DAERAH_1.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>5.00.01.01</td><td class="justify-text">Kantor Kesatuan Bangsa dan Politik</td><td><a href="hhttp://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/ringkasanDPAOPD2019/5.00_.01_.01_._-_KANTOR_KESATUAN_BANGSA_DAN_POLITIK_1.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>6.00.01.01</td><td class="justify-text">Kecamatan Balikpapan Barat</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/ringkasanDPAOPD2019/6.00_.01_.01_._-_KECAMATAN_BALIKPAPAN_BARAT_1.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>6.00.01.02</td><td class="justify-text">Kecamatan Balikpapan Tengah</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/ringkasanDPAOPD2019/6.00_.01_.02_._-_KECAMATAN_BALIKPAPAN_TENGAH_1.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>6.00.01.03</td><td class="justify-text">Kecamatan Balikpapan Kota</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/ringkasanDPAOPD2019/6.00_.01_.03_._-_KECAMATAN_BALIKPAPAN_KOTA_1.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>6.00.01.04</td><td class="justify-text">Kecamatan Balikpapan Utara</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/ringkasanDPAOPD2019/6.00_.01_.04_._-_KECAMATAN_BALIKPAPAN_UTARA_1.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>6.00.01.05</td><td class="justify-text">Kecamatan Balikpapan Selatan</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/ringkasanDPAOPD2019/6.00_.01_.05_._-_KECAMATAN_BALIKPAPAN_SELATAN_1.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>6.00.01.06</td><td class="justify-text">Kecamatan Balikpapan Timur</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/ringkasanDPAOPD2019/6.00_.01_.06_._-_KECAMATAN_BALIKPAPAN_TIMUR_1.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
            </tbody>
        </table>
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
