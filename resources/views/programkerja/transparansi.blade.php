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
    /* deskripsi  */
    .uniq-document-container {
                display: flex;
                gap: 20px;
                padding: 20px;
                background-color: #eef2f7;
                font-family: "Poppins", sans-serif;
            }

            .uniq-sidebar {
                width: 25%;
                background: #ffffff;
                padding: 20px;
                border-radius: 12px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .uniq-sidebar h2 {
                font-size: 20px;
                margin-bottom: 15px;
            }

            .uniq-sidebar select {
                width: 100%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 6px;
                font-size: 14px;
            }

            .uniq-content {
                width: 75%;
            }

            .uniq-content h1 {
                font-size: 26px;
                color: #2b6cb0;
                margin-bottom: 20px;
            }

            .uniq-card {
                background: #ffffff;
                padding: 20px;
                border-radius: 12px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                display: flex;
                align-items: center;
                gap: 15px;
                margin-bottom: 20px;
                justify-content: space-between;
            }

            .uniq-card-content {
                flex-grow: 1;
            }

            .uniq-doc-label {
                display: inline-block;
                background: #034EA1;
                color: white;
                padding: 5px 10px;
                border-radius: 5px;
                font-size: 12px;
            }

            .uniq-card h2 {
                font-size: 18px;
                margin: 5px 0;
            }

            .uniq-card p {
                font-size: 14px;
                color: #555;
            }

            .uniq-date {
                font-size: 12px;
                color: #888;
            }

            .uniq-buttons button {
                padding: 8px 12px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                margin-left: 5px;
                transition: color 0.3s ease; /* Transisi halus untuk perubahan warna */
            }

            .uniq-buttons .uniq-view {
            background: linear-gradient(90deg, #8BC43F 0%, #00CB44 100%);
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 5px;
            font-weight: bold;
            white-space: nowrap;
            transition: color 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .uniq-buttons .uniq-view:hover {
            background: white;
            color: #034EA1;
            border: 2px solid #034EA1;
        }
        @media (max-width: 480px) {
    .uniq-document-container {
        flex-direction: column;
    }

    .uniq-sidebar {
        width: 100%;
        padding: 10px;
    }

    .uniq-content {
        width: 100%;
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
        Transparansi Pengelolaan Keuangan
    </div>
    <section>
        <div class="uniq-document-container">
            <div class="uniq-sidebar">
                <h2>Pengelolaan APBD Kota Balikpapan</h2>
                <select id="yearSelector" onchange="updateDocuments()">
                    <option value="2025">PENGELOLAAN APBD TAHUN 2025</option>
                    <option value="2024">PENGELOLAAN APBD TAHUN 2024</option>
                    <option value="2023">PENGELOLAAN APBD TAHUN 2023</option>
                    <option value="2022">PENGELOLAAN APBD TAHUN 2022</option>
                    <option value="2021">PENGELOLAAN APBD TAHUN 2021</option>
                    <option value="2020">PENGELOLAAN APBD TAHUN 2020</option>
                    <option value="2019">PENGELOLAAN APBD TAHUN 2019</option>
                    <option value="2018">PENGELOLAAN APBD TAHUN 2018</option>
                    <option value="2017">PENGELOLAAN APBD TAHUN 2017</option>
                    <option value="2016">PENGELOLAAN APBD TAHUN 2016</option>
                    <option value="2015">PENGELOLAAN APBD TAHUN 2015</option>
                    <option value="2014">PENGELOLAAN APBD TAHUN 2014</option>
                </select>
            </div>
            <div class="uniq-content">
                <h1>Dokumen Perencanaan</h1>
                <div id="documentList"></div>
            </div>
        </div>
    </section>
    <section>
        <div class="section-container">
            <img src="assets/img/balikpapan_nyaman.png" alt="Gambar di Pojok Kanan Bawah" />
         </div>
    </section>
</main>
    <div class="responsive-image-container">
        <!-- Gambar whistleblower -->
        <img
            src="assets/img/batik.png"
            alt="Whistleblower System"
            class="responsive-image">
    </div>
@endsection
<script>
    const documents = {
        2025: [
            { title: "Kebijakan Umum Anggaran (KUA) Tahun 2025", desc: "", date: "05/07/2024", viewLink: "#"},
            { title: "Perioritas dan Plafon Anggaran Sementara (PPAS) Tahun 2025", desc: "Perioritas dan Plafon Anggaran Sementara (PPAS) Tahun 2025", viewLink: "/transparansi_2025_1"},
            { title: "Ringkasan RKA SKPD Tahun 2025", desc: "Ringkasan RKA SKPD Tahun 2025", date: "05/07/2024", viewLink: "#"},
            { title: "Ringkasan DPA SKPD Tahun 2025", desc: "Ringkasan DPA SKPD Tahun 2025", date: "05/07/2024", viewLink: "#"},
            { title: "APBD Tahun 2025", desc: "APBD Tahun 2025", date: "05/07/2024", viewLink: "/transparansi_2025_1  "},
            { title: "Perubahan APBD Tahun 2025", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "#"},
            { title: "Laporan Keuangan Tahun 2025 (Audited)", desc: "Laporan Keuangan Tahun 2025 (Audited)", date: "12/08/2024", viewLink: "#" }
        ],
        2024: [
            { title: "Kebijakan Umum Anggaran (KUA) Tahun 2024", desc: "Kebijakan Umum Anggaran (KUA) Tahun 2025", date: "05/07/2024", viewLink: "https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2024/Anggaran_2024/BUKU%20KUA%202024.pdf"},
            { title: "Perioritas dan Plafon Anggaran Sementara (PPAS) Tahun 2024", desc: "Perioritas dan Plafon Anggaran Sementara (PPAS) Tahun 2025", viewLink: "https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2024/Anggaran_2024/BUKU%20PPAS%202024.pdf"},
            { title: "Ringkasan RKA SKPD Tahun 2024", desc: "Ringkasan RKA SKPD Tahun 2025", date: "05/07/2024", viewLink:"/transparansi_2024_1"},
            { title: "Ringkasan DPA SKPD Tahun 2024", desc: "Ringkasan DPA SKPD Tahun 2025", date: "05/07/2024", viewLink: "/transparansi_2024_2"},
            { title: "APBD Tahun 2024", desc: "APBD Tahun 2025", date: "05/07/2024", viewLink: "/transparansi_2024_3"},
            { title: "Perubahan APBD Tahun 2024", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "/transparansi_2024_4"},
            { title: "Laporan Keuangan Tahun 2024(Audited)", desc: "Laporan Keuangan Tahun 2025 (Audited)", date: "12/08/2024", viewLink: "#" }
        ],
        2023: [
            { title: "Kebijakan Umum Anggaran (KUA) Tahun 2023", desc: "Kebijakan Umum Anggaran (KUA) Tahun 2025", date: "05/07/2024", viewLink: "https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2023/6.%20Kebijakan%20Umum%20Anggaran%20(KUA)%20Tahun%202022.pdf"},
            { title: "Perioritas dan Plafon Anggaran Sementara (PPAS) Tahun 2023", desc: "Perioritas dan Plafon Anggaran Sementara (PPAS) Tahun 2025", viewLink: "https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2023/PPAS%202023.pdf"},
            { title: "Ringkasan RKA SKPD Tahun 2023", desc: "Ringkasan RKA SKPD Tahun 2025", date: "05/07/2024", viewLink: "/transparansi_2023"},
            { title: "Ringkasan DPA SKPD Tahun 2023", desc: "Ringkasan DPA SKPD Tahun 2025", date: "05/07/2024", viewLink: "/transparansi_2023_1"},
            { title: "APBD Tahun 2023", desc: "APBD Tahun 2025", date: "05/07/2024", viewLink: "/transparansi_2023_2"},
            { title: "Perubahan APBD Tahun 2023", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "/transparansi_2023_3"},
            { title: "Ringkasan RKA Perubahan Anggaran Pendapatan dan Belanja Daerah Tahun Anggaran 2023", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "/transparansi_2023_4"},
            { title: "Laporan Keuangan Tahun 2023 (Audited)", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "#"},
            { title: "Informasi SK Kepala Daerah Tentang Pejabat Pengelola Keuangan Daerah", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "/transparansi_2023_5"},
            { title: "Peraturan Kepala Daerah tentang Kebijakan Akuntansi", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2023/perwali_nomor_24_tahun_2023%20kebijakan%20akuntansi.pdf"},
            { title: "Rencana Umum Pengadaan", desc: "Laporan Keuangan Tahun 2025 (Audited)", date: "12/08/2024", viewLink: "/transparansi_2023_6" }
        ],
        2022: [
            { title: "Kebijakan Umum Anggaran (KUA) Tahun 2022", desc: "Kebijakan Umum Anggaran (KUA) Tahun 2025", date: "05/07/2024", viewLink: "https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2022/KUA%202022%20-%20ALL.pdf"},
            { title: "Prioritas dan Plafon Anggaran Sementara (PPAS) Tahun 2022", desc: "Perioritas dan Plafon Anggaran Sementara (PPAS) Tahun 2025", viewLink: "https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2022/PPAS_2022.pdf"},
            { title: "Ringkasan RKA SKPD Tahun 2022", desc: "Ringkasan RKA SKPD Tahun 2025", date: "05/07/2024", viewLink: "/transparansi_2022_1"},
            { title: "Ringkasan DPA SKPD Tahun 2022", desc: "Ringkasan DPA SKPD Tahun 2025", date: "05/07/2024", viewLink: "/transparansi_2022_2"},
            { title: "APBD Tahun 2022", desc: "APBD Tahun 2025", date: "05/07/2024", viewLink: "/transparansi_2022_3"},
            { title: "Perubahan APBD Tahun 2022", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "/transparansi_2022_4"},
            { title: "Laporan Keuangan Tahun 2022 (Audited) :", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "/transparansi_2022_5"},
            { title: "SK Kuasa Pengguna Anggaran 2022", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2023/SK%20188.45-637%202022_001%20(SK%20KPA).pdf"},
            { title: "Informasi SK Kepala Daerah Tentang Pejabat Pengelola Keuangan Daerah", desc: "Laporan Keuangan Tahun 2025 (Audited)", date: "12/08/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2022/SK%20PA%202022.pdf    " }
        ],
        2021: [
            { title: "Ringkasan RKA SKPD Tahun 2021", desc: "Kebijakan Umum Anggaran (KUA) Tahun 2025", date: "05/07/2024", viewLink: "/transparansi_2021_1"},
            { title: "Ringkasan DPA SKPD Tahun 2021", desc: "Perioritas dan Plafon Anggaran Sementara (PPAS) Tahun 2025", viewLink: "/transparansi_2021_2"},
            { title: "RAPERDA APBD Tahun 2021", desc: "Ringkasan RKA SKPD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/RAPERDA%20APBD%202021.pdf"},
            { title: "PPAS Tahun 2021", desc: "Ringkasan DPA SKPD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/PPAS%202021.pdf"},
            { title: "KUA Tahun 2021", desc: "APBD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/KUA%202021.pdf"},
            { title: "Perda tentang APBD Tahun 2021", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/PERDA_2021_-_APBD.pdf"},
            { title: "ingkasan Penjabaran APBD Tahun 2021 Level Jenis", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/PERDA_2021_-_LAMP_1_JENIS.pdf"},
            { title: "Ringkasan Penjabaran APBD Tahun 2021 Level Rincian", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/PERWALI_2021_-_LAMP_1_RINCI.pdf"},
            { title: "Ringkasan APBD Tahun 2021 Menurut Urusan", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/PERDA_2021_-_LAMP_2_PERurusan.pdf"},
            { title: "Perwali tentang Penjabaran APBD Tahun 2021", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/PERWALI_2021_-_APBD.pdf"},
            { title: "Ringkasan RAPERDA tentang APBD Tahun 2021", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/RINGKASAN_RAPERDA_TTG_APBD_TA2021.pdf"},
            { title: "RAPERDA APBD Perubahan Tahun 2021", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/RAPERDA%20APBD%20P%202021.pdf"},
            { title: "PERDA Perubahan APBD Tahun 2021", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/PERWALI%20PERUBAHAN%20APBD%20TA%202021.pdf"},
            { title: "Perwali Perubahan APBD Tahun 2021", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/PERDA%20PERUBAHAN%20APBD%20TA%202021.pdf"},
            { title: "Laporan Arus Kas Tahun 2021", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "https://web.balikpapan.go.id/uploaded/BALIKPAPAN_LAK_2021.pdf"},
            { title: "Laporan Realisasi Anggaran SKPD Tahun 2021 (Audited)", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/LRA_SKPD_2021_merged.pdf"},
            { title: "Laporan Realisasi Anggaran Tahun 2021 (Audited)", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/BALIKPAPAN_LRA_2021.pdf"},
            { title: "Neraca Tahun 2021", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "https://web.balikpapan.go.id/uploaded/BALIKPAPAN_NERACA_2021.pdf"},
            { title: "Laporan Operasional Tahun 2021", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "https://web.balikpapan.go.id/uploaded/BALIKPAPAN_LO_2021.pdf"},
            { title: "Laporan Perubahan Saldo Anggaran Lebih Tahun 2021", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "https://web.balikpapan.go.id/uploaded/BALIKPAPAN_SAL_2021.pdf"},
            { title: "Laporan Perubahan Ekuitas 2021", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "https://web.balikpapan.go.id/uploaded/BALIKPAPAN_LPE_2021.pdf"},
            { title: "Catatan Atas Laporan Keuangan (CALK) Tahun 2021", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "https://web.balikpapan.go.id/uploaded/BALIKPAPAN_CALK_2021_.pdf"},
            { title: "Laporan Keuangan Pemerintah Daerah (LKPD) Tahun 2021", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/LKPD_AUDITED_2021_PERDA.pdf"},
            { title: "Aset 2021", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "https://web.balikpapan.go.id/uploaded/rekap_neraca_audited_2021.pdf"},
            { title: "Laporan Keuangan Perumda Manuntung Sukses Tahun 2021", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "https://web.balikpapan.go.id/uploaded/LAPORAN_PERUSDA_2021.pdf"},
            { title: "Laporan Keuangan Perumda Tirta Manuntung (PDAM) Tahun 2021", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "https://web.balikpapan.go.id/uploaded/LAPORAN_PDAM_2021.pdf"},
            { title: "Opini Kota Balikpapan Tahun 2021", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/OPINI_BALIKPAPAN_2021.pdf"},
            { title: "Perda LKPD 2021", desc: "Laporan Keuangan Tahun 2025 (Audited)", date: "12/08/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/PERDA%20LKPD%202021.pdf" },
            { title: "Perwal Penjabaran LKPD 2021", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2021/PERWAL%20PENJABARAN%20LKPD%202021.pdf"}
        ],
        2020: [
            { title: "Ringkasan RKA SKPD Tahun 2020", desc: "Kebijakan Umum Anggaran (KUA) Tahun 2025", date: "05/07/2024", viewLink: "/transparansi_2020_1"},
            { title: "Ringkasan DPA SKPD Tahun 2020", desc: "Perioritas dan Plafon Anggaran Sementara (PPAS) Tahun 2025", viewLink: "/transparansi_2020_2"},
            { title: "Ringkasan RKA PPKD Tahun 2020", desc: "Ringkasan RKA SKPD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2020/RINGKASAN_RKA_PPKD_TA_2020.pdf"},
            { title: "Ringkasan DPA PPKD Tahun 2020", desc: "Ringkasan DPA SKPD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2020/RINGKASAN_DPA_PPKD_TA_2020.pdf"},
            { title: "Perda No. 7 tahun 2019 tentang APBD Tahun 2020", desc: "APBD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2020/PERATURAN_DAERAH_APBD_2020.pdf"},
            { title: "Ringkasan Penjabaran APBD Tahun 2020 Level Jenis", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2020/LAMPIRAN_I_JENIS_2020.pdf"},
            { title: "Ringkasan Penjabaran APBD Tahun 2020 Level Rincian", desc: "Laporan Keuangan Tahun 2025 (Audited)", date: "12/08/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2020/LAMPIRAN_I_RINCI_2020.pdf" },
            { title: "RRingkasan APBD Tahun 2020 Menurut Urusan", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2020/LAMPIRAN_II.pdf"},
            { title: "Perwali No.34 Tahun 2019 tentang Penjabaran APBD Tahun 2020", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2020/PERATURAN_WALI_KOTA_APBD_2020.pdf"},
            { title: "Perubahan APBD Tahun 2020", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/PERDA_2020_-_APBD-P.pdf"},
            { title: "Laporan Arus Kas Tahun 2020", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/LAK1.pdf"},
            { title: "Laporan Realisasi Anggaran Tahun 2020 (Audited)", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/LRA1.pdf"},
            { title: "Neraca Tahun 2020", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/Neraca1.pdf"},
            { title: "Rekapitulasi Penambahan Aset Tetap TA 2020", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/Rekap_Penambahan_Aset_Tetap.pdf"},
            { title: "Investasi Tahun 2020", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/Daftar_Investasi2.pdf"},
            { title: "Catatan Atas Laporan Keuangan (CALK) TA 2020", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/CaLK_Audited_2020.pdf"},
            { title: "Daftar Penerima Hibah dan Bantuan Sosial Tahun 2020", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/PERUBAHAN_KEDUA_SK_HIBAH.pdf"},
            { title: "Ringkasan Raperda tentang APBD TA 2020", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2020/RINGKASAN_RAPERDA_TTG_APBD_TA_2020.pdf"},
            { title: "Pergeseran Anggaran Tahun 2020", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "/transparansi_2020_3"}
        ],
        2019: [
            { title: "Ringkasan RKA SKPD", desc: "Kebijakan Umum Anggaran (KUA) Tahun 2025", date: "05/07/2024", viewLink: "/transparansi_2019_1"},
            { title: "Ringkasan RKA PPKD", desc: "Perioritas dan Plafon Anggaran Sementara (PPAS) Tahun 2025", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/ringkasanDPAOPD2019/3.00_.03_.00_._-_PPKD_.pdf"},
            { title: "Ringkasan DPA SKPD", desc: "Ringkasan RKA SKPD Tahun 2025", date: "05/07/2024", viewLink: "/transparansi_2019_2"},
            { title: "Ringkasan DPA PPKD", desc: "Ringkasan DPA SKPD Tahun 2025", date: "05/07/2024", viewLink: "https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/ringkasanDPAOPD2019/3.00_.03_.00_._-_PPKD_1.pdf"},
            { title: "Perda tentang APBD Tahun 2019", desc: "APBD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/PERDA_TTG_APBD_TA_2019.pdf"},
            { title: "Ringkasan Penjabaran APBD Tahun 2019 Level Jenis", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/uploaded/ProgramKerja/tpad2019/LAMPIRAN_I_-_JENIS.pdf"},
            { title: "Ringkasan Penjabaran APBD Tahun 2019 Level Rincian", desc: "Laporan Keuangan Tahun 2025 (Audited)", date: "12/08/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/LAMPIRAN_I_-_RINCI.pdf" },
            { title: "Perwal Penjabaran APBD TA 2019", desc: "Laporan Keuangan Tahun 2025 (Audited)", date: "12/08/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/PERWAL_TTG_PENJABARAN_APBD_TA_2019.pdf" },
            { title: "Ringkasan Raperda tentang APBD TA 2019", desc: "Laporan Keuangan Tahun 2025 (Audited)", date: "12/08/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/RINGKASAN_RAPERDA_TTG_APBD_TA_2019.pdf" },
            { title: "Laporan Realisasi Anggaran, Neraca, Laporan Perubahan Saldo Anggaran Lebih, Laporan Arus Kas, Laporan Operasional, Laporan Perubahan Ekuitas", desc: "Laporan Keuangan Tahun 2025 (Audited)", date: "12/08/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/Face_LKPD_2019_Audited.pdf" },
            { title: "Surat Representasi Manajemen tentang Sistem Pengendalian Intern (SPI) dan Kesesuaian dengan Standar Akutansi Pemerintahan", desc: "Laporan Keuangan Tahun 2025 (Audited)", date: "12/08/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/SURAT_REPRESENTASI_MANAJEMEN.pdf" },
            { title: "Opini BPK Atas Laporan Keuangan (Audited), Ikhtisar Laporan Keungan BUMD PDAM, Ikhtisar Laporan Keungan BUMD Perumda Manuntung Sukses", desc: "Laporan Keuangan Tahun 2025 (Audited)", date: "12/08/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/OPINI_BPK_DAN_LAPKEU_BUMD.pdf" },
            { title: "Daftar Investasi", desc: "Laporan Keuangan Tahun 2025 (Audited)", date: "12/08/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/Daftar_Investasi_2019.pdf" },
            { title: "Kondisi Makro Ekonomi", desc: "Laporan Keuangan Tahun 2025 (Audited)", date: "12/08/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/KONDISI_MAKRO_2019.pdf" },
            { title: "Catatan Atas Laporan Keuangan (CALK) Audited", desc: "Laporan Keuangan Tahun 2025 (Audited)", date: "12/08/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/CALK_AUDITED_2019.pdf" },
            { title: "Rekap Penambahan Aset Tetap 2019", desc: "Laporan Keuangan Tahun 2025 (Audited)", date: "12/08/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/REKAP_PENAMBAHAN_ASET_TETAP_2019.pdf" },
            { title: "Keterangan Publikasi Data", desc: "Laporan Keuangan Tahun 2025 (Audited)", date: "12/08/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/KETERANGAN_PUBLIKASI_DATA.pdf" },
            { title: "Daftar Penerima Hibah dan Bantuan Sosial TA 2019", desc: "Laporan Keuangan Tahun 2025 (Audited)", date: "12/08/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/SK_PERUBAHAN_KEDUA_TENTANG_PEMBERIAN_DANA_HIBAH_KEPADA_BADAN_LE.pdf" },
            { title: "Realisasi Perjalanan Dinas Tahun 2018", desc: "Laporan Keuangan Tahun 2025 (Audited)", date: "12/08/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2019/REALISASI_SPPD_2018.pdf" }
        ],
        2018: [
            { title: "Ringkasan RKA SKPD", desc: "Kebijakan Umum Anggaran (KUA) Tahun 2025", date: "05/07/2024", viewLink: "/transparansi_2018_1"},
            { title: "Ringkasan RKA PPKD", desc: "Perioritas dan Plafon Anggaran Sementara (PPAS) Tahun 2025", viewLink: "https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/RKA2018/3.00.03.00.-PPKD.pdf"},
            { title: "Ringkasan DPA SKPD", desc: "Ringkasan RKA SKPD Tahun 2025", date: "05/07/2024", viewLink: "/transparansi_2018_2"},
            { title: "Ringkasan DPA PPKD", desc: "Ringkasan DPA SKPD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/DPA2018/3.00.03.00.-PPKD.pdf"},
            { title: "Raperda APBD", desc: "APBD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/RAPERDAAPBD2018[19066].pdf"},
            { title: "Perda APBD", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/PERDA_APBD_TA2018.pdf"},
            { title: "Ringkasan Raperda tentang APBD TA 2018", desc: "Laporan Keuangan Tahun 2025 (Audited)", date: "12/08/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/RINGKASAN_RAPERDA_TTG_APBD_2018.pdf" },
            { title: "Perwali tentang Penjabaran APBD TA 2018", desc: "Laporan Keuangan Tahun 2025 (Audited)", date: "12/08/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/PERWALI_TTG_PENJABARAN_APBD_TA_2018.pdf" },
            { title: "Raperda Perubahan APBD", desc: "Laporan Keuangan Tahun 2025 (Audited)", date: "12/08/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/RAPERDAAPBD-P2018.pdf" },
            { title: "Perda Perubahan APBD", desc: "Laporan Keuangan Tahun 2025 (Audited)", date: "12/08/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/PERDA_APBDP_TA2018.pdf" },
            { title: "Laporan Arus Kas", desc: "Laporan Keuangan Tahun 2025 (Audited)", date: "12/08/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/LK-LAK_2018.pdf" },
            { title: "Laporan Realisasi Anggaran", desc: "Laporan Keuangan Tahun 2025 (Audited)", date: "12/08/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/LK-LRA_2018.pdf" },
            { title: "Neraca", desc: "Laporan Keuangan Tahun 2025 (Audited)", date: "12/08/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/NERACA_2018.pdf" },
            { title: "Daftar Aset Tetap", desc: "Laporan Keuangan Tahun 2025 (Audited)", date: "12/08/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/Daftar_Aset_Tetap_2018.pdf" },
            { title: "Daftar Aset Lainnya", desc: "Laporan Keuangan Tahun 2025 (Audited)", date: "12/08/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/Daftar_Aset_Lainnya_2018.pdf" },
            { title: "Investasi", desc: "Laporan Keuangan Tahun 2025 (Audited)", date: "12/08/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/Daftar_Investasi_2018.pdf" },
            { title: "Catatan Atas Laporan Keuangan (CALK)", desc: "Laporan Keuangan Tahun 2025 (Audited)", date: "12/08/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/CaLK_2018_Audited.pdf" },
            { title: "Opini BPK RI atas Pemeriksaan LKPD Kota Balikpapan TA 2018", desc: "Laporan Keuangan Tahun 2025 (Audited)", date: "12/08/2024", viewLink: "#" },
            { title: "Daftar Penerima Hibah dan Bantuan Sosial TA 2018", desc: "Laporan Keuangan Tahun 2025 (Audited)", date: "12/08/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/Perubahan_Ke_Empat_hibah2018.pdf" },
            { title: "Realisasi Perjalanan Dinas", desc: "Laporan Keuangan Tahun 2025 (Audited)", date: "12/08/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2018/REALISASI_SPPD_2018.pdf" }
        ],
        2017: [
            { title: "Laporan Penyaluran Dana Hibah Tahun Anggaran 2017", desc: "Kebijakan Umum Anggaran (KUA) Tahun 2025", date: "05/07/2024", viewLink: "#"},
            { title: "Laporan Arus Kas 2017", desc: "Perioritas dan Plafon Anggaran Sementara (PPAS) Tahun 2025", viewLink: "https://web.balikpapan.go.id/uploaded/ProgramKerja/laporankeuangan2017/LAK.pdf"},
            { title: "Laporan Realisasi Anggaran 2017", desc: "Ringkasan RKA SKPD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/laporankeuangan2017/"},
            { title: "Neraca 2017", desc: "Ringkasan DPA SKPD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/laporankeuangan2017/LRA.pdf"},
            { title: "Aset Lainnya 2017", desc: "Ringkasan RKA SKPD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/laporankeuangan2017/ASET_LAINNYA-2017.pdf"},
            { title: "Penambahan Aset 2017", desc: "APBD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/laporankeuangan2017/PENAMBAHAN_ASET-2017.pdff"},
            { title: "Investasi 2017", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/laporankeuangan2017/INVESTASI-2017.pdf"},
            { title: "Catatan Atas Laporan Keuangan 2017", desc: "Laporan Keuangan Tahun 2025 (Audited)", date: "12/08/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/laporankeuangan2017/CaLK_Audited_Ok.pdf" }
        ],
        2016: [
            { title: "Ringkasan APBD Tahun 2016 ", desc: "Kebijakan Umum Anggaran (KUA) Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2016/LAMPIRAN%20I.pdf"},
            { title: "Ringkasan APBD Tahun 2016 Menurut Urusan Pemerintahan Daerah dan Organisasi", desc: "Perioritas dan Plafon Anggaran Sementara (PPAS) Tahun 2025", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2016/LAMPIRAN%20II.pdf"},
            { title: "Rincian APBD Tahun 2016 Menurut Urusan Pemerintahan Daerah, Organisasi, Pendapatan, Belanja dan Pembiayaan", desc: "Ringkasan RKA SKPD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2016/LAMPIRAN%20III.pdf"},
            { title: "Rekapitulasi Belanja APBD Tahun 2016 Menurut Organisasi Urusan Pemerintah Daerah Program dan Kegiatan", desc: "Ringkasan DPA SKPD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2016/LAMPIRAN%20IV.pdf"},
            { title: "Rekapitulasi Belanja Daerah Tahun 2016 Untuk Keselarasan dan Keterpaduan Urusan Pemerintahan Daerah dan Fungsi dalam Kerangka Pengelolaan Negara", desc: "APBD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2016/LAMPIRAN%20V-XIII.pdf"},
            { title: "Laporan Arus Kas 2016", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/laporankeuangan2016/LAK-2016.pdf"},
            { title: "Laporan Realisasi Anggaran 2016", desc: "Laporan Keuangan Tahun 2025 (Audited)", date: "12/08/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/laporankeuangan2016/LRA-2016.pdf" },
            { title: "Neraca 2016", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/laporankeuangan2016/Neraca-2016.pdf"},
            { title: "Aset Lain-Lain 2016", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/laporankeuangan2016/Aset_Lain-lain-2016.pdf"},
            { title: "Aset Tak Berwujud 2016", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/laporankeuangan2016/Daftar_Aset_Tak%20Berwujud-2016.pdf"},
            { title: "Daftar Aset Tetap 2016", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/laporankeuangan2016/Daftar_Aset_Tetap-2016.pdf"},
            { title: "Investasi 2016", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/laporankeuangan2016/Daftar_Investasi-2016.pdf"},
            { title: "Investasi Non Permanen 2016", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/laporankeuangan2016/INVESTASI_NON_PERMANEN-2016_OK.pdf"},
            { title: "Catatan Atas Laporan Keuangan 2016", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/laporankeuangan2016/CALK_2016_AUDITED.pdf"}
        ],
        2015: [
            { title: "Ringkasan RKA SKPD", desc: "Kebijakan Umum Anggaran (KUA) Tahun 2025", date: "05/07/2024", viewLink: "#"},
            { title: "Ringkasan RKA PPKD", desc: "Perioritas dan Plafon Anggaran Sementara (PPAS) Tahun 2025", viewLink: "http://web.balikpapan.go.iduploaded/ProgramKerja/tpad2015/RINGKASAN%20RKA%202015.pdf"},
            { title: "Ringkasan DPA SKPD", desc: "Ringkasan RKA SKPD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.iduploaded/ProgramKerja/tpad2015/RINGKASAN%20RKA%202015.pdf"},
            { title: "Ringkasan DPA PPKD", desc: "Ringkasan DPA SKPD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.idread/58874/ringkasan-dpa-skpd-tahun-2015"},
            { title: "Raperda APBD", desc: "APBD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.iduploaded/ProgramKerja/tpad2015/RAPERDA_APBD_2015.pdf"},
            { title: "Perda APBD + Perwal APBD", desc: "Perubahan APBD Tahun 2025", date: "05/07/2024", viewLink: "http://web.balikpapan.go.iduploaded/ProgramKerja/tpad2015/Perda&PerwalAPBD2015.pdf"},
            { title: "Raperda Perubahan APBD", desc: "Laporan Keuangan Tahun 2025 (Audited)", date: "12/08/2024", viewLink: "#" },
            { title: "Perda Perubahan APBD  + Perwal Perubahan APBD", desc: "Laporan Keuangan Tahun 2025 (Audited)", date: "12/08/2024", viewLink: "#" },
            { title: "LRA seluruh SKPD 2014 (AUDITED)", desc: "Laporan Keuangan Tahun 2025 (Audited)", date: "12/08/2024", viewLink: "http://web.balikpapan.go.idread/58880/lra-seluruh-skpd-2014" },
            { title: "LRA PPKD 2014 (AUDITED)", desc: "Laporan Keuangan Tahun 2025 (Audited)", date: "12/08/2024", viewLink: "#" },
            { title: "LKPD (AUDITED) + LAMPIRAN", desc: "Laporan Keuangan Tahun 2025 (Audited)", date: "12/08/2024", viewLink: "#" },
            { title: "Opini BPK RI atas Pemeriksaan LKPD Kota Balikpapan TA 2014", desc: "Laporan Keuangan Tahun 2025 (Audited)", date: "12/08/2024", viewLink: "#" },
            { title: "Laporan Arus Kas 2015", desc: "Laporan Keuangan Tahun 2025 (Audited)", date: "12/08/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/laporankeuangan2015/LAK-2015.pdf" },
            { title: "Laporan Realisasi Anggaran 2015", desc: "Laporan Keuangan Tahun 2025 (Audited)", date: "12/08/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/laporankeuangan2015/LRA-2015.pdf" },
            { title: "Neraca 2015", desc: "Laporan Keuangan Tahun 2025 (Audited)", date: "12/08/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/laporankeuangan2015/NERACA-2015.pdf" },
            { title: "Aset Lain-Lain 2015", desc: "Laporan Keuangan Tahun 2025 (Audited)", date: "12/08/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/laporankeuangan2015/NERACA-2015.pdf" },
            { title: "Aset Tak Berwujud 2015", desc: "Laporan Keuangan Tahun 2025 (Audited)", date: "12/08/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/laporankeuangan2015/ASET_TAK_BERWUJUD-2015.pdf" },
            { title: "Investasi 2015", desc: "Laporan Keuangan Tahun 2025 (Audited)", date: "12/08/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/laporankeuangan2015/INVESTASI-2015.pdf" },
            { title: "Investasi Non Permanen 2015", desc: "Laporan Keuangan Tahun 2025 (Audited)", date: "12/08/2024", viewLink: "http://web.balikpapan.go.id/uploaded/ProgramKerja/laporankeuangan2015/INVESTASI_NON_PERMANEN-2015.pdf" },
            { title: "Catatan Atas Laporan Keuangan 2015", desc: "Laporan Keuangan Tahun 2025 (Audited)", date: "12/08/2024", viewLink: "#" }
        ],
        2014: [
            { title: "Ringkasan RKA SKPD", desc: "Dokumen perencanaan tahun 2024", date: "10/06/2023", viewLink: "/transparansi_2014_1"},
            { title: "Ringkasan RKA PPKD", desc: "Rencana Pembangunan Jangka Menengah", date: "25/09/2023", viewLink: "https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/2_RINGKASAN_RKA_PPKD_2014.pdf"},
            { title: "Raperda APBD", desc: "Rencana Pembangunan Jangka Menengah", date: "25/09/2023", viewLink: "https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/3_RAPERDA_APBD_TA_2014.pdf"},
            { title: "Raperda Perubahan APBD", desc: "Rencana Pembangunan Jangka Menengah", date: "25/09/2023", viewLink: "https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/4_RAPERDA_Perubahan_APBD_2014.pdf"},
            { title: "Perda APBD", desc: "Rencana Pembangunan Jangka Menengah", date: "25/09/2023", viewLink: "https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/5_PERDA_APBD_TAHUN_ANGGARAN_2014.pdf"},
            { title: "Perda Perubahan APBD  + Perwal Perubahan APBD", desc: "Rencana Pembangunan Jangka Menengah", date: "25/09/2023", viewLink: "#"},
            { title: "Ringkasan DPA SKPD", desc: "Rencana Pembangunan Jangka Menengah", date: "25/09/2023", viewLink: "/transparansi_2014_2"},
            { title: "Ringkasan DPA PPKD", desc: "Rencana Pembangunan Jangka Menengah", date: "25/09/2023", viewLink: "https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/8_RINGKASAN_DPA_PPKD_2014.pdf"},
            { title: "LRA seluruh SKPD 2013 (AUDITED)", desc: "Rencana Pembangunan Jangka Menengah", date: "25/09/2023", viewLink: "#"},
            { title: "LRA PPKD 2013 (AUDITED)", desc: "Rencana Pembangunan Jangka Menengah", date: "25/09/2023", viewLink: "https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/10_LRA_PPKD_2014.pdf"},
            { title: "LKPD 2013 (AUDITED) + LAMPIRAN", desc: "Rencana Pembangunan Jangka Menengah", date: "25/09/2023", viewLink: "#"},
            { title: "Opini BPK RI atas Pemeriksaaan LKPD Kota BAlikpapan TA 2013", desc: "Rencana Pembangunan Jangka Menengah", date: "25/09/2023", viewLink: "https://web.balikpapan.go.id/uploaded/ProgramKerja/tpad2014/12_Opini_BPK.pdf"}
        ]

    };

    function updateDocuments() {
const year = document.getElementById("yearSelector").value;
const listContainer = document.getElementById("documentList");
listContainer.innerHTML = "";

if (documents[year]) {
documents[year].forEach(doc => {
    listContainer.innerHTML += `
        <div class="uniq-card">
            <div class="uniq-card-content">
                <span class="uniq-doc-label">Dokumen Perencanaan</span>
                <h2>${doc.title}</h2>
                <p>${doc.desc}</p>
                <p class="uniq-date">Tanggal Publikasi: ${doc.date}</p>
            </div>
            <div class="uniq-buttons">
                <button class="uniq-view" onclick="navigateTo('${doc.viewLink}')">
                    <i class="bi bi-eye"></i> Lihat
                </button>
            </div>
        </div>`;
});
}
}

function navigateTo(url) {
window.location.href = url;
}

document.addEventListener("DOMContentLoaded", updateDocuments);

</script>
