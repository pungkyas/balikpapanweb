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
            /* balikpapan nyaman */
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
        <h2>Rencana Pembangunan Jangka Panjang Daerah</h2>
        <div class="document">
            <h2>RENCANA PEMBANGUNAN JANGKA PANJANG DAERAH (RPJPD)</h2>
            <div class="buttons">
                <a href="/perencanaan_1"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
    </div>
    <div class="document">
        <h2>Rencana Pembangunan Jangka Menengah Daerah Kota Balikpapan</h2>
        <div class="document">
            <h2>RENCANA PEMBANGUNAN JANGKA MENENGAH DAERAH (RPJMD) TAHUN 2011-2016</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/RPJMD_BALIKPAPAN_2016.pdf"><button class="download-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>RENCANA PEMBANGUNAN JANGKA MENENGAH DAERAH (RPJMD) TAHUN 2016-2021</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/RPJMD_2016_-_2021_Kota_Balikpapan.pdf"><button class="download-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>RENCANA PEMBANGUNAN JANGKA MENENGAH DAERAH (RPJMD) TAHUN 2021-2026</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/Perda_RPJMD_Kota_Balikpapan_Tahun_2021-2026.pdf"><button class="download-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
    </div>

    <div class="document">
        <h2>Rencana Tata Ruang Wilayah (RTRW) Kota Balikpapan</h2>
        <div class="document">
            <h2>RTRW Kota Balikpapan Tahun 2012 - 2032</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/RTRW_Kota_Balikpapan_2012.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
    </div>

    <div class="document">
        <h2>Rencana Strategis Perangkat Daerah</h2>
        <div class="document">
            <h2>RENCANA KERJA SKPD TAHUN 2016</h2>
            <div class="buttons">
                <a href="/perencanaan_2"><button class="download-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>RENCANA STRATEGIS OPD TAHUN 2016 - 2021</h2>
            <div class="buttons">
                <a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/RKA2018/3.00.03.00.-PPKD.pdf"><button class="download-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>RENCANA STRATEGIS (RENSTRA)</h2>
            <div class="buttons">
                <a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/RKA2018/3.00.03.00.-PPKD.pdf"><button class="download-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
    </div>

    <div class="document">
        <h2>Ringkasan DPA SKPD</h2>
        <div class="document">
            <h2>RENCANA KERJA PEMERINTAH DAERAH (RKPD) TAHUN 2015</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/RKPD_Balikpapan_2015.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>RENCANA KERJA PEMERINTAH DAERAH (RKPD) TAHUN 2016</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/detail/read/58875/rkpd-tahun-2016"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>RENCANA KERJA PEMERINTAH DAERAH (RKPD) TAHUN 2017</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/RKPD_Balikpapan_2017.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>RENCANA KERJA PEMERINTAH DAERAH (RKPD) TAHUN 2018</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/Perwal_No.12_Tahun_2017_ttg_Rencana_Kerja_Pembangunan_Daerah_Tahun_2018_._.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>RENCANA KERJA PEMERINTAH DAERAH (RKPD) TAHUN 2019</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/Perwal_No.13_Tahun_2018_ttg_RKPD_2019.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>RENCANA KERJA PEMERINTAH DAERAH (RKPD) TAHUN 2020</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/detail/read/58927/rencana-kerja-pembangunan-daerah-tahun-2020"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>RENCANA KERJA PEMERINTAH DAERAH (RKPD) TAHUN 2021</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/PERWALI_RKPD_2021_BALIKPAPAN.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>RENCANA KERJA PEMERINTAH DAERAH (RKPD) TAHUN 2022</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/RKPD%202022%20Publish.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>RENCANA KERJA PEMERINTAH DAERAH (RKPD) TAHUN 2023</h2>
            <div class="buttons">
                <a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/PERWALI%20RKPD%20TAHUN%202023-1.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>PERUBAHAN RENCANA KERJA PEMERINTAH DAERAH (RKPD) TAHUN 2023</h2>
            <div class="buttons">
                <a href="https://web.balikpapan.go.id/uploaded/perwali_perubahan_rkpd_tahun_2023.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>RENCANA KERJA PEMERINTAH DAERAH (RKPD) TAHUN 2024</h2>
            <div class="buttons">
                <a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2024/RKPD_2024_Publish_update.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>PERUBAHAN RENCANA KERJA PEMERINTAH DAERAH (RKPD) TAHUN 2024</h2>
            <div class="buttons">
                <a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/Perwali%20Nomor%2020%20Tahun%202024%20tentang%20Perubahan%20RKPD%20Tahun%202024.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
            </div>
        </div>
        <div class="document">
            <h2>RENCANA KERJA PEMERINTAH DAERAH (RKPD) TAHUN 2025</h2>
            <div class="buttons">
                <a href="https://web.balikpapan.go.id/uploaded/PERWALI%20NO.15%20thn%202024%20tentang%20RKPD%20Kota%20Balikpapan%20Tahun%202025.pdf"><button class="view-btn"><i class="bi bi-eye"></i> Lihat</button></a>
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
