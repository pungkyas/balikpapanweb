@extends('partials.partial')
@section('home')
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }


    .berita-container {
        position: relative;
        width: 100%;
        height: 60vh;
        background: url('assets/img/events2.jpg') no-repeat center center/cover;
        display: flex;
        align-items: center;
        color: white;
        padding: 20px;
    }

    .voverlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
    }

    .berita-content {
        position: relative;
        max-width: 800px;
        z-index: 2;
        margin-left: 12%;

    }

    .breadcrumb {
        font-size: 18px;
        margin-bottom: 10px;
        margin-top: 50px;
    }

    .breadcrumb a {
        color: #f9f9f9;
        text-decoration: none;
    }

    .breadcrumb a:hover {
        text-decoration: underline;
    }

    .berita-title {
        font-size: 36px;
        font-weight: bold;
        margin-bottom: 10px;
        color: #ffffff;
    }

    .berita-meta {
        font-size: 14px;
        opacity: 0.8;
    }

    .stats {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-top: 10px;
    }

    .stats span {
        display: flex;
        align-items: center;
        font-size: 14px;
    }

    .stats i {
        margin-right: 5px;
    }

    .btn-share {
        margin-top: 15px;
        padding: 10px 15px;
        background-color: #28a745;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        display: inline-block;
        font-size: 14px;
    }

    .btn-share:hover {
        background-color: #218838;
    }

    /* Responsiveness */
    @media (max-width: 768px){
        .berita-title {
            font-size: 20px;
            text-align: left;

        }

        .berita-container {
            height: 45vh;
            padding: 10px;
            text-align: left;
            margin-top: 20px;
        }

        .berita-content {
            text-align: left;
            margin-right: 12%;

        }

        .stats {
            align-items: left;
        }
    }

    @media (max-width: 480px) {
        .berita-title {
            font-size: 15px;
            text-align: left;

        }

        .berita-container {
            height: 45vh;
            padding: 10px;
            text-align: left;
            margin-top: 20px;
        }

        .berita-content {
            text-align: left;
            margin-right: 12%;

        }

        .stats {
            align-items: left;
        }
    }
    /* berita */
    body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
    /* Updated Main Content */
    .containerr {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1fr 300px;
        gap: 40px;
        padding: 0 20px;
    }

    .content {
        background: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 5px 25px rgba(0,0,0,0.05);
    }

    .content img {
        width: 100%;
        height: 400px;
        object-fit: cover;
        border-radius: 8px;
        margin-bottom: 30px;
    }

    .content h2 {
        color: #034EA1;
        margin-bottom: 25px;
        font-size: 2rem;
        font-weight: bold;
    }

    .content p {
        font-family: 'Poppins', sans-serif;
        text-align: justify;
        line-height: 1.8;
        color: #555;
        margin-bottom: 20px;
        font-size: 16px;
    }

        .related-news {
            flex: 1;
            position: sticky;
            top: 120px;
            height: fit-content;
            background: white;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .related-news h3 {
            margin-bottom: 10px;
            border-bottom: 2px solid #034EA1;
            padding-bottom: 5px;

        }

        .related-news h3 :hover {
            margin-bottom: 10px;
            border-bottom: 2px solid #034EA1;
            padding-bottom: 5px;

        }

        .news-item {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 15px;
        }
        .news-item img {
            width: 60%;
            height: 60%;
            border-radius: 5px;
            object-fit: cover;
        }
        .news-item a {
            text-decoration: none;
            color: #333;
            font-size: 14px;
            font-weight: bold;
        }
        @media (max-width: 768px) {
            .containerr {
                display: flex;
                flex-direction: column;
            }

            .content {
                padding: 20px;
            }

            .content img {
                height: 250px;
            }

            .content h2 {
                font-size: 1.5rem;
            }

            .content p {
                font-size: 14px;
            }

            .related-news {
                order: 2;
                margin-top: 20px;
                position: static;
                padding: 10px;
            }

            .news-item img {
                width: 50px;
                height: 50px;
            }

            .news-item a {
                font-size: 12px;
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
<section class="berita-container">
    <div class="voverlay"></div>
    <div class="berita-content">
        <div class="breadcrumb">
            <a href="{{ url('/home')}}">Beranda</a> > <a href="/eventt"><strong>Event</strong></a>
        </div>
        <h1 class="berita-title">HUT Ke-128, Rahmad Mas'ud: Jadikan Balikpapan Kota Terbaik di Negeri Ini</h1>
        <p class="berita-meta"> <i class="bi bi-calendar-event"></i> Februari 10, 2025  |
            <i class="bi bi-person"></i> Penulis: Admin</p>

        <div class="stats">
            <span>👀 294 kali</span>
            <span>🔄 0 kali dibagikan</span>
        </div>

        <a href="#" class="btn-share">Bagikan Berita</a>
    </div>
</section>

<section>
 <div class="containerr">
        <div class="content">
            <img src="assets/img/events2.jpg" alt="Berita Utama">
            <h2>Balikpapan Manuntung Art Fest 2022 Resmi Dibuka, Tampilkan Pentas Seni dan Budaya se-Nusantara</h2>
            <p>Pada HUT ke-128 Kota Balikpapan yang jatuh pada 10 Februari 2025, Wali Kota Balikpapan, Rahmad Mas'ud menyampaikan terima kasih atas jasa para pendiri Kota Balikpapan. Ia mengajak warga kota untuk secara berkelanjutan menjadikan Balikpapan sebagai salah satu kota terbaik di negeri Indonesia.

                Ia meyakinkan warga kota juga, bahwa meskipun instruksi Pemerintah Pusat untuk melakukan efisiensi anggaran, program- program prioritas akan tetap diutamakan.

                "Kami lakukan rasionalisasi anggaran, namum untuk BPJS gratis maupun pembangunan infrastruktur akan tetap kami prioritaskan. Apalagi yang berkaitan dengan Sumbar Daya Manusia (SDM)," ungkapnya usai bertugas sebagai inspektur upacara HUT ke-128 Kota Balikpapan di halaman Balikpapan Sport and Convention Center (BSCC) dome (10/2/2025).

                Ia juga bersyukur atas perolehan Kota Balikpapan, berupa tujuh penghargaan Arindama yang diterima pada HUT Provinsi beberapa waktu lalu. Pada momen HUT Kota Balikpapan ini, penghargaan tersebut diserahkan langsung oleh wali kota pada Organisasi Perangkat Daerah (OPD) yang membidangi.
                Tujuh Arindama ini meliputi Bidang Kesetaraan Gender; Bidang Ketentraman, Ketertiban Umum dan Perlindungan Masyarakat; bidang Pembangunan Perhubungan; Bidang Pembangunan Infrastruktur; bidang Pembangunan Komunikasi dan Informatika.

                Kemudian Bidang Pembangunan Perindustrian Perdagangan Koperasi dan UMKM; serta Bidang Pembangunan Investasi Daerah. Balikpapan juga berhasil menerima Grand Arindama Bidang Pelayanan Publik yang diserahkan pada Sekretaris Daerah Kota Balikpapan.

                "Alhamdulillah untuk meraih penghargaan ini memang susah-susah gampang. Tapi yang paling susah adalah mempertahankan. Maka mudah-mudahan kita bisa menjadikan momentum HUT Kota ini sebagai motivasi para Aparatur Sipil Negara (ASN) untuk giat dna tidak pernah puas terhadap prestasi yang sudah diperoleh," ungkapnya.

                Pada HUT Kota ini, tema "Harmoni Berkelanjutan" diharapkan bisa memotivasi masyarakat untuk terus memperkuat sinergi dan harmoni dalam keberagaman guna mendukung pembangunan kota yang berkelanjutan sehingga dapat menyentuh semua lapisan masyarakat.

                "Harmoni Berkelanjutan, suatu frasa sederhana yang memiliki makna mendalam, di mana kita sebagai entitas dengan beragam latar belakang diharapkan mampu bersatu dalam keharmonisan, disertai progres pembangunan yang secara nyata dirasakan manfaatnya oleh masyarakat, baik yang hidup di masa sekarang maupun generasi mendatang," ungkapnya.

                Wali Kota juga mengingatkan tentang perjalanan sejarah Balikpapan yang dimulai dari pengeboran sumur minyak Matilda, serta masa-masa kelam ketika kota ini menjadi medan pertempuran dalam Perang Dunia II, hingga menjadi kota yang bertransformasi menjadi pintu gerbang Ibu Kota Nusantara. Dan hari ini, kota yang terbentang indah dan menawan, antara hutan, bukit dan lautan, yang bertransformasi menjadi pintu gerbang Ibu Kota Nusantara, kembali menyambut fajar 10 Februari," ujar Rahmad Mas'ud.

                Tema ini juga berhubungan dengan peran Balikpapan sebagai kota yang dipercaya mampu menjalankan fungsi penting sebagai penyangga Ibu Kota Nusantara (IKN) serta komitmen untuk berkolaborasi dengan daerah sekitar dengan potensi dan keunggulan masing-masing agar manfaat dari pembangunan IKN dapat dirasakan oleh seluruh kabupaten dan kota di Kalimantan Timur.

                "Di usia Kota Balikpapan yang semakin dewasa ini, saya mengajak seluruh masyarakat untuk memperkuat komitmen mendukung pembangunan Ibu Kota Nusantara demi pembangunan nasional yang semakin merata," lanjutnya.

                Tidak hanya itu, Rahmad juga menyoroti pentingnya menjaga identitas kota yang modern dan ramah lingkungan. Dirinya menyebutkan bahwa adaptasi terhadap perkembangan teknologi dan perubahan zaman merupakan kunci untuk mencapai kemajuan.

                Rahmad Mas'ud juga mengapresiasi seluruh masyarakat yang turut serta dalam menyukseskan peringatan hari jadi kota melalui berbagai kegiatan gotong royong. Beberapa di antaranya adalah kerja bakti massal, pengecatan median jalan, serta hiasan lampu dan umbul-umbul yang mempercantik wajah kota Balikpapan.

                Pada HUT Kota Balikpapan kali ini salah satu yang istimewa adalah momen menyanyikan Hymne Balikpapan. Yang mana pencipta lagu ini, Raden Muhammad Syamsudin Dajat Hardjakusumah, atau lebih dikenal dengan Sam Bimbo turut hadir dan menyanyikan bersama peserta upacara dan tamu undangan.

                Pada upacara tersebut juga dilaksanakan penandatanganan prasasti sebagai tanda diresmikannya pembangunan gedung SMP 27 Balikpapan, SMP 28 Balikpapan, Kantor Kelurahan Sepinggan Baru, Aula Kantor Gunung Bahagia, dan Puskesmas Gunung Bahagia. (efa)</p>
        </div>
        <div class="related-news">
            <h3>Event Lainnya</h3>
            <div class="news-item">
                <a href="/detail_event_1"><img src="assets/img/events.jpg" alt="">
                Tjap Legende Hadirkan Kuliner Legendaris di Balikpapan</a>
            </div>
            <div class="news-item">
                <a href="/detail_event_2"><img src="assets/img/events3.jpg" alt="">
                Balikpapan Manuntung Art Fest 2022 Resmi Dibuka, Tampilkan Pentas Seni dan Budaya se-Nusantara</a>
            </div>
            <div class="news-item">
                <a href="/detail_event_3"><img src="assets/img/events2.jpg" alt="">
                Ajang Lomba Lari Jadi Gaya Hidup Masa Kini</a>
            </div>
        </div>
    </div>
</body>
</section>
<section>
        <div class="section-container">
            <img src="assets/img/balikpapan_nyaman.png" alt="Gambar di Pojok Kanan Bawah" />
         </div>
    </section>
<section>
    <div class="responsive-image-section">
</main>
    <div class="responsive-image-container">
        <!-- Gambar whistleblower -->
        <img
            src="assets/img/batik.png"
            alt="Whistleblower System"
            class="responsive-image">
    </div>

