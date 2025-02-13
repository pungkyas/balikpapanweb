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
    .containerrr {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .section-header {
            font-family: 'Poppins', sans-serif;
            text-align: center;
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 20px;
            margin-top: 40px;
            color: #034EA1;
        }
        .contact-section {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
        }
        .logoo {
            flex: 1;
            text-align: center;
        }
        .logoo img {
            max-width: 100%;
            height: auto;
        }
        .contact-list {
            flex: 1;
            padding: 20px;
            margin-left: 20px;
            font-family: 'Poppins', sans-serif;
        }
        .contact-list ul {
            list-style: none;
        }
        .contact-list ul li {
            color: #034EA1;
            font-size: 1.2rem;
            margin: 10px 0;
        }
        .contact-list ul li span {
            font-weight: bold;
        }
        @media (max-width: 768px) {
            .contact-section {
                flex-direction: column;
                align-items: center;
            }
            .contact-list {
                margin-left: 0;
                margin-top: 20px;
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
        No Telephone Penting
    </div>
        <div class="containerrr">
            <div class="section-header">
                Kepolisian
            </div>
            <div class="contact-section">
                <div class="logoo">
                    <img src="assets/img/polisi.png" alt="Logo Polisi">
                </div>
                <div class="contact-list">
                    <ul>
                        <li><span>Polres Balikpapan:</span> 5604000</li>
                        <li><span>Polsek Selatan:</span> 761400</li>
                        <li><span>Polsek Barat:</span> 422392</li>
                        <li><span>Polsek Timur:</span> 5652707</li>
                        <li><span>Lakalantas:</span> 5616255</li>
                        <li><span>KP3 Semayang:</span> 422376</li>
                        <li><span>Laka Lantas:</span> 5616255</li>
                        <li><span>Unit wanita/ Anak:</span> 5680143</li>
                        <li><span>Polsek Utara:</span> 0542 - 422391</li>
                    </ul>
                </div>
            </div>
            <div class="section-header">
                Rumah Sakit
            </div>
            <div class="contact-section">
                <div class="logoo">
                    <img src="assets/img/rs.png" alt="Logo Polisi">
                </div>
                <div class="contact-list">
                    <ul>
                        <li><span>RSUD KANUJOSO:</span> 873901</li>
                        <li><span>RS Dr. R. Hardjanto:</span> 423409</li>
                        <li><span>RS Ibnu Sina:</span> 7022246</li>
                        <li><span>RS Restu Ibu:</span> 427342</li>
                        <li><span>RS Pertamina:</span> 734020</li>
                        <li><span>RS. Siloam:</span> 8879939</li>
                        <li><span>RS Bpn Baru:</span> 877330 / 876836</li>
                        <li><span>PMI Markas:</span> 440048</li>
                        <li><span>Unit Donor:</span> 414522</li>
                    </ul>
                </div>
            </div>
            <div class="section-header">
                Pemadam Kebakaran
            </div>
            <div class="contact-section">
                <div class="logoo">
                    <img src="assets/img/pemadam.png" alt="Logo Polisi">
                </div>
                <div class="contact-list">
                    <ul>
                        <li><span>Pemadam Kebakaran:</span> 7218199</li>
                        <li><span>Pemadam Kebakaran wil Utara:</span> 421113</li>
                        <li><span>Pemadam Kebakaran wil Barat:</span> 731606</li>
                        <li><span>Pemadam Kebakaran wil Selatan:</span> 878207</li>
                        <li><span>Pemadam Kebakaran wil Timur:</span> 743337</li>
                    </ul>
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
