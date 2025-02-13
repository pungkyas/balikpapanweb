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
    /* deskripsi */
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
        /* balikpapan */
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
        Realisasi Anggaran
    </div>
<div class="containerr">
<h1>Rencana Pembangunan</h1>
<div class="document">
    <h2>Rencana Pembangunan Jangka Panjang Daerah</h2>
    <div class="document">
        <h2>Realisasi Anggaran Tahun 2023</h2>
        <div class="document">
            <h2>Realisasi Anggaran Bulan Januari</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/REALISASI_ANGGARAN_2023/1.%20Lap.%20Realisasi%20APBD%20Januari%202023.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>        <div class="document">
            <h2>Realisasi Anggaran Bulan Februari</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/REALISASI_ANGGARAN_2023/2.%20Lap.%20Realisasi%20APBD%20Februari%202023.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>        <div class="document">
            <h2>Realisasi Anggaran Bulan Maret</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/REALISASI_ANGGARAN_2023/3.%20Lap.%20Realisasi%20APBD%20Maret%202023.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>        <div class="document">
            <h2>Realisasi Anggaran Bulan April</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/REALISASI_ANGGARAN_2023/4.%20Lap.%20Realisasi%20APBD%20April%202023.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>        <div class="document">
            <h2>Realisasi Anggaran Bulan Mei</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/REALISASI_ANGGARAN_2023/5.%20Lap.%20Realisasi%20APBD%20Mei%202023.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>        <div class="document">
            <h2>Realisasi Anggaran Bulan Juni</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/REALISASI_ANGGARAN_2023/6.%20Lap.%20Realisasi%20APBD%20Juni%202023.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>        <div class="document">
            <h2>Realisasi Anggaran Bulan Juli</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/REALISASI_ANGGARAN_2023/7.%20Lap.%20Realisasi%20APBD%20Juli%202023.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>        <div class="document">
            <h2>Realisasi Anggaran Bulan Agustus</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/REALISASI_ANGGARAN_2023/8.%20Lap.%20Realisasi%20APBD%20Agustus%202023.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>        <div class="document">
            <h2>Realisasi Anggaran Bulan September</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/REALISASI_ANGGARAN_2023/9.%20Lap.%20Realisasi%20APBD%20September%202023.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
    </div>
    <div class="document">
        <h2>Realisasi Anggaran Tahun 2024</h2>
        <div class="document">
            <h2>Realisasi Anggaran Tahun (2024)/Siperangko</h2>
            <div class="buttons">
                <a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2024/REALISASI_SIPERANGKO.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Laporan Realisasi Anggaran (LRA)</h2>
            <div class="document">
                <h2>Badan Kepegawaian dan Pengembangan Sumber Daya Manusia</h2>
                <div class="buttons">
                    <a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2024/LRA_Konsolidasi_2024/BADAN%20KEPEGAWAIAN%20DAN%20PENGEMBANGAN%20SUMBER%20DAYA%20MANUSIA.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
                </div>
            </div>
            <div class="document">
                <h2>Badan Penanggulangan Bencana Daerah</h2>
                <div class="buttons">
                    <a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2024/LRA_Konsolidasi_2024/BADAN%20PENANGGULANGAN%20BENCANA%20DAERAH.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
                </div>
            </div>
            <div class="document">
                <h2>Badan Keuangan Daerah Dan Aset Daerah</h2>
                <div class="buttons">
                    <a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2024/LRA_Konsolidasi_2024/BADAN%20KEUANGAN%20DAN%20ASET%20DAERAH.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
                </div>
            </div>
            <div class="document">
                <h2>Badan Pengelola Pajak Daerah dan Retribusi Daerah</h2>
                <div class="buttons">
                    <a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2024/LRA_Konsolidasi_2024/BADAN%20KEUANGAN%20DAN%20ASET%20DAERAH.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
                </div>
            </div>
            <div class="document">
                <h2>Badan Perencanaan Pembangunan Daerah Penelitian dan Pengembangan</h2>
                <div class="buttons">
                    <a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2024/LRA_Konsolidasi_2024/BADAN%20PERENCANAAN%20PEMBANGUNAN%20DAERAH%20PENELITIAN%20DAN%20PENGEMBANGAN.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
                </div>
            </div>
            <div class="document">
                <h2>Dinas Pendidikan dan Kebudayaan</h2>
                <div class="buttons">
                    <a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2024/LRA_Konsolidasi_2024/DINAS%20PENDIDIKAN%20DAN%20KEBUDAYAAN.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
                </div>
            </div>
            <div class="document">
                <h2>Dinas Kesehatan</h2>
                <div class="buttons">
                    <a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2024/LRA_Konsolidasi_2024/DINAS%20KESEHATAN.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
                </div>
            </div>
            <div class="document">
                <h2>Dinas Pekerjaan Umum</h2>
                <div class="buttons">
                    <a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2024/LRA_Konsolidasi_2024/DINAS%20PEKERJAAN%20UMUM.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
                </div>
            </div>
            <div class="document">
                <h2>Dinas Perumahan dan Permukiman</h2>
                <div class="buttons">
                    <a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2024/LRA_Konsolidasi_2024/DINAS%20PERUMAHAN%20DAN%20PERMUKIMAN.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
                </div>
            </div>
            <div class="document">
                <h2>Dinas Sosial</h2>
                <div class="buttons">
                    <a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2024/LRA_Konsolidasi_2024/DINAS%20SOSIAL.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
                </div>
            </div>
            <div class="document">
                <h2>Dinas Ketenagakerjaan</h2>
                <div class="buttons">
                    <a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2024/LRA_Konsolidasi_2024/DINAS%20KETENAGAKERJAAN.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
                </div>
            </div>
            <div class="document">
                <h2>Dinas Pemberdayaan Perempuan Perlindungan Anak dan Keluarga Berencana</h2>
                <div class="buttons">
                    <a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2024/LRA_Konsolidasi_2024/DINAS%20PEMBERDAYAAN%20PEREMPUAN%20,%20PERLINDUNGAN%20ANAK%20DAN%20KELUARGA%20BERENCANA.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
                </div>
            </div>
            <div class="document">
                <h2>Dinas Pertanahan dan Penataaan Ruang</h2>
                <div class="buttons">
                    <a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2024/LRA_Konsolidasi_2024/DINAS%20PERTANAHAN%20DAN%20PENATAAN%20RUANG.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
                </div>
            </div>
            <div class="document">
                <h2>Dinas Lingkungan Hidup</h2>
                <div class="buttons">
                    <a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2024/LRA_Konsolidasi_2024/DINAS%20LINGKUNGAN%20HIDUP.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
                </div>
            </div>
            <div class="document">
                <h2>Dinas Kependudukan dan Pencatatan Sipil</h2>
                <div class="buttons">
                    <a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2024/LRA_Konsolidasi_2024/DINAS%20KEPENDUDUKAN%20DAN%20PENCATATAN%20SIPIL.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
                </div>
            </div>
            <div class="document">
                <h2>Dinas Perhubungan</h2>
                <div class="buttons">
                    <a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2024/LRA_Konsolidasi_2024/DINAS%20PERHUBUNGAN.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
                </div>
            </div>
            <div class="document">
                <h2>Dinas Komunikasi dan Informatika</h2>
                <div class="buttons">
                    <a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2024/LRA_Konsolidasi_2024/DINAS%20KOMUNIKASI%20DAN%20INFORMATIKA.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
                </div>
            </div>
            <div class="document">
                <h2>Dinas Koperasi, UMKM dan Perindustrian</h2>
                <div class="buttons">
                    <a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2024/LRA_Konsolidasi_2024/DINAS%20KOPERASI,%20USAHA%20MIKRO,%20KECIL,%20MENENGAH%20DAN%20PERINDUSTRIAN.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
                </div>
            </div>
            <div class="document">
                <h2>Dinas Penanamaan Modal dan Perizinan Terpadu</h2>
                <div class="buttons">
                    <a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2024/LRA_Konsolidasi_2024/DINAS%20PENANAMAN%20MODAL%20DAN%20PELAYANAN%20TERPADU%20SATU%20PINTU.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
                </div>
            </div>
            <div class="document">
                <h2>Dinas Perpustakaan dan Arsip</h2>
                <div class="buttons">
                    <a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2024/LRA_Konsolidasi_2024/DINAS%20PERPUSTAKAAN%20DAN%20ARSIP.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
                </div>
            </div>
            <div class="document">
                <h2>Dinas Pemuda Olahraga dan Pariwisata</h2>
                <div class="buttons">
                    <a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2024/LRA_Konsolidasi_2024/DINAS%20PEMUDA,%20OLAH%20RAGA%20DAN%20PARIWISATA.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
                </div>
            </div>
            <div class="document">
                <h2>Dinas Pangan, Pertanian, dan Perikanan</h2>
                <div class="buttons">
                    <a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2024/LRA_Konsolidasi_2024/DINAS%20PANGAN,%20PERTANIAN%20DAN%20PERIKANAN.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
                </div>
            </div>
            <div class="document">
                <h2>Dinas Perdagangan</h2>
                <div class="buttons">
                    <a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2024/LRA_Konsolidasi_2024/DINAS%20PERDAGANGAN.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
                </div>
            </div>
            <div class="document">
                <h2>Inspektorat</h2>
                <div class="buttons">
                    <a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2024/LRA_Konsolidasi_2024/INSPEKTORAT.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
                </div>
            </div>
            <div class="document">
                <h2>Badan Kesatuan Bangsa dan Politik</h2>
                <div class="buttons">
                    <a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2024/LRA_Konsolidasi_2024/BADAN%20KESATUAN%20BANGSA%20DAN%20POLITIK.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
                </div>
            </div>
            <div class="document">
                <h2>Satuan Polisi Pamong Praja</h2>
                <div class="buttons">
                    <a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2024/LRA_Konsolidasi_2024/SATUAN%20POLISI%20PAMONG%20PRAJA.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
                </div>
            </div>
            <div class="document">
                <h2>Sekretaris Daerah</h2>
                <div class="buttons">
                    <a href="#"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
                </div>
            </div>
            <div class="document">
                <h2>Sekretaris DPRD</h2>
                <div class="buttons">
                    <a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2024/LRA_Konsolidasi_2024/SEKRETARIAT%20DPRD.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
                </div>
            </div>
            <div class="document">
                <h2>Kecamatan Balikpapan Barat</h2>
                <div class="buttons">
                    <a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2024/LRA_Konsolidasi_2024/KECAMATAN%20BALIKPAPAN%20BARAT.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
                </div>
            </div>
            <div class="document">
                <h2>Kecamatan Balikpapan Tengah</h2>
                <div class="buttons">
                    <a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2024/LRA_Konsolidasi_2024/KECAMATAN%20BALIKPAPAN%20TENGAH.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
                </div>
            </div>
            <div class="document">
                <h2>Kecamatan Balikpapan Kota</h2>
                <div class="buttons">
                    <a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2024/LRA_Konsolidasi_2024/KECAMATAN%20BALIKPAPAN%20KOTA.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
                </div>
            </div>
            <div class="document">
                <h2>Kecamatan Balikpapan Utara</h2>
                <div class="buttons">
                    <a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2024/LRA_Konsolidasi_2024/KECAMATAN%20BALIKPAPAN%20UTARA.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
                </div>
            </div>
            <div class="document">
                <h2>Kecamatan Balikpapan Selatan</h2>
                <div class="buttons">
                    <a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2024/LRA_Konsolidasi_2024/KECAMATAN%20BALIKPAPAN%20SELATAN.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
                </div>
            </div>
            <div class="document">
                <h2>Kecamatan Balikpapan Timur</h2>
                <div class="buttons">
                    <a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2024/LRA_Konsolidasi_2024/KECAMATAN%20BALIKPAPAN%20TIMUR.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
                </div>
            </div>
            <div class="document">
                <h2>RSUD Beriman</h2>
                <div class="buttons">
                    <a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2024/LRA_Konsolidasi_2024/RUMAH%20SAKIT%20UMUM%20DAERAH%20KOTA%20BALIKPAPAN.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
                </div>
            </div>
            <div class="document">
                <h2>RSKB Sayang Ibu</h2>
                <div class="buttons">
                    <a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2024/LRA_Konsolidasi_2024/RUMAH%20SAKIT%20IBU%20DAN%20ANAK%20SAYANG%20IBU.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>
<section>
        <div class="section-container">
            <img src="assets/img/balikpapan_nyaman.png" alt="Gambar di Pojok Kanan Bawah" />
         </div>
    </section>

    <section class="responsive-image-section">
    <style>

    </style>
</main>
    <div class="responsive-image-container">
        <!-- Gambar whistleblower -->
        <img
            src="assets/img/batik.png"
            alt="Whistleblower System"
            class="responsive-image">
    </div>
@endsection
