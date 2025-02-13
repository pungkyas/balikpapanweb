@extends('partials.partial')
@section('home')
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        color: #333;
    }

    .swiper-container {
        width: 100%;
        height: 90vh;
        position: relative;
        overflow: hidden; /* Pastikan tidak ada scroll horizontal */
    }

    .swiper-slide {
        position: relative;
        width: 100%; /* Pastikan slide memiliki lebar penuh */
    }

    .swiper-slide img {
        width: 100%;
        height: 100%; /* Pastikan gambar mengisi slide sepenuhnya */
        object-fit: cover;
        filter: brightness(50%);
    }

    .content {
        position: absolute;
        bottom: 50px;
        left: 20px;
        color: white;
        text-align: left;
        max-width: 80%; /* Limit the text width */
    }

    .content h2 {
        color: white;
        font-size: 28px; /* Default title size */
    }

    .content p {
        margin-top: 30px;
        font-size: 14px;
    }

    .read-more {
        background: white;
        color: black;
        padding: 10px;
        border-radius: 5px;
        text-decoration: none;
        pointer-events: auto;
        z-index: 999999;
        display: inline-block;
    }

    .swiper-pagination {
        position: absolute;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%);
        padding: 1px 1px;
        border-radius: 20px;
        color: white;
        font-size: 16px;
    }

    .swiper-button-next, .swiper-button-prev {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .swiper-button-next::after, .swiper-button-prev::after {
        color: white;
        font-size: 20px;
    }

    /* Responsive Styling */

    /* Tablet Devices (up to 1024px) */
    @media (max-width: 1024px) {
        .swiper-container {
            height: 60vh; /* Reduce height on tablets */
        }

        .swiper-slide img {
            height: 70vh; /* Adjust height for tablet */
        }

        .content h2 {
            font-size: 24px; /* Slightly smaller text for tablets */
        }

        .content p {
            font-size: 13px; /* Smaller text size for tablet */
        }

        .read-more {
            padding: 8px 14px; /* Slightly smaller padding on tablets */
        }
    }

    /* Mobile Devices (up to 768px) */
    @media (max-width: 768px) {
        .swiper-container {
            height: 50vh; /* Reduce height on mobile */
        }

        .swiper-slide img {
            height: 55vh; /* Further adjust image height for mobile */
        }

        .content {
            bottom: 10px;
            left: 10px;
            max-width: 90%; /* Allow more room for content on mobile */
        }

        .content h2 {
            font-size: 20px; /* Smaller title text for mobile */
        }

        .content p {
            font-size: 12px; /* Smaller text for mobile */
            margin-top: 15px; /* Less space between title and description */
        }

        .read-more {
            padding: 6px 12px; /* Smaller button padding on mobile */
        }

        .swiper-pagination {
            font-size: 14px; /* Smaller pagination on mobile */
        }
    }

    /* Extra Small Devices (up to 480px) */
    @media (max-width: 480px) {
        .swiper-container {
            height: 45vh; /* Even smaller height for very small devices */
        }

        .swiper-slide img {
            height: 50vh; /* Adjust for smaller screens */
        }

        .content h2 {
            font-size: 18px; /* Further reduce text size */
        }

        .content p {
            font-size: 11px; /* Even smaller font size */
            margin-top: 10px;
        }

        .read-more {
            padding: 5px 10px; /* Even smaller padding for very small devices */
        }

        .swiper-pagination {
            font-size: 12px; /* Smaller pagination size */
        }
    }

        .news-container {
            display: flex;
            gap: 20px;
            margin-top: 60px;
        }
        .main-news {
            flex: 2;
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            margin-left: 100px;
            margin-top: 30px;
            height: 350px;
            transition: transform 0.3s ease-in-out;
        }
        .main-news img {
            width: 100%;
            height: 120%;
            border-radius: 10px;
            display: block;
            transition: transform 0.3s ease-in-out;
        }
        .main-news:hover {
            transform: scale(1.05);
        }
        .news-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 15px;
            border-radius: 0 0 10px 10px;
            transition: transform 0.3s ease-in-out;
        }
        .main-news:hover .news-overlay {
            transform: scale(1.0);
        }
        .news-overlay h2 {
            color: white;
            font-size: 20px;
        }
        .small-news {
            flex: 1;
            padding: 20px;
            border-radius: 10px;
            transition: background-color 0.3s ease;
            overflow-y: auto; /* Enable scroll for this container */
            max-height: 450px; /* Set a fixed height */
        }
        .small-news-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
            position: relative;
            padding-bottom: 5px;
            font-family: 'Poppins', sans-serif;

        }
        .small-news-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -5px;
            width: 100%;
            height: 1px;
            background: #034EA1;
        }
        .small-news-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            transition: background 0.3s ease;
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
        }
        .small-news-item:hover {
            background-color: #e8e8e8;
        }
        .small-news-item img {
            width: 90px;
            height: 60px;
            object-fit: cover;
            border-radius: 5px;
            margin-right: 10px;
            transition: transform 0.3s ease;
        }
        .small-news-item:hover img {
            transform: scale(1.1);
        }
        .small-news-item div h4 {
            color: #034EA1;
            font-size: 15px;
        }
        .small-news-item div p {
            color: #777;
        }
        .read-more {
            background: white;
            color: black;
            padding: 10px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
        }
                /* Responsive Styling */
                @media (max-width: 1024px) {
            .news-container {
                flex-direction: column;
                align-items: center;
            }
            .main-news {
                width: 90%;
                height: auto;
            }
            .small-news {
                max-height: none;
                overflow-y: visible;
            }
        }

        @media (max-width: 768px) {
            .news-container {
                margin-top: 30px;
                gap: 10px;
                padding: 5px;
            }
            .main-news {
                margin-left: 0;
                margin-right: 0;
                width: 100%;
                height: auto;
            }
            .small-news-item {
                flex-direction: column;
                align-items: flex-start;
            }
            .small-news-item img {
                width: 100%;
                height: auto;
                margin-bottom: 10px;
            }
        }

        @media (max-width: 480px) {
            .news-container {
                margin-top: 20px;
                gap: 5px;
            }
            .main-news {
                width: 100%;
            }
            .news-overlay h2 {
                font-size: 16px;
            }
            .small-news {
                padding: 10px;
            }
            .small-news-item h4 {
                font-size: 14px;
            }
        }

        .berita-lainnya-section {
            margin-top: -50px;
            padding: 20px;
            background-color: #ffff;
            border-radius: 10px;
        }

        .berita-lainnya-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .berita-lainnya-title {
            text-align: center;
            margin-bottom: 20px;
        }

        .berita-lainnya-title h2 {
            font-size: 38px;
            font-weight: bold;
            color: #034EA1;
        }

        .title-divider {
            margin-top: 10px;
            height: 2px;
            background-color: #034EA1;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
        }

        .berita-lainnya-news {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .berita-item {
            display: flex;
            align-items: center;
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            padding: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .berita-item:hover {
            transform: scale(1.05);
        }

        .berita-item img {
            width: 100px;
            height: 70px;
            object-fit: cover;
            border-radius: 5px;
            margin-right: 15px;
        }

        .berita-item div {
            flex: 1;
        }

        .berita-item h4 {
            font-size: 18px;
            color: #034EA1;
            margin-bottom: 5px;
        }

        .berita-item p {
            color: #777;
            font-size: 14px;
        }

        /* Pagination Styling */
        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .pagination select, .pagination button {
            margin: 0 5px;
            padding: 5px 10px;
            border: 1px solid #034EA1;
            background: white;
            color: #034EA1;
            cursor: pointer;
            border-radius: 5px;
        }

        .pagination button:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        @media (max-width: 768px) {
            .pagination label:first-child, #totalItems {
                display: none;
            }
        }

        @media (max-width: 1024px) {
            .berita-lainnya-news {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .berita-lainnya-news {
                grid-template-columns: repeat(1, 1fr);
            }
        }

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
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="assets/img/apel.png" alt="Berita 1">
                <div class="content">
                    <h2>Wali Kota Balikpapan Sampaikan Ekspos Akhir Tahun 2024</h2>
                    <p><i class="bi bi-calendar"></i> Tanggal: 23 Januari 2025 | <i class="bi bi-vector-pen"></i>  Penulis: Admin</p>
                    <a href="/detail_berita" class="read-more">Baca Selengkapnya</a>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="assets/img/upacara.png" alt="Berita 2">
                <div class="content">
                    <h2>Apel Terakhir 2024, Sekda sampaikan Evaluasi untuk ASN di Lingkungan Pemkot Balikpapan</h2>
                    <p><i class="bi bi-calendar"></i> Tanggal: Senin 30 Desember 2024 | <i class="bi bi-vector-pen"></i>  Penulis: Admin</p>
                    <a href="/detail_berita_1" class="read-more">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>

<section>
    <div class="news-container">
        <div class="main-news">
            <img src="assets/img/ibu ibu.png" alt="Berita utama">
            <div class="news-overlay">
                <h2>Masyarakat Balikpapan Diimbau Optimalkan Kerja Bakti, Cegah DPD dan Leptospirosis</h2>
                <p><i class="bi bi-calendar"></i> Tanggal: 23 Januari 2025 | <i class="bi bi-vector-pen"></i> Penulis: Admin</p>
                <a href="/detail_berita_3" class="read-more">Baca Selengkapnya</a>
            </div>
        </div>

        <div class="small-news">
            <div class="small-news-title">Berita Terbaru</div>
            <div class="small-news-item">
                <a href="/detail_berita_2"><img src="assets/img/hut dwp.jpg" alt="Thumbnail">
                <div>
                    <h4>HUT ke-25 DWP Kota Balikpapan, Jadi Momen Refleksi Perjalanan Organisasi</h4>
                    <p>Ekonomi | 21 Januari 2025</p>
                </a>
                </div>
            </div>
            <div class="small-news-item">
                <a href="/detail_berita_4"><img src="assets/img/pemkot.jpg" alt="Thumbnail">
                <div>
                    <h4>Pemkot Balikpapan Peroleh Nilai 94,64 dengan Predikat Informatif di Malam Penganugerahan KIP 2024</h4>
                    <p>Ekonomi | 20 Januari 2025</p>
                </a>
                </div>
            </div>
            <div class="small-news-item">
                <a href="/detail_berita_4"><img src="assets/img/pemkot.jpg" alt="Thumbnail">
                <div>
                    <h4>Pemkot Balikpapan Peroleh Nilai 94,64 dengan Predikat Informatif di Malam Penganugerahan KIP 2024</h4>
                    <p>Ekonomi | 20 Januari 2025</p>
                </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="berita-lainnya-section">
        <div class="berita-lainnya-container">
            <div class="berita-lainnya-title">
                <h2>Berita Lainnya</h2>
                <div class="title-divider"></div>
            </div>

            <div class="berita-lainnya-news" id="newsContainer">
            </div>
            <div class="title-divider"></div>
            <div class="pagination">
                <label>Tampilkan
                    <select id="itemsPerPage" onchange="updatePagination()">
                        <option value="9">9</option>
                        <option value="15">15</option>
                        <option value="30">30</option>
                    </select>
                    Item
                </label>
                dari total <span id="totalItems">0</span>
                <label>Halaman
                    <select id="currentPage" onchange="updatePagination()"></select>
                </label>
                dari <span id="totalPages">0</span>
                <button id="prevPage" onclick="changePage(-1)">&lt;</button>
                <button id="nextPage" onclick="changePage(1)">&gt;</button>
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
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        loop: true,
        autoplay: { delay: 5000, disableOnInteraction: false },
        pagination: { el: '.swiper-pagination', type: 'fraction' },
        navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' }
    });
</script>

<script>
    const totalNews = 174;
    let itemsPerPage = 15;
    let currentPage = 1;

    function updatePagination() {
        itemsPerPage = parseInt(document.getElementById("itemsPerPage").value);
        currentPage = parseInt(document.getElementById("currentPage").value) || 1;
        const totalPages = Math.ceil(totalNews / itemsPerPage);
        document.getElementById("totalItems").innerText = totalNews;
        document.getElementById("totalPages").innerText = totalPages;
        document.getElementById("currentPage").innerHTML = "";

        for (let i = 1; i <= totalPages; i++) {
            let option = new Option(i, i);
            document.getElementById("currentPage").add(option);
        }
        document.getElementById("currentPage").value = currentPage;
        loadNews();
    }

    function changePage(offset) {
        currentPage = Math.min(Math.max(1, currentPage + offset), Math.ceil(totalNews / itemsPerPage));
        document.getElementById("currentPage").value = currentPage;
        loadNews();
    }

    function loadNews() {
        let newsContainer = document.getElementById("newsContainer");
        newsContainer.innerHTML = "";
        for (let i = 0; i < itemsPerPage; i++) {
            let item = document.createElement("div");
            item.classList.add("berita-item");
            item.innerHTML = `<a href="/detail_berita_2"><img src='assets/img/hut dwp.jpg' alt='Thumbnail'>
                             <div>
                                 <h4>Berita ${((currentPage - 1) * itemsPerPage) + i + 1}</h4>
                                 <p>HUT ke-25 DWP Kota Balikpapan, Jadi Momen Refleksi Perjalanan Organisasi</p></a>
                             </div>`;
            newsContainer.appendChild(item);
        }
    }

    updatePagination();
</script>
@endsection
