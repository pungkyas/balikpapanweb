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
            .sectionn {
                width: 100%;
                max-width: 1200px;
                margin: 0 auto;
                padding: 40px 20px;
            }

            .sectionn h2 {
                text-align: center;
                font-weight: bold;
                margin-bottom: 20px;
                font-size: 40px;
                color: #034EA1;
            }

            .map-container {
                display: flex;
                justify-content: center;
                align-items: flex-start;
                flex-wrap: wrap;
                gap: 20px;
                margin-top: 20px;
            }

            .map-container img {
                max-width: 100%;
                height: auto;
                border-radius: 8px;
            }

            .map-wrapper {
                width: 100%;
                max-width: 900px;
                text-align: center;
                position: relative; /* Penempatan posisi teks link */
            }

            /* Styling untuk teks link yang berada di luar gambar */
            .map-wrapper a {
                display: inline-block;
                margin-top: 10px; /* Jarak antara gambar dan link */
                color: #034EA1;
                font-size: 18px;
                text-decoration: none;
                font-weight: bold;
            }

            .map-wrapper a:hover {
                color: #034EA1;
                text-decoration: underline;
            }

            /* Responsif untuk tampilan layar kecil */
            @media (max-width: 768px) {
                .sectionn h2 {
                    font-size: 28px;
                    margin-bottom: 15px;
                }

                .map-container {
                    gap: 15px; /* Mengurangi gap antar elemen */
                }

                .map-wrapper a {
                    font-size: 16px; /* Menyesuaikan ukuran teks link pada layar kecil */
                }
            }

            /* Responsif untuk tampilan layar sangat kecil */
            @media (max-width: 480px) {
                .sectionn h2 {
                    font-size: 24px;
                    margin-bottom: 10px;
                }

                .map-container {
                    gap: 10px; /* Mengurangi gap lebih lanjut pada layar kecil */
                }

                .map-wrapper {
                    max-width: 100%; /* Agar elemen lebih fleksibel pada layar kecil */
                }

                .map-wrapper a {
                    font-size: 14px; /* Menyesuaikan ukuran teks link lebih kecil */
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
        Peta Kota
    </div>
        <div class="sectionn">
            <div class="map-container">
                <div class="map-wrapper">
                    <h2>Peta Administrasi Kota Balikpapan</h2>
                    <img src="assets/img/peta1.png" alt="Peta Administrasi Kota Balikpapan">
                    <a href="http://web.balikpapan.go.id/uploaded/peta/petaadminitrasibalikpapan.jpg" target="_blank">Lihat Detail</a> <!-- Teks link di luar gambar -->
                </div>
                <div class="map-wrapper">
                    <h2>Foto Udara Kota Balikpapan</h2>
                    <img src="assets/img/peta2.png" alt="Foto Udara Kota Balikpapan">
                    <a href="http://web.balikpapan.go.id/uploaded/peta/petaadminitrasibalikpapan.jpg" target="_blank">Lihat Detail</a> <!-- Teks link di luar gambar -->
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
