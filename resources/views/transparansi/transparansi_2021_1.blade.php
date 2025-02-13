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
        <h2>RINGKASAN RKA PERANGKAT DAERAH TAHUN 2021</h2>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Lembaga</th>
                    <th>Tautan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Badan Kepegawaian dan Pengembangan Sumber Daya Manusia</td>
                    <td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/2021_RKA_SKPD/BADAN_KEPEGAWAIAN_DAN_PENGEMBANGAN_SUMBER_DAYA_MANUSIA.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Badan Penanggulangan Bencana Daerah</td>
                    <td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/2021_RKA_SKPD/BADAN_PENANGGULANGAN_BENCANA_DAERAH.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Badan Pengelola Keuangan Daerah</td>
                    <td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/2021_RKA_SKPD/BADAN_PENGELOLA_KEUANGAN_DAERAH.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Badan Pengelola Pajak Daerah dan Retribusi Daerah</td>
                    <td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/2021_RKA_SKPD/BADAN_PENGELOLA_PAJAK_DAERAH_DAN_RETRIBUSI_DAERAH.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Badan Perencanaan Pembangunan Daerah Penelitian dan Pengembangan</td>
                    <td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/2021_RKA_SKPD/BADAN_PERENCANAAN_PEMBANGUNAN_DAERAH_PENELITIAN_DAN_PENGEMBANGAN.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Dinas Pendidikan dan Kebudayaan</td>
                    <td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/2021_RKA_SKPD/DINAS_PENDIDIKAN_DAN_KEBUDAYAAN.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Dinas Kesehatan</td>
                    <td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/2021_RKA_SKPD/DINAS_KESEHATAN.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Dinas Pekerjaan Umum</td>
                    <td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/2021_RKA_SKPD/DINAS_PEKERJAAN_UMUM.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Dinas Perumahan dan Permukiman</td>
                    <td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/2021_RKA_SKPD/DINAS_PERUMAHAN_DAN_PERMUKIMAN.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Dinas Sosial</td>
                    <td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/2021_RKA_SKPD/DINAS_SOSIAL.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Dinas Ketenagakerjaan</td>
                    <td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/2021_RKA_SKPD/DINAS_KETENAGAKERJAAN.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Dinas Pemberdayaan Perempuan Perlindungan Anak dan Keluarga Berencana</td>
                    <td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/2021_RKA_SKPD/DINAS_PEMBERDAYAAN_PEREMPUAN_PERLINDUNGAN_ANAK_DAN_KELUARGA_BERENCANA.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>Dinas Pertanahan dan Penataaan Ruang</td>
                    <td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/2021_RKA_SKPD/DINAS_PERTANAHAN_DAN_PENATAAN_RUANG.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>Dinas Lingkungan Hidup</td>
                    <td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/2021_RKA_SKPD/DINAS_LINGKUNGAN_HIDUP.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>Dinas Kependudukan dan Pencatatan Sipil</td>
                    <td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/2021_RKA_SKPD/DINAS_KEPENDUDUKAN_DAN_PENCATATAN_SIPIL.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>Dinas Perhubungan</td>
                    <td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/2021_RKA_SKPD/DINAS_PERHUBUNGAN.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>Dinas Komunikasi dan Informatika</td>
                    <td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/2021_RKA_SKPD/DINAS_KOMUNIKASI_DAN_INFORMATIKA.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>Dinas Koperasi, UMKM dan Perindustrian</td>
                    <td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/2021_RKA_SKPD/DINAS_KOPERASI_USAHA_MIKRO_KECIL_MENENGAH_DAN_PERINDUSTRIAN.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>Dinas Penanamaan Modal dan Perizinan Terpadu</td>
                    <td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/2021_RKA_SKPD/DINAS_PENANAMAN_MODAL_DAN_PERIZINAN_TERPADU.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>Dinas Perpusataan dan Arsip</td>
                    <td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/2021_RKA_SKPD/DINAS_PERPUSTAKAAN_DAN_ARSIP.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>21</td>
                    <td>Dinas Pemuda Olahraga dan Pariwisata</td>
                    <td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/2021_RKA_SKPD/DINAS_PEMUDA_OLAH_RAGA_DAN_PARIWISATA.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>22</td>
                    <td>Dinas Pangan, Pertanian, dan Perikanan</td>
                    <td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/2021_RKA_SKPD/DINAS_PANGAN_PERTANIAN_DAN_PERIKANAN.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>23</td>
                    <td>Dinas Perdagangan</td>
                    <td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/2021_RKA_SKPD/DINAS_PERDAGANGAN.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>24</td>
                    <td>Inspektorat</td>
                    <td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/2021_RKA_SKPD/INSPEKTORAT.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>25</td>
                    <td>Badan Kesatuan Bangsa dan Politik</td>
                    <td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/2021_RKA_SKPD/BADAN_KESATUAN_BANGSA_DAN_POLITIK.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>26</td>
                    <td>Satuan Polisi Pamong Praja</td>
                    <td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/2021_RKA_SKPD/SATUAN_POLISI_PAMONG_PRAJA.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>27</td>
                    <td>Sekretaris Daerah</td>
                    <td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/2021_RKA_SKPD/SEKRETARIAT_DAERAH.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>28</td>
                    <td>Sekretaris DPRD</td>
                    <td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/2021_RKA_SKPD/SEKRETARIAT_DPRD.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>29</td>
                    <td>Kecamatan Balikpapan Barat</td>
                    <td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/2021_RKA_SKPD/KECAMATAN_BALIKPAPAN_BARAT.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>30</td>
                    <td>Kecamatan Balikpapan Tengah</td>
                    <td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/2021_RKA_SKPD/KECAMATAN_BALIKPAPAN_TENGAH.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>31</td>
                    <td>Kecamatan Balikpapan Kota</td>
                    <td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/2021_RKA_SKPD/KECAMATAN_BALIKPAPAN_KOTA.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>32</td>
                    <td>Kecamatan Balikpapan Utara</td>
                    <td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/2021_RKA_SKPD/KECAMATAN_BALIKPAPAN_UTARA.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>33</td>
                    <td>Kecamatan Balikpapan Selatan</td>
                    <td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/2021_RKA_SKPD/KECAMATAN_BALIKPAPAN_SELATAN.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>34</td>
                    <td>Kecamatan Balikpapan Timur</td>
                    <td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/2021_RKA_SKPD/KECAMATAN_BALIKPAPAN_TIMUR.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>35</td>
                    <td>RSUD Beriman</td>
                    <td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/2021_RKA_SKPD/RSUD_BERIMAN.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>36</td>
                    <td>RSKB Sayang Ibu</td>
                    <td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/2021_RKA_SKPD/RSKB_SAYANG_IBU.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
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
