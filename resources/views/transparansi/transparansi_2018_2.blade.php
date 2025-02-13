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

        .th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
            color: #034EA1;
        }

        th {
            background-color: #034EA1;
            color: #ffffff;
            padding: 10px;
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
        <h2>Ringkasan DPA SKPD 2018</h2>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Dinas</th>
                    <th>Tautan</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>1.01.01.01</td><td class="justify-text">Dinas Pendidikan dan Kebudayaan</td><td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/DPA2018/1.01.01.01.-DINASPENDIDIKANDANKEBUDAYAAN.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>1.01.02.00</td><td class="justify-text">Dinas Kesehatan</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/DPA2018/1.01.02.00.-DINASKESEHATAN.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>1.01.02.01</td><td class="justify-text">Rumah Sakit Umum Daerah Kota Balikpapan</td><td><a href="https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/DPA2018/1.01.02.01.-RUMAHSAKITUMUMDAERAHKOTABALIKPAPAN.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>1.01.02.02</td><td class="justify-text">Rumah Sakit Khusus Bersalin Sayang Ibu</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/DPA2018/1.01.02.02.-RUMAHSAKITKHUSUSBERSALINSAYANGIBU.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>1.01.03.01</td><td class="justify-text">Dinas Pekerjaan Umum</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/DPA2018/1.01.03.01.-DINASPEKERJAANUMUM.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>1.01.04.01</td><td class="justify-text">Dinas Perumahan dan Permukiman</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/DPA2018/1.01.04.01.-DINASPERUMAHANDANPERMUKIMAN.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>1.01.05.01</td><td class="justify-text">Badan Penanggulangan Bencana Daerah</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/DPA2018/1.01.05.01.-BADANPENANGGULANGANBENCANADAERAH.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>1.01.05.02</td><td class="justify-text">Satuan Polisi Pamong Praja</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/DPA2018/1.01.05.02.-SATUANPOLISIPAMONGPRAJA.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>1.01.06.01</td><td class="justify-text">Dinas Sosial</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/DPA2018/1.01.06.01.-DINASSOSIAL.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>1.02.01.01</td><td class="justify-text">Dinas Ketenagakerjaan</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/DPA2018/1.02.01.01.-DINASKETENAGAKERJAAN.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>1.02.02.01</td><td class="justify-text">Dinas Pemberdayaan Perempuan, Perlindungan Anak dan Keluarga</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/DPA2018/1.02.02.01.-DINASPEMBERDAYAANPEREMPUAN,PERLINDUNGANANAKDANKELUARGA.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>1.02.04.01</td><td class="justify-text">Dinas Pertanahan dan Penataan Ruang</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/DPA2018/1.02.04.01.-DINASPERTANAHANDANPENATAANRUANG.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>1.02.05.01</td><td class="justify-text">Dinas Lingkungan Hidup</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/DPA2018/1.02.05.01.-DINASLINGKUNGANHIDUP.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>1.02.06.01</td><td class="justify-text">Dinas Kependudukan dan Pencatatan Sipil</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/DPA2018/1.02.06.01.-DINASKEPENDUDUKANDANPENCATATANSIPIL.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>1.02.09.01</td><td class="justify-text">Dinas Perhubungan</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/DPA2018/1.02.09.01.-DINASPERHUBUNGAN.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>1.02.10.10</td><td class="justify-text">Dinas Komunikasi dan Informatika</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/DPA2018/1.02.10.10.-DINASKOMUNIKASIDANINFORMATIKA.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>1.02.11.01</td><td class="justify-text">Dinas Koperasi, Usaha Mikro, Kecil, Menengah dan Perindustrian</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/DPA2018/1.02.11.01.-DINASKOPERASI,USAHAMIKRO,KECIL,MENENGAHDANPERINDUSTRIAN.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>1.02.12.01</td><td class="justify-text">Dinas Penanaman Modal dan Perizinan Terpadu</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/DPA2018/1.02.12.01.-DINASPENANAMANMODALDANPERIJINANTERPADU.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>1.02.17.01</td><td class="justify-text">Dinas Perpustakaan dan Arsip</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/DPA2018/1.02.12.01.-DINASPENANAMANMODALDANPERIJINANTERPADU.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>2.00.02.01</td><td class="justify-text">Dinas Pemuda, Olahraga dan Pariwisata</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/DPA2018/2.00.02.01.-DINASPEMUDAOLAHRAGADANPARIWISATA.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>2.00.03.01</td><td class="justify-text">Dinas Pangan, Pertanian dan Perikanan</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/DPA2018/2.00.03.01.-DINASPANGAN,PERTANIANDANPERIKANAN.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>2.00.06.01</td><td class="justify-text">Dinas Perdagangan</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/DPA2018/2.00.06.01.-DINASPERDAGANGAN.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>3.00.01.01</td><td class="justify-text">Inspektorat Kota</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/DPA2018/3.00.01.01.-INSPEKTORATKOTA.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>3.00.02.01</td><td class="justify-text">Badan Perencanaan Pembangunan Daerah</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/DPA2018/3.00.02.01.-BADANPERENCANAANPEMBANGUNANDAERAH,PENELITIANDAN.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>3.00.03.01</td><td class="justify-text">Badan Pengelola Keuangan Daerah</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/DPA2018/3.00.03.01.-BADANPENGELOLAKEUANGANDAERAH.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>3.00.03.02</td><td class="justify-text">Badan Pengelola Pajak Daerah dan Retribusi Daerah</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/DPA2018/3.00.03.02.-BADANPENGELOLAPAJAKDAERAHDANRETRIBUSIDAERAH.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>3.00.04.01</td><td class="justify-text">Badan Kepegawaian dan Pengembangan SDM</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/DPA2018/3.00.04.01.-BADANKEPEGAWAIANDANPENGEMBANGANSUMBERDAYAMANUSIA.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>4.00.01.01</td><td class="justify-text">Sekretariat Daerah</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/DPA2018/4.00.01.01.-SEKRETARIATDAERAH.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>4.00.01.02</td><td class="justify-text">Walikota dan Wakil Walikota</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/DPA2018/4.00.01.02.-WALIKOTADANWAKILWALIKOTA.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>4.00.02.01</td><td class="justify-text">Sekretariat DPRD</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/DPA2018/4.00.02.01.-SEKRETARIATDPRD.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>4.00.02.02</td><td class="justify-text">Dewan Perwakilan Rakyat Daerah</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/DPA2018/4.00.02.02.-DEWANPERWAKILANRAKYATDAERAH.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>5.00.01.01</td><td class="justify-text">Kantor Kesatuan Bangsa dan Politik</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/DPA2018/5.00.01.01.-KANTORKESATUANBANGSADANPOLITIK.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>6.00.01.01</td><td class="justify-text">Kecamatan Balikpapan Barat</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/DPA2018/6.00.01.01.-KECAMATANBALIKPAPANBARAT.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>6.00.01.02</td><td class="justify-text">Kecamatan Balikpapan Tengah</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/DPA2018/6.00.01.02.-KECAMATANBALIKPAPANTENGAH.pdff"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>6.00.01.03</td><td class="justify-text">Kecamatan Balikpapan Kota</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/DPA2018/6.00.01.03.-KECAMATANBALIKPAPANKOTA.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>6.00.01.04</td><td class="justify-text">Kecamatan Balikpapan Utara</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/DPA2018/6.00.01.04.-KECAMATANBALIKPAPANUTARA.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>6.00.01.05</td><td class="justify-text">Kecamatan Balikpapan Selatan</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/DPA2018/6.00.01.05.-KECAMATANBALIKPAPANSELATAN.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
                <tr><td>6.00.01.06</td><td class="justify-text">Kecamatan Balikpapan Timur</td><td><a href="http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/DPA2018/6.00.01.06.-KECAMATANBALIKPAPANTIMUR.pdf"><button class="download-btn"><i class="bi bi-download"></i> Tautan</button></a></td>
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
