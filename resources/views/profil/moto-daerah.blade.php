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
    /* deskripsi */
                /* Global Styles */
                .headerrr {
                align-self: flex-start;
                margin-left: 0; /* Default margin untuk menyelaraskan dengan logo */
            }
            .containerrr {
                padding: 10px;
                display: flex;
                flex-direction: column;
                gap: 20px;
                align-items: center;
            }

            .headerrr h1, .headerrr p {
                text-align: left;
                margin: 0;
                margin-left: 0; /* Menjaga jarak tetap rapi */
            }

            .headerrr h1 {
                font-size: 24px;
                font-weight: bold;
                color: #034EA1;
                font-family: 'Poppins', sans-serif;
            }

            .headerrr p {
                font-size: 18px;
                color: #034EA1;
                font-family: 'Poppins', sans-serif;
            }

            .contenttt {
                display: flex;
                align-items: center;
                gap: 10px;
                justify-content: flex-start;
                flex-direction: column; /* By default, display images and text vertically */
            }

            .contenttt img {
                width: 100%; /* Make the image responsive */
                height: auto; /* Maintain aspect ratio */
            }

            .textt {
                text-align: justify;
                max-width: 700px;
                color: #034EA1;
                font-family: 'Poppins', sans-serif;
                padding: 0 20px; /* Padding for readability */
            }

            .textt p span {
                font-weight: bold;
            }

            /* Mobile (default) styles */
            @media (max-width: 480px) {
                .headerrr h1,
                .headerrr p {
                    text-align: center; /* Center text on small screens */
                }

                .contenttt {
                    flex-direction: column;
                    justify-content: center;
                    align-items: center; /* Align items to center for mobile */
                }

                .contenttt img {
                    width: 90%; /* Adjust image size on mobile */
                    max-width: 200px;
                }
            }

            /* Tablet (min-width: 768px) */
            @media (min-width: 768px) {
                .headerrr h1 {
                    font-size: 28px;
                    margin-left: 10px; /* Align text to the left a bit for larger screens */
                }

                .headerrr p {
                    font-size: 18px;
                    margin-left: 10px;
                }

                .contenttt {
                    flex-direction: row;
                    justify-content: flex-start;
                }

                .contenttt img {
                    width: 50%;
                    margin-left: 10px;
                }

                .textt {
                    max-width: 900px;
                    margin-left: 10px; /* Ensures text does not overlap with the image */
                }
            }

            /* Tablet Landscape and Desktop (min-width: 1024px) */
            @media (min-width: 1024px) {
                .headerrr h1 {
                    font-size: 32px;
                    max-width: 900px;
                    margin-left: 20px; /* Slight margin on left for alignment */
                }

                .headerrr p {
                    font-size: 20px;
                    margin-left: 20px;
                }

                .contenttt {
                    flex-direction: row;
                    justify-content: flex-start;
                    align-items: center;
                }

                .contenttt img {
                    width: 30%;
                    margin-left: 20px;
                }

                .textt {
                    max-width: 900px;
                    margin-left: 20px;
                }
            }
            /* balikpapan nyaman */
        .section-container {
            position: relative;
            width: 100%;
            height: 75px;
            background-color: white; /* Warna latar belakang section */
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
        Moto dan Lambang Daerah
    </div>
        <div class="containerrr">
            <div class="headerrr">
                <h1>Moto Kota Balikpapan</h1>
                <p>"Balikpapan Kubangun, Kujaga, dan Kubela"</p>
            </div>
            <div class="contenttt">
                <img src="assets/img/logohero.png" alt="Lambang Kota Balikpapan">
                <div class="textt">
                    <p><span>Lambang Kota Balikpapan</span> berbentuk perisai dengan ukuran perbandingan 3:4. Perisai melambangkan perlindungan dalam perjuangan mencapai cita-cita revolusi Indonesia. Warna hijau daun melambangkan kemakmuran, putih untuk kesucian, merah untuk keberanian, kuning emas untuk keluhuran, dan biru muda untuk ketentraman. Manuntung menunjukkan ketabahan hingga akhir. Bintang segi lima melambangkan Pancasila, sementara elemen seperti tangga, padi, kapas, roda, dan kilang mencerminkan sumber inspirasi dan aspirasi pembangunan. Dua buah layar menggambarkan pintu gerbang Kalimantan Timur, sedangkan perahu dengan dua lengkungan layar bagian bawah merepresentasikan latar geografis. Telabang melambangkan pertahanan dan kebudayaan, dan kilang serta teluk mencirikan kota Balikpapan. Bunga dan daun kapas yang berjumlah 21 mengacu pada tanggal 21 Januari 1960, hari berdirinya Pemerintahan Kota Balikpapan. Telabang berjumlah satu, dan butir padi berjumlah 60.</p>
                </div>
            </div>
        </div>
    </section>
<section>
    <style>
    </style>
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
