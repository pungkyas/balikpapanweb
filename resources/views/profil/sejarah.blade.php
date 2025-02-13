@extends('partials.partial')
@section('home')
    {{-- sejarah --}}
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
                text-align: center;
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

    </style>

<main class="main">

<section>
    <div class="headerrr">
        Sejarah
    </div>
        <div class="containerr">
            <h1><b>Sejarah Kota Balikpapan</b></h1>

            <p>Sejarah Kota Balikpapan tidak bisa dipisahkan dengan Minyak yaitu lebih tepatnya dengan sumur minyak Mathilda, sumur pengeboran perdana pada tanggal 10 Februari 1897 di kaki gunung Komendur di sisi timur Teluk Balikpapan. Penamaan sumur minyak ini berasal dari nama anak JH Menten dari JH Menten dan Firma Samuel & Co sebagai pemenang hak konsesi pengeboran yang ditunjuk pemerintah Hindia Belanda yang telah mengontrak Balikpapan dari Kesultanan Kutai.</p>

            <p>Di awal tahun 1900-an, bertambahnya jumlah penemuan dan pengeboran minyak di Balikpapan telah membawa pendatang dalam jumlah besar ke Balikpapan. Pendatang ini kebanyakan adalah orang Cina dan para pekerja pengeboran yang rata-rata berasal dari Jawa dan berbagai daerah lainnya seperti India. Pekerja dari Cina dan India inilah yang menjadi cikal bakal penghuni desa di Tukung (Klandasan) dan Jumpi (Kampung Baru) yang merupakan asal usul sebagian besar warga Balikpapan. Selain itu, keberadaan minyak, yaitu minyak tanah atau "lantung", juga mengundang semakin besarnya jumlah pedagang yang datang dari daerah Kerajaan Banjar di Banjarmasin dan Bone di Sulawesi Selatan untuk berdagang dan singgah di Balikpapan.</p>

            <p>Seiring dengan berkembangnya waktu, Balikpapan telah berkembang menjadi "Kota Minyak" dengan besarnya produksi minyak yang dihasilkan yang mencapai 86 juta barrel per tahun. Perkembangan industri minyak inilah yang telah membangun Balikpapan menjadi kota industri. Namun saat ini, Balikpapan tidak lagi menjadi Kota Minyak yang berorientasi pada pengeboran melainkan pada jasa pengolahan minyak yang telah mengolah minyak mentah dari sekitar Balikpapan, yaitu Sepinggan, Handil, Bekapai, Sanga-sanga, Tarakan, Bunyu, dan Tanjung serta minyak mentah yang diimpor dari negara lain.</p>

            <h1><b>Asal Usul Nama Balikpapan</b></h1>

            <p><b>Nama Balikpapan</b> berasal dari bahasa Melayu dan menurut buku karya F. Valenijn (1724), terdapat sebuah desa bernama "Bilipapan" di hulu sungai dekat Teluk yang kini dikenal dengan nama Teluk Balikpapan. Ada beberapa versi mengenai asal-usul nama Balikpapan.</p>

            <p>Versi pertama, yang bersumber dari buku "90 Tahun Kota Balikpapan," mengisahkan kejadian tahun 1739 di bawah pemerintahan Sultan Muhammad Idris dari Kerajaan Kutai. Sultan memerintahkan pemukim di sepanjang Teluk Balikpapan untuk menyumbang bahan bangunan berupa 1.000 lembar papan untuk istana baru di Kutai Lama. Namun, 10 papan terlepas dalam perjalanan dan ditemukan kembali di tempat yang kini disebut "Jenebora." Dari sini, nama "Balikpapan" diberikan, yang dalam bahasa Kutai berarti "papan yang kembali."</p>

            <p>Versi kedua, menurut legenda dari suku Pasir Balik, mengisahkan bahwa nama Balikpapan berasal dari keturunan pasangan "Kayun Kuleng" dan "Papan Ayun," yang memberi nama kampung nelayan di Teluk Balikpapan "Kuleng-Papan." Dalam bahasa Pasir, "Kuleng" berarti balik dan "Papan" berarti papan, sehingga "Balikpapan" diperkirakan sudah dikenal sejak sekitar tahun 1527.</p>
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

