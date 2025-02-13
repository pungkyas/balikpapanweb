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
    body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .custom-container {
            display: flex;
            max-width: 1200px;
            margin: 50px auto;
            gap: 20px;
        }
        .custom-sidebar {
            width: 250px;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            flex-shrink: 0;
        }
        .custom-sidebar h2 {
            font-size: 20px;
            color: #034ea1;
            margin-bottom: 10px;
        }
        .custom-sidebar ul {
            list-style: none;
            padding: 0;
        }
        .custom-sidebar ul li {
            padding: 10px;
            cursor: pointer;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .custom-sidebar ul li:hover, .custom-sidebar ul li.custom-active {
            background: #034ea1;
            color: white;
        }
        .custom-content-wrapper {
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        .custom-content {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }
        .custom-service-card {
            display: flex;
            align-items: center;
            background: white;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }
        .custom-service-card:hover {
            transform: scale(1.05);
        }
        .custom-service-card img {
            width: 60px;
            height: 60px;
            margin-right: 15px;
            border-radius: 8px;
        }
        .custom-service-card h3 {
            font-size: 18px;
            color: #034ea1;
            margin: 0 0 5px;
        }
        .custom-service-card p {
            font-size: 14px;
            color: #666;
            margin: 0;
        }
        @media (max-width: 768px) {
            .custom-container {
                flex-direction: column;
                align-items: center;
            }
            .custom-sidebar {
                width: 100%;
                text-align: center;
                padding: 10px;
            }
            .custom-sidebar ul {
                display: flex;
                justify-content: flex-start;
                overflow-x: auto;
                white-space: nowrap;
                padding-bottom: 10px;
            }
            .custom-sidebar ul li {
                white-space: nowrap;
                display: inline-block;
                padding: 5px 15px;
            }
            .custom-content {
                grid-template-columns: 1fr;
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
            font-family: 'Poppins', sans-serif;
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
        Semua Layanan
    </div>
    <div class="custom-container">
        <div class="custom-sidebar">
            <h2>Kategori</h2>
            <ul>
                <li class="custom-category custom-active" data-category="all">Semua</li>
                <li class="custom-category" data-category="pendidikan">Pendidikan</li>
                <li class="custom-category" data-category="karier">Karier</li>
                <li class="custom-category" data-category="kesehatan">Kesehatan</li>
                <li class="custom-category" data-category="lingkungan">Lingkungan & Tempat Tinggal</li>
                <li class="custom-category" data-category="sosial-hukum">Sosial & Hukum</li>
                <li class="custom-category" data-category="usaha">Usaha</li>
                <li class="custom-category" data-category="lainnya">Lainnya</li>
            </ul>
        </div>
        <div class="custom-content-wrapper">
            <div class="custom-content" id="service-list">

                <div class="custom-service-card" data-category="pendidikan">
                <img src="assets/img/pendidikan.png" alt="">
                    <div>
                        <a href="https://disdikbudbalikpapan.id/"><h3>Dinas Pendidikan</h3>
                        <p>Mengelola dan mengawasi pendidikan.</p></a>
                    </div>
                </div>
                <div class="custom-service-card" data-category="karier">
                    <img src="assets/img/ketenagakerjaan.png" alt="">
                    <div>
                        <a href="http://disnaker.balikpapan.go.id/"><h3>Dinas Ketenagakerjaan</h3>
                        <p>Pelatihan dan informasi kerja.</p></a>
                    </div>
                </div>
                <div class="custom-service-card" data-category="kesehatan">
                    <img src="assets/img/kesehatan.png" alt="">
                    <div>
                        <a href="https://siyankes.balikpapan.go.id/"><a href="http://rsud.balikpapan.go.id/"><h3>Layanan Kesehatan</h3>
                        <p>Pelayanan medis dan kesehatan.</p></a>
                    </div>
                </div>
                <div class="custom-service-card" data-category="lingkungan">
                    <img src="assets/img/imtn.png" alt="">
                    <div>
                        <a href="http://imtn.balikpapan.go.id/mobile/"><h3>IMTN</h3>
                        <p>Layanan perizinan tanah negara.</p></a>
                    </div>
                </div>
                <div class="custom-service-card" data-category="sosial-hukum">
                    <img src="assets/img/kependudukan.png" alt="">
                    <div>
                        <a href="https://capil.balikpapan.go.id/disdukcapil/"><h3>Layanan Sosial</h3>
                        <p>Administrasi kependudukan.</p></a>
                    </div>
                </div>
                <div class="custom-service-card" data-category="usaha">
                    <img src="assets/img/dmpt.png" alt="">
                    <div>
                        <a href="https://investasi.balikpapan.go.id/"><h3>DPMPT</h3>
                        <p>Perizinan dan investasi.</p></a>
                    </div>
                </div>
                <div class="custom-service-card" data-category="lainnya">
                    <img src="assets/img/perpus.png" alt="">
                    <div>
                        <a href="https://dispustakar.balikpapan.go.id/"><h3>Arsip dan Perpustakaan</h3>
                        <p>Layanan kearsipan dan perpustakaan.</p></a>
                    </div>
                </div>
                <div class="custom-service-card" data-category="lainnya">
                    <img src="assets/img/break.png" alt="">
                    <div>
                        <a href="https://bappeda.balikpapan.go.id/"><h3>Break</h3>
                        <p>Beri Ide Balikpapan Kreatif.</p></a>
                    </div>
                </div>
                <div class="custom-service-card" data-category="lainnya">
                    <img src="assets/img/kelurahan.png" alt="">
                    <div>
                        <a href="https://yankel.balikpapan.go.id/"><h3>Layanan Kelurahan</h3>
                        <p>Pelayanan Online Kelurahan.</p></a>
                    </div>
                </div>
                <div class="custom-service-card" data-category="sosial-hukum">
                    <img src="assets/img/jaringan.png" alt="">
                    <div>
                        <a href="https://jdih.balikpapan.go.id/"><h3>JDIH</h3>
                        <p>Layanan Informasi Hukum.</p></a>
                    </div>
                </div>
                <div class="custom-service-card" data-category="kesehatan">
                    <img src="assets/img/yankes.png" alt="">
                    <div>
                        <a href="https://siyankes.balikpapan.go.id/"><h3>Layanan Informasi Kesehatan </h3>
                        <p>Layanan Kesehatan Balikpapan.</p></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="section-container">
            <img src="assets/img/balikpapan_nyaman.png" alt="Gambar di Pojok Kanan Bawah" />
         </div>
    </section>
    <section class="responsive-image-section">
    <style>

    </style>
</main>
    <div class="responsive-image-container">
        <!-- Gambar whistleblower -->
        <img
            src="assets/img/batik.png"
            alt="Whistleblower System"
            class="responsive-image">
    </div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const categories = document.querySelectorAll(".custom-category");
        const services = document.querySelectorAll(".custom-service-card");

        categories.forEach(category => {
            category.addEventListener("click", function () {
                categories.forEach(cat => cat.classList.remove("custom-active"));
                this.classList.add("custom-active");

                let categoryValue = this.getAttribute("data-category");

                services.forEach(service => {
                    service.style.display = (categoryValue === "all" || service.getAttribute("data-category") === categoryValue) ? "flex" : "none";
                });
            });
        });
    });
</script>
@endsection
