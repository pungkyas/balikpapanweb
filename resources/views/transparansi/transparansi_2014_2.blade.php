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
        <h2>Ringkasan DPA SKPD Tahun 2014 </h2>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Sekertariat</th>
                    <th>Tautan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td class="justify-text">Sekretariat Daerah Kota Balikpapan</td>
                    <td><a href="http://web.balikpapan.go.iduploaded/ProgramKerja/tpad2014/7_DPA_SKPD_2014/SEKRETARIAT_DAERAH_DPA2014.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td>2</td>
                    <td class="justify-text">Sekretariat DPRD Kota Balikpapan</td>
                    <td><a href="http://web.balikpapan.go.iduploaded/ProgramKerja/tpad2014/7_DPA_SKPD_2014/SEKRETARIAT_DPRD_DPA2014.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
            </tbody>
        </table>
        <div class="section-divider"></div>
        <h2 style="text-align: center;">Dinas</h2>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Dinas</th>
                    <th>Tautan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td class="justify-text">Dinas Pendidikan</td>
                    <td><a href="http://web.balikpapan.go.iduploaded/ProgramKerja/tpad2014/7_DPA_SKPD_2014/DINAS_PENDIDIKAN_DPA2014.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td class="justify-text">Dinas Kesehatan</td>
                    <td><a href="http://web.balikpapan.go.iduploaded/ProgramKerja/tpad2014/7_DPA_SKPD_2014/DINAS_KESEHATAN_KOTA_DPA2014.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td class="justify-text">Dinas Pekerjaan Umum</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.03.01.DINAS_PEKERJAAN_UMUM.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td class="justify-text">Dinas Tata Kota dan Perumahan</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.05.01.DINAS_TATA_KOTA_DAN_PERUMAHAN.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td class="justify-text">Dinas Perhubungan</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.07.01.DINAS_PERHUBUNGAN.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td class="justify-text">Dinas Kependudukan Dan Catatan Sipil</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.10.01.DINAS_KEPENDUDUKAN_DAN_CATATAN_SIPIL.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td class="justify-text">Dinas Tenaga Kerja dan Sosial</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.14.01.DINAS_TENAGA_KERJA_DAN_SOSIAL.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td class="justify-text">Dinas Perindustrian Perdagangan dan Koperasi</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.15.01.DINAS_PERINDUSTRIAN_PERDAGANGAN_DAN_KOPERASI.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td class="justify-text">Dinas Pemuda, Olahraga, Kebudayaan Dan Pariwisata</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/lakip2014/DISPORABUDPAR.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td class="justify-text">Dinas Pertanian, Kelautan dan Perikanan</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/2.01.01.DINAS_PERTANIAN_KELAUTAN_DAN_PERIKANAN.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>11</td>
                    <td class="justify-text">Dinas Pendapatan Daerah</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.20.08.DINAS_PENDAPATAN_DAERAH.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>12</td>
                    <td class="justify-text">Dinas Kebersihan, Pertamanan dan Pemakaman</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.08.02.DINAS_KEBERSIHAN_PERTAMANAN_DAN_PEMAKAMAN.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>13</td>
                    <td class="justify-text">Dinas Pasar</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/2.06.01.DINAS_PASAR.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
            </tbody>
        </table>
        <table>
            <div class="section-divider"></div>
            <h2 style="text-align: center;">Inspektorat, Badan Perencanaan Pembangunan Daerah dan Lembaga Teknis Daerah</h2>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Lembaga</th>
                    <th>Tautan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td class="justify-text">Inspektorat</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.20.07.INSPEKTORAT_KOTA.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td class="justify-text">Badan Perencanaan Pembangunan Daerah (Bappeda)</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.06.01.BADAN_PERENCANAAN_PEMBANGUNAN_DAERAH.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td class="justify-text">Badan Lingkungan Hidup (BLH)</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.08.01.BADAN_LINGKUNGAN_HIDUP.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td class="justify-text">Badan Kepegawaian Daerah (BKD)</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.20.06.BADAN_KEPEGAWAIAN_DAERAH.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td class="justify-text">Badan Pengelola Keuangan dan Aset Daerah</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.20.05.BADAN_PENGELOLA_KEUANGAN_DAN_ASET_DAERAH.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td class="justify-text">Badan Pemberdayaan Masyarakat, Pemberdayaan Perempuan dan Keluarga Berencana (BPMPPKB)</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.12.01.BADAN_PEMBERDAYAAN_MASYARAKAT_PEMBERDAYAAN_PEREMPUAN_DAN_KB.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td class="justify-text">Badan Penanggulangan Bencana Daerah (BPBD)</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.04.01.BADAN_PENANGGULANGAN_BENCANA_DAERAH.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td class="justify-text">Badan Penanaman Modal dan Pelayanan Perizinan Terpadu (BPMP2T)</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.16.01.BADAN_PENANAMAN_MODAL_DAN_PELAYANAN_PERIJINAN_TERPADU.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td class="justify-text">Kantor Arsip dan Perpustakaan</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.24.01.KANTOR_ARSIP_DAN_PERPUSTAKAAN.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td class="justify-text">Kantor Kesbang dan Politik</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.19.01.KANTOR_KESBANG_DAN_POLITIK.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>11</td>
                    <td class="justify-text">Satuan Polisi Pamong Praja</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.19.02.KANTOR_SATUAN_POLISI_PAMONG_PRAJA.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>12</td>
                    <td class="justify-text">Rumah Sakit Khusus Bersalin Sayang Ibu Kelas ”B”</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.02.02.RUMAH_SAKIT_KHUSUS_BERSALIN_SAYANG_IBU.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
            </tbody>
        </table>
        <div class="section-divider"></div>
        <h2 style="text-align: center;">Kecamatan</h2>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kecamatan</th>
                    <th>Tautan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td class="justify-text">Kecamatan Balikpapan Timur</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.20.09.KECAMATAN_BALIKPAPAN_TIMUR.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td class="justify-text">Kecamatan Balikpapan Barat</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.20.10.KECAMATAN_BALIKPAPAN_BARAT.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td class="justify-text">Kecamatan Balikpapan Tengah</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.20.12.KECAMATAN_BALIKPAPAN_TENGAH.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td class="justify-text">Kecamatan Balikpapan Utara</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.20.11.KECAMATAN_BALIKPAPAN_UTARA.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td class="justify-text">Kecamatan Balikpapan Kota</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.20.14.KECAMATAN_BALIKPAPAN_KOTA.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td class="justify-text">Kecamatan Balikpapan Selatan</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.20.13.KECAMATAN_BALIKPAPAN_SELATAN.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
            </tbody>
        </table>
        <div class="section-divider"></div>
        <h2 style="text-align: center;">Kelurahan</h2>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kelurahan</th>
                    <th>Tautan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td class="justify-text">Kelurahan Teritip</td>
                    <td><a href="#"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td class="justify-text">Kelurahan Manggar</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.20.15.KELURAHAN_MANGGAR.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td class="justify-text">Kelurahan Lamaru</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.20.16.KELURAHAN_LAMARU.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td class="justify-text">Kelurahan Manggar Baru</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.20.18.KELURAHAN_MANGGAR_BARU.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td class="justify-text">Kelurahan Kariangau</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.20.22.KELURAHAN_KARIANGAU.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td class="justify-text">Kelurahan Margo Mulyo</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.20.23.KELURAHAN_MARGO_MULYO.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td class="justify-text">Kelurahan Baru Ilir</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.20.19.KELURAHAN_BARU_ILIR.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td class="justify-text">Kelurahan Baru Ulu</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.20.21.KELURAHAN_BARU_ULU.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td class="justify-text">Kelurahan Baru Tengah</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.20.20.KELURAHAN_BARU_TENGAH.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td class="justify-text">Kelurahan Marga Sari</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.20.24.KELURAHAN_MARGA_SARI.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>11</td>
                    <td class="justify-text">Kelurahan Sumber Rejo</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.20.36.KELURAHAN_SUMBER_REJO.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>12</td>
                    <td class="justify-text">Kelurahan Karang Rejo</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.20.33.KELURAHAN_KARANG_REJO.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>13</td>
                    <td class="justify-text">Kelurahan Gn. Sari Ilir</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.20.32.KELURAHAN_GUNUNGSARI_ILIR.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>14</td>
                    <td class="justify-text">Kelurahan Gn. Sari Ulu</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.20.31.KELURAHAN_GUNUNGSARI_ULU.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>15</td>
                    <td class="justify-text">Kelurahan Karang Jati</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.20.34.KELURAHAN_KARANG_JATI.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>16</td>
                    <td class="justify-text">Kelurahan Mekar Sari</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.20.35.KELURAHAN_MEKAR_SARI.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>17</td>
                    <td class="justify-text">Kelurahan Karang Joang</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.20.27.KELURAHAN_KARANG_JOANG.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>18</td>
                    <td class="justify-text">Kelurahan Gn. Samarinda</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.20.26.KELURAHAN_GUNUNG_SAMARINDA.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>19</td>
                    <td class="justify-text">Kelurahan Gn. Samarinda Baru</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.20.29.KELURAHAN_GUNUNG_SAMARINDA_BARU.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>20</td>
                    <td class="justify-text">Kelurahan Batu Ampar</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.20.25.KELURAHAN_BATU_AMPAR.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>21</td>
                    <td class="justify-text">Kelurahan Graha Indah</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.20.30.KELURAHAN_GRAHA_INDAH.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>22</td>
                    <td class="justify-text">Kelurahan Muara Rapak</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.20.28.KELURAHAN_MUARA_RAPAK.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>23</td>
                    <td class="justify-text">Kelurahan Damai Baru</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.20.42.KELURAHAN_DAMAI_BARU.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>24</td>
                    <td class="justify-text">Kelurahan Damai Bahagia</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.20.43.KELURAHAN_DAMAI_BAHAGIA.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>25</td>
                    <td class="justify-text">Kelurahan Gunung Bahagia</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.20.38.KELURAHAN_GUNUNGBAHAGIA.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>26</td>
                    <td class="justify-text">Kelurahan Sungai Nangka</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.20.41.KELURAHAN_SUNGAINANGKA.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>27</td>
                    <td class="justify-text">Kelurahan Sepinggan Raya</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.20.40.KELURAHAN_SEPINGGAN_RAYA.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>28</td>
                    <td class="justify-text">Kelurahan Sepinggan</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.20.37.KELURAHAN_SEPINGGAN.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>29</td>
                    <td class="justify-text">Kelurahan Sepinggan Baru</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.20.39.KELURAHAN_SEPINGGAN_BARU.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>30</td>
                    <td class="justify-text">Kelurahan Prapatan</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.20.44.KELURAHAN_PRAPATAN.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>31</td>
                    <td class="justify-text">Kelurahan Telaga Sari</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.20.45.KELURAHAN_TELAGA_SARI.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>32</td>
                    <td class="justify-text">Kelurahan Klandasan Ulu</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.20.46.KELURAHAN_KLANDASAN_ULU.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>33</td>
                    <td class="justify-text">Kelurahan Klandasan Ilir</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.20.47.KELURAHAN_KLANDASAN_ILIR.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                </tr>
                <tr>
                    <td>34</td>
                    <td class="justify-text">Kelurahan Damai</td>
                    <td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/1_RKA_SKPD_2014/1.20.48.KELURAHAN_DAMAI.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
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
