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
        Perencanaan Pembangunan
    </div>
<div class="containerr">
<h1>Rencana Pembangunan</h1>
<div class="document">
    <h2>RENCANA KERJA SKPD TAHUN 2016</h2>
    <div class="document">
        <h2>Sekretariat DPRD Kota Balikpapan</h2>
        <div class="buttons">
            <a href="http://web.balikpapan.go.id/uploaded/member/setwan.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
        </div>
    </div>

    <div class="document">
        <h2>Kantor dan Dinas Kota Balikpapan</h2>
        <div class="document">
            <h2>Kantor Arsip</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/arsip.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Bappeda</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/bappeda.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Badan Kepegawaian Daerah</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/bkd.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Badan Lingkungan Hidup</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/blh.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Badan Penanggulangan Bencana Daerah</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/bpbd.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Badan Pengelola Keuangan dan Aset Daerah</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/bpkad.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>BPMP2T</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/bpmppt.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Disdukcapil</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/capil.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Dinas Pasar</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/dinas_pasar.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Dinas Pendidikan</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/disdik.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Dishub</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/dishub.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Dispenda</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/dispenda.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Disperindagkop</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/disperindagkop.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Disporabudpar</h2>
            <div class="buttons">
                <a href=""><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>DKK</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/dkk.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>DKPP</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/dkpp.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>DPKP</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/dpkp.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>DPU</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/dpu.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>DTKP</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/dtkp.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Inspektorat</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/inspektorat.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>KDAWP</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/kdawp.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Kesbangpol</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/kesbangpol.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>BPMP2KB</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/pemberdayaan.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Rumah Sakit Khusus Bersalin Sayang Ibu</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/rskbsi.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Rumah Sakit Umum Daerah Balikpapan</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/rsud.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Satpol PP</h2>
            <div class="buttons">
                <a href=""><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Disnakersos</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/satpol_pp.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
    </div>

    <div class="document">
        <h2>Sekretariat Daerah Kota Balikpapan</h2>
        <div class="document">
            <h2>Bagian Kesejahteraan Rakyat</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/kesra.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Bagian Keuangan</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/kesra.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Bagian Organisasi</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/organisasi.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Bagian Pembangunan</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/pembangunan.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Bagian Pemerintahan</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/pemerintahan.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Bagian Perekonomian</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/ekonomi.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Bagian Hukum</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/hukum.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Bagian Humas dan Protokol</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/humpro.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Bagian Umum dan Perlengkapan</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/umper.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
    </div>

    <div class="document">
        <h2>Kelurahan</h2>
        <div class="document">
            <h2>Kel. Baru Ilir</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/kel_baru_ilir.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Kel. Baru Tengah</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/kel_baru_tengah.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Kel. Baru Ulu</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/kel_baru_ulu.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Kel. Batu Ampar</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/kel_batu_ampar.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Kel. Damai Bahagia</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/kel_damai_bahagia.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Kel. Damai Baru</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/kel_damai_baru.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Kel. Graha Indah</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/kel_graha_indah.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Kel. Gunung Bahagia</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/kel_gunung_bahagia.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Kel. Gunung Samarinda Baru</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/kel_gunung_samarinda_baru.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Kel. Gunung Samarinda</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/kel_gunung_samarinda.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Kel. Gunung Sari Ilir</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/kel_gunung_sari_ilir.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Kel. Gunung Sari Ulu</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/kel_klandasan_ulu.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Kel. Karang Jati</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/kel_karang_jati.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Kel. Karang Joang</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/kel_karang_joang.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Kel. Karang Rejo</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/kel_karang_rejo.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Kel. Kariangau</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/kel_kariangau.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Kel. Klandasan Ilir</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/kel_klandasan_ilir.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Kel. Klandasan Ulu</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/kel_klandasan_ulu.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Kel. Lamaru</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/kel_lamaru.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Kel. Manggar Baru</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/kel_manggar_baru.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Kel. Manggar</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/kel_manggar.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Kel. Marga Sari</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/kel_marga_sari.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Kel. Margo Mulyo</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/kel_margo_mulyo.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Kel. Mekar Sari</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/kel_mekar_sari.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Kel. Muara Rapak</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/kel_muara_rapak.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Kel. Prapatan</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/kel_prapatan.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Kel. Sepinggan Baru</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/kel_sepinggan_baru.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Kel. Sepinggan Raya</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/kel_sepinggan_raya.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Kel. Sepinggan</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/kel_sepinggan.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Kel. Sumber Rejo</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/kel_sumber_rejo.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Kel. Sungai Nangka</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/kel_sungai_nangka.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Kel. Telaga Sari</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/kel_telaga_sari.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Kel. Teritip</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/kel_teritip.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>Kelurahan Damai</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/damai.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
    </div>

    <div class="document">
        <h2>Kecamatan</h2>
        <div class="document">
            <h2>kec. Balikpapan Barat</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/bpp_barat.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>kec. Balikpapan Kota</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/bpp_kota.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>kec. Balikpapan Selatan</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/bpp_selatan.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>kec. Balikpapan Tengah</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/bpp_tengah.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>kec. Balikpapan Timur</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/bpp_timur.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>kec. Balikpapan Utara</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/member/bpp_utara.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
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
</main>
    <div class="responsive-image-container">
        <!-- Gambar whistleblower -->
        <img
            src="assets/img/batik.png"
            alt="Whistleblower System"
            class="responsive-image">
    </div>
@endsection
