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
        /* balikpapannyaman */
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
        Transportasi
    </div>
        <h2>Transportasi darat</h2>
        <table>
            <thead>
                <tr>
                    <th>Nomor Trayek</th>
                    <th>Rute Trayek</th>
                    <th>Warna</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td class="justify-text">RSS Damai III - Terminal Batu Ampar - Karang Anyar - Kampung Baru PP> Dapat melayani jurusan: Somber, Inpres IV, Gunung Pipa, Gunung IV, Asrama Bukit, Kebun Sayur</td>
                    <td class="warna-container">
                        <img src="assets/img/angkot_orange.png" alt="Warna Trayek">
                        <span class="warna-box"></span>
                        <span>(Orange)</span>
                    </td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td>2</td>
                    <td class="justify-text">Terminal Batu Ampar - Muara Rapak - Karang Jati - Gunung Sari - Jl. Mayjen Sutoyo - Jl. D.I. Panjaitan - Jl. Sungai Ampal - Balikpapan Baru PPDapat melayani jurusan : Somber, Jl. Gunung Samarinda III, Jl. Dr. Sutomo, Jl. P. Antasari, Jl. S.Parman</td>
                    <td class="warna-container">
                        <img src="assets/img/angkot_abu.png" alt="Warna Trayek">
                        <span class="warna-box2"></span>
                        <span>(abu-abu)</span>
                    </td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td>2A</td>
                    <td class="justify-text">Terminal Damai - Jl. MT. Haryono - Perumahan Balikpapan Baru / RSS Damai III - RSS Damai Beriman / Korpri - Terminal Batu Ampar PPDapat melayani jurusan : SMUN 4, Psr. Sepinggan, Komp. Praja Bakti / Pemda, Perumahan Taman Sari Bukit Mutiara, Sumber Rejo, Gunung Guntur</td>
                    <td class="warna-container">
                        <img src="assets/img/angkot_hijau.png" alt="Warna Trayek">
                        <span class="warna-box3"></span>
                        <span>(Hijau Muda)</span>
                    </td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td>3</td>
                    <td class="justify-text">	Terminal Batu Ampar - Rapak - Gunung Sari - Klandasan - Pelabuhan PP
                        Dapat melayani jurusan : Somber, Gunung samarinda, Sumber Rejo, Karang Rejo, Karang Jati, Jl. P. Antasari, Jl. S. Parman, Martadinata, Jl. Kapt. P. Tendean, Sentosa, Prapatan</td>
                    <td class="warna-container">
                        <img src="assets/img/angkot_biru.png" alt="Warna Trayek">
                        <span class="warna-box4"></span>
                        <span>(Biru Muda)</span>
                    </td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td>5</td>
                    <td class="justify-text">Terminal Kampung Baru - Kebun Sayur - Karang Anyar - Rapak - Gunung Sari - Pasar Baru - Terminal Damai PPDapat melayani jurusan : Gunung IV, Gunung Pipa, Karang Rejo, Jl. P. Antasari, Jl. S. Parman, Jl. Mayjen Sutoyo</td>
                    <td class="warna-container">
                        <img src="assets/img/angkot_kuning.png" alt="Warna Trayek">
                        <span class="warna-box5"></span>
                        <span>(Kuning Tua)</span>
                    </td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td>6</td>
                    <td class="justify-text">Terminal Kampung Baru - Kebun Sayur - Karang Anyar - Rapak - Gunung Sari - Pasar Baru - Terminal Damai PPDapat melayani jurusan : Gunung IV, Gunung Pipa, Karang Rejo, Jl. P. Antasari, Jl. S. Parman, Jl. Mayjen Sutoyo</td>
                    <td class="warna-container">
                        <img src="assets/img/angkot_biru.png" alt="Warna Trayek">
                        <span class="warna-box6"></span>
                        <span>(Biru Tua)</span>
                    </td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td>7</td>
                    <td class="justify-text">Terminal Damai - Sepinggan - Batakan - Manggar - Gunung Tembak PPDapat melayani jurusan : Psr. Sepinggan dan Perumahan Sosial</td>
                    <td class="warna-container">
                        <img src="assets/img/angkot_hijau.png" alt="Warna Trayek">
                        <span class="warna-box7"></span>
                        <span>(Hijau Tua)</span>
                    </td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td>8</td>
                    <td class="justify-text">Terminal Batu Ampar - Km.24 ( Karang Joang ) PP</td>
                    <td class="warna-container">
                        <img src="assets/img/angkot_abu.png" alt="Warna Trayek">
                        <span class="warna-box8"></span>
                        <span>(Cream)</span>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="section-divider"></div>
        <h2 style="text-align: center;">Informasi Taksi & Terminal</h2>
    <table>
        <thead>
            <tr>
                <th>Taxi</th>
                <th>Telephone</th>
                <th>Terminal</th>
                <th>Melayani</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Borneo Taxi</td>
                <td>0542-424277</td>
                <td>Batu Ampar</td>
                <td>Angkutan Umum
                    <p>Balikpapan-Samarinda (Bus)</p>
                    <p>Balikpapan-Bontang (Bus)</p>
                    <p>Balikpapan-Banjarmasin(Bus)<p>
                    <p>Balikpapan-Sepaku/Semoi (Mini Bus)</p>
                </td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td>Global Taxi</td>
                <td>0542-735050</td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td>Mawar Taxi</td>
                <td>0542-874545</td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td>Kalung Mas Taxi</td>
                <td>0542-762222</td>
                <td>Damai</td>
                <td>Angkutan Umum
                    <p>Balikpapan-Handil II (Mini Bus)</p>
                </td>
            </tr>
        </tbody>
    </table>
    <div class="section-divider"></div>
    <h2 style="text-align: center;">Transportasi Udara</h2>
    <table>
        <thead>
            <tr>
                <th>Nama Maskapai</th>
                <th>Logo Maskapai</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Citilink</td>
                <td class="maskapai-container">
                    <a href="https://www.citilink.co.id/"><img src="assets/img/citilink.png" alt=""></a>
                </td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td>Garuda Indonesia</td>
                <td class="maskapai-container">
                    <a href="https://www.garuda-indonesia.com/id/id//"><img src="assets/img/garuda.png" alt=""></a>
                </td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td>Lion Air</td>
                <td class="maskapai-container">
                    <a href="https://www.lionair.co.id/"><img src="assets/img/lion.png" alt=""></a>
                </td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td>Batik Air</td>
                <td class="maskapai-container">
                    <a href="https://www.batikair.com/en/"><img src="assets/img/batik_air.png" alt=""></a>
                </td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td>Air Asia</td>
                <td class="maskapai-container">
                    <a href="https://www.airasia.com/en/gb"><img src="assets/img/air_asia.png" alt=""></a>
                </td>
            </tr>
        </tbody>
    </table>
<div class="section-divider"></div>
    <h2 style="text-align: center;">Transportasi Laut</h2>
    <table>
        <thead>
            <tr>
                <th>Pelabuhan</th>
                <th>Melayani</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Semayang</td>
                <td><p>Balikpapan-Surabaya</p>
                   <p>Balikpapan-Makassar</p>
                   <p>Balikpapan-Parepare</p>
                   <p>Balikpapan-Batulicin</p>
                </td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td>Kariangau</td>
                <td><p>Balikpapan-Mamuju</p>
                   <p>Balikpapan-Palu</p>
                   <p>Balikpapan-Parepare</p>
                   <p>Balikpapan-Penajam</p>
                </td>
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
