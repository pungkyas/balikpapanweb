@extends('partials.partial')
@section('home')
<style>
    .headerr {
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
        .headerr {
            font-size: 2rem;
            padding: 45px 15px;
            background-size: 100% auto;
        }
    }

    /* Responsif untuk ponsel (portrait) */
    @media (max-width: 480px) {
        .headerr {
            font-size: 1.3rem;
            padding: 30px 10px;
            background-size: 100% auto;
        }
    }

    /* Responsif untuk tablet dalam mode landscape */
    @media (max-width: 1366px) and (orientation: landscape) {
        .headerr {
            font-size: 2.5rem;
            padding: 50px 15px;
            background-size: 100% auto;
        }
    }

    /* Responsif untuk ponsel dalam mode landscape */
    @media (max-width: 667px) and (orientation: landscape) {
        .headerr {
            font-size: 2.5rem;
            padding: 40px 15px;
            background-size: 100px;
        }
    }
    /* deskirpsi */
            /* Global Styles */
            .containerrr {
            padding: 10px;
            display: flex;
            flex-direction: column;
            gap: 20px;
            align-items: center; /* Pastikan semua elemen rata tengah */
        }

        .headerrr h1 {
            font-size: 24px;
            font-weight: bold;
            color: #034EA1;
            font-family: 'Poppins', sans-serif;
            margin-right: 800px; /* Menghapus margin */
        }

        .contenttt {
            display: flex;
            flex-direction: column;
            align-items: center; /* Memusatkan konten */
            gap: 20px;
            justify-content: center; /* Memusatkan konten */
        }

        .contenttt img {
            width: 100%;
            max-width: 300px; /* Sesuaikan ukuran gambar */
            height: auto;
            margin-top: -480px; /* Memberikan jarak atas pada gambar */
        }

        .caption {
            font-size: 16px;
            font-weight: bold;
            color: #034EA1;
            font-family: 'Poppins', sans-serif;
            text-align: center; /* Memusatkan caption */
            margin-top: 10px;
        }

        .textt {
            text-align: justify;
            max-width: 800px;
            color: #034EA1;
            font-family: 'Poppins', sans-serif;
        }

        .profile-list {
            font-family: 'Poppins', sans-serif;
            text-align: justify;
            color: #034EA1;
            max-width: 800px; /* Membatasi lebar konten */
        }

        .profile-list p {
            margin: 2px 0; /* Memberikan jarak antar elemen */
            text-align: justify;
        }

        .profile-list span {
            font-weight: bold; /* Membuat label tebal */
            margin-right: 10px;
        }

        /* Responsiveness */
        /* Portrait Mode (Smartphone) */

        /* Landscape Mode (Smartphone) */
        @media (min-width: 769px) and (max-width: 1026px) {
            .headerrr h1 {
                font-size: 22px;
            }

            .contenttt {
                flex-direction: column;
                gap: 20px;
                justify-content: center;
            }

            .contenttt img {
                max-width: 80%; /* Membatasi ukuran gambar */
            }

            .caption {
                font-size: 15px;
            }

            .textt {
                max-width: 90%;
            }

            .profile-list p {
                font-size: 15px;
            }
        }

        /* Tablet Portrait Mode */
        @media (max-width: 1024px) {
            .contenttt {
                flex-direction: column;
                align-items: center; /* Memusatkan konten */
                text-align: center; /* Memusatkan teks */
            }

            .headerrr h1 {
                font-size: 40px;
                margin: 0;
            }

            .contenttt img {
                max-width: 50%;
                margin-top: 10px;
            }

            .textt {
                max-width: 100%;
            }

            .profile-list {
                max-width: 100%;
            }

            .profile-list p {
                font-size: 14px;
            }
        }

        /* Tablet Landscape Mode */
        @media (min-width: 1025px) and (max-width: 1280px) {
            .contenttt {
                flex-direction: column;
                gap: 40px;
                justify-content: center; /* Memusatkan konten */
            }

            .headerrr h1 {
                font-size: 40px;
                margin: 0;
            }

            .contenttt img {
                max-width: 300px;
                margin-top:10px;
            }

            .caption {
                font-size: 16px;
                margin-top: 10px;
            }

            .textt {
                max-width: 90%;
            }

            .profile-list p {
                font-size: 15px;
            }
        }

        /* Desktop Mode */
        @media (min-width: 1280px) {
            .contenttt {
                flex-direction: row;
                gap: 40px;
                justify-content: flex-start;
            }

            .contenttt img {
                max-width: 300px;
                margin-left: 40px;
            }

            .caption {
                font-size: 16px;
                margin-left: 50px;
            }

            .textt {
                max-width: 800px;
            }

            .profile-list p {
                font-size: 16px;
            }
        }
        /* balikpapan nyaman */
                /* Style untuk section */
                .section-container {
            position: relative;
            width: 100%;
            height: 90px;
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
    <div class="headerr">
       Kepala Daerah
    </div>
    <div class="containerrr">
        <div class="headerrr">
            <h1>Wali Kota Balikpapan</h1>
        </div>
        <div class="contenttt">
            <div class="image-container">
                <img src="assets/img/kepala_daerah.png" alt="Wali Kota Balikpapan">
                <div class="caption">H. Rahmad Mas’ud, S.E., M.E</div>
            </div>
            <div class="textt">
                <p>H. Rahmad Mas’ud, S.E., M.E resmi dilantik sebagai Wali Kota Balikpapan untuk masa jabatan 2021-2024 pada Senin, 31 Mei 2021. Pelantikan dilakukan oleh Gubernur Kalimantan Timur Dr. Ir. H. Isran Noor, M.Si atas nama Presiden RI di Pendopo Odah Etam Kota Samarinda.</p>
                <P><strong>Profil Pimpinan Daerah Kota Balikpapan Masa Jabatan 2021-2024</strong></P>

                <div class="profile-list">
                    <p><span>Nama lengkap:</span> H. Rahmad Mas'ud, S.E., M.E</p>
                    <p><span>Tempat, tanggal lahir:</span> Balikpapan, 12 Mei 1976</p>
                    <p><span>Alamat tempat tinggal:</span> Jl. Wiluyo Puspoyudo No. 27 RT 25 Kel. Klandasan Ulu, Kec. Balikpapan Kota - Balikpapan</p>
                    <p><span>Agama:</span> Islam</p>
                    <p><span>Hobby:</span> Membaca & olahraga</p>
                </div>
                <div class="textt">
                    <p></P>
                    <P><strong>Profil Pimpinan Daerah Kota Balikpapan Masa Jabatan 2021-2024</strong></P>
                    <div class="profile-list">
                        <p><span>Pendidikan Dasar:</span> SD Negeri 017 Baru Tengah (1983-1989)</p>
                        <p><span>Pendidikan Menengah Pertama:</span> MTs. Negeri Balikpapan (1989-1992)</p>
                        <p><span>Pendidikan Menengah Atas:</span> SMA Negeri 3 Balikpapan (1992-1995)</p>
                        <p><span>Pendidikan Tinggi:</span> S1 FE Universitas Tridharma Balikpapan (lulus 2016)</p>
                        <p>S2 FEB Universitas Mulawarman (lulus 2020)</p>
                    </div>
                <div class="textt">
                        <p></P>
                        <P><strong> Riwayat Pemerintahan</strong></P>
                        <div class="profile-list">
                            <p>Wakil Wali Kota Balikpapan (2016-2021)</p>
                            <p>Wali Kota Balikpapan (2021-Sekarang)</p>
                        </div>
                <div class="textt">
                        <p></P>
                        <P><strong> Riwayat Pekerjaan</strong></P>
                        <div class="profile-list">
                            <p>Komisaris Utama PT. Sinar Pasific (1998-sekarang)</p>
                        </div>
                <div class="textt">
                        <p></P>
                        <P><strong> Pengalaman Organisasi</strong></P>
                        <div class="profile-list">
                            <p>Manager PERSIBA Balikpapan (1999-2001)</p>
                            <p>Bendahara KNPI (2007-2010)</p>
                            <p>Ketua International Owner Ship Association (INSA) (2013-sekarang)</p>
                            <p>Ketua Forum Takmir Masjid & Musala Kota Balikpapan (2014-sekarang) </p>
                        </div>
                <div class="textt">
                        <p></P>
                        <P><strong> Data Keluarga</strong></P>
                        <div class="profile-list">
                            <p><span>Istri:</span>Hj. Nurlena</p>
                            <p><span>Anak :</span>Cindara Rahmad, Hana Fatiyah Rahmad, Muhammad Latief Maulana,Muhammad Firaus Ilmi, Muhammad husein maulana, Murmahlia Rahmad</p>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
@endsection
