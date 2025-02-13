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
    .containerr {
                width: 90%;
                max-width: 1200px;
                margin: 0 auto;
                padding: 20px;
                background-color: #fff;
            }

            h1 {
                text-align: left;
                color: #034EA1;
                font-size: 2rem;
                margin-bottom: 20px;
                font-family: 'Poppins', sans-serif;
            }

            .containerr p {
                font-size: 1.1rem;
                color: #034EA1;
                margin-bottom: 20px;
                font-family: 'Poppins', sans-serif;
                text-align: justify;
            }

            b {
                font-weight: bold;
                font-family: 'Poppins', sans-serif;

            }

            /* Responsivitas */
            @media (max-width: 768px) {
                h1 {
                    font-size: 1.6rem;
                }

                p {
                    font-size: 1rem;
                }
            }

            @media (max-width: 480px) {
                h1 {
                    font-size: 1.4rem;
                }

                p {
                    font-size: 0.95rem;
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
        Selayang Pandang
    </div>
        <div class="containerr">
            <h1><b>Fakta Geografis</b></h1>

            <p>Balikpapan adalah salah satu kota besar yang terletak di Provinsi Kalimantan Timur, dengan luas wilayah mencapai 843,48 km², terdiri dari 503,30 km² daratan dan 340,18 km² perairan. Kota ini berbatasan dengan Kabupaten Kutai Kertanegara di bagian utara, Selat Makassar di bagian selatan dan timur, serta Penajam Paser Utara di bagian barat.</p>

            <p>Secara topografi, sebagian besar wilayah Balikpapan memiliki kontur berbukit (85%), dengan ketinggian antara 0 hingga lebih dari 100 meter di atas permukaan laut (mdpl). Jenis tanah dominan di Balikpapan adalah podsolik merah-kuning, alluvial, dan pasir kuarsa yang rentan terhadap erosi.</p>

            <h1><b>Penduduk yang Heterogen dan Damai    </b></h1>

            <p>Hingga Januari 2015, jumlah penduduk Balikpapan tercatat sebanyak 706.414 jiwa, tersebar di enam kecamatan. Kecamatan dengan kepadatan tertinggi adalah Balikpapan Utara. Seiring dengan pesatnya pembangunan dan peluang ekonomi yang berkembang, kota ini menjadi tujuan migrasi banyak pendatang. Pada 2014, laju pertumbuhan penduduk mencapai 5,01%, dengan penambahan sebanyak 36.301 jiwa, dan kepadatan penduduk mencapai 1.380 jiwa/km².</p>

            <p>Jumlah pendatang yang besar menjadikan Balikpapan kota yang sangat heterogen, dengan keberagaman etnis, budaya, dan agama. Meskipun demikian, keberagaman ini tidak menjadi penghalang bagi keharmonisan hidup bermasyarakat. Tercatat ada lebih dari 104 kelompok etnis atau paguyuban yang turut berperan dalam menjaga kedamaian dan kesatuan di kota ini, menjadikan Balikpapan salah satu kota paling kondusif di Indonesia.</p>

            <h1><b>Perekonomian yang Menjanjikan</b></h1>

            <p>Balikpapan memiliki posisi geografis yang sangat strategis, berada di tengah jaringan transportasi Trans Kalimantan dan Trans Nasional, serta memiliki Pelabuhan Laut Semayang dan Bandara Internasional Sultan Aji Muhammad Sulaiman Sepinggan, yang merupakan pelabuhan laut dan bandara terbesar di Kalimantan Timur. Infrastruktur ini menjadikan Balikpapan sebagai pintu gerbang bagi provinsi Kalimantan Timur, yang mendukung pesatnya pembangunan dan kemajuan ekonomi di kota ini.</p>

            <p>Sebagai kota jasa, Balikpapan juga diakui sebagai salah satu kota MICE (Meeting, Incentive, Conference, and Exhibition) terbaik di Indonesia, tempat berbagai pertemuan, konferensi, dan pameran berskala nasional maupun internasional. Fasilitas pendukung seperti gedung pertemuan, hotel, dan gedung kesenian yang luas, memberikan ruang bagi acara-acara besar dengan kapasitas lebih dari 1.000 orang.</p>

            <p>Perekonomian Balikpapan semakin meningkat dengan hadirnya terminal baru Bandara Internasional Sultan Aji Muhammad Sulaiman Sepinggan, yang diresmikan pada 15 September 2014. Bandara ini kini mampu menampung hingga 15 juta penumpang per tahun dan menjadi bandara terbesar dan termegah di Indonesia bagian timur.</p>
            <p>Salah satu proyek infrastruktur besar yang akan memperkuat perekonomian Balikpapan adalah Kawasan Industri Kariangau, yang terletak di bagian barat laut kota. Kawasan ini seluas 2.271 hektar, dirancang untuk mempermudah distribusi produk serta mengantisipasi dampak negatif dari pembangunan pabrik. Kawasan ini juga dilengkapi dengan Pelabuhan Peti Kemas Internasional Kariangau, yang merupakan pelabuhan terbesar di Indonesia bagian timur.</p>
            <h1><b>Komitmen terhadap Kelestarian Lingkungan</b></h1>

            <p>Balikpapan dikenal dengan kesadaran tinggi terhadap kelestarian lingkungan. Penghargaan Adipura, Adiwiyata, dan Kalpataru yang sering diterima mencerminkan budaya bersih dan peduli lingkungan yang telah mendarah daging di kalangan masyarakat kota ini. Gerakan Clean, Green, and Healthy (CGH), yang dimulai oleh Pemerintah Kota Balikpapan pada awal 2000-an, terus berkembang hingga saat ini, didukung oleh partisipasi aktif masyarakat dalam program pemerintah maupun inisiatif pribadi.</p>

            <p>Pemerintah Kota Balikpapan juga telah menerapkan kebijakan rasio 52:48 dalam penataan ruang, di mana 52% dari kawasan kota dialokasikan untuk kawasan lindung/hijau, sementara 48% sisanya digunakan untuk kawasan budidaya. Selain itu, kebijakan pelarangan tambang batu bara terbuka bertujuan untuk melindungi lingkungan dari kerusakan yang disebabkan oleh eksploitasi yang tidak terkendali. Kedua kebijakan ini berperan penting dalam menjaga keseimbangan antara pembangunan dan kelestarian alam di kota Balikpapan.</p>
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
