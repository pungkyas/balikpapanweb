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
    * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #ffffff;
        }

        /* Shared Section Styles */
        .buku-tamu-section,
        .whistleblower-section,
        .faq-section {
            max-width: 800px;
            margin: 50px auto;
            padding: 30px 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.12);
        }

        /* Info Box */
        .info-box {
            background: #0066cc;
            color: white;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
            font-size: 0.95em;
            line-height: 1.6;
        }

        /* Form Styles */
        .buku-tamu-form,
        .whistleblower-form {
            padding: 0;
        }

        .form-group {
            margin-bottom: 25px;
            width: 100%;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: 500;
            font-size: 0.95em;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 1em;
            transition: all 0.3s ease;
        }

        .form-group input[type="file"] {
            padding: 8px;
            border: 1px dashed #ccc;
            background: #f8f9fa;
        }

        .form-group textarea {
            resize: vertical;
            min-height: 150px;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #0066cc;
            box-shadow: 0 0 0 3px rgba(0, 102, 204, 0.1);
        }

        /* Button Styles */
        .button-container {
            margin-top: 25px;
        }

        .button {
            background: linear-gradient(90deg, #8BC43F 0%, #00CB44 100%);
            border: none;
            border-radius: 70px;
            padding: 12px 30px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            transition: transform 0.2s ease;
            color: white;
            font-weight: bold;
            font-size: 1em;
            width: 100%;
            justify-content: center;
        }

        .button i {
            font-size: 0.9em;
        }

        .button:hover {
            transform: scale(1.02);
            box-shadow: 0 4px 15px rgba(0, 203, 68, 0.3);
        }

        /* Updated FAQ Styles */
    .faq-section {
        max-width: 800px;
        margin: 50px auto;
        padding: 30px 20px;
        background: white;
        border-radius: 10px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.12);
    }

    .faq-section h2 {
        color: #0066cc;
        margin-bottom: 30px;
        text-align: center;
        font-size: 1.8em;
    }

    .faq-accordion {
        border-radius: 8px;
        overflow: hidden;
    }

    .faq-item {
        margin-bottom: 10px;
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .faq-item.active {
        border-color: #0066cc;
    }

    .faq-question {
        width: 100%;
        padding: 20px;
        text-align: left;
        background: #f8f9fa;
        border: none;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 1.1em;
        color: #333;
        font-weight: 500;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .faq-question:hover {
        background: #f1f3f5;
    }

    .faq-question .arrow {
        display: inline-block;
        width: 12px;
        height: 12px;
        border: solid #666;
        border-width: 0 2px 2px 0;
        transform: rotate(45deg);
        transition: transform 0.3s ease;
        margin-left: 15px;
    }

    .faq-item.active .arrow {
        transform: rotate(-135deg);
        border-color: #0066cc;
    }

    .faq-answer {
        padding: 0 20px;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease-out, padding 0.3s ease;
    }

    .faq-item.active .faq-answer {
        padding: 20px;
        max-height: 1000px;
    }

    .faq-answer p {
        color: #666;
        line-height: 1.6;
        margin-bottom: 15px;
    }

    .faq-answer ul {
        margin: 15px 0;
        padding-left: 25px;
    }

    .faq-answer li {
        margin-bottom: 8px;
        color: #666;
        line-height: 1.5;
    }


        /* Responsive Design */
        @media (max-width: 768px) {
            .buku-tamu-section,
            .whistleblower-section,
            .faq-section {
                margin: 30px 15px;
                padding: 25px 15px;
                box-shadow: 0 3px 15px rgba(0,0,0,0.1);
            }

            .info-box {
                font-size: 0.85em;
                padding: 15px;
                margin-bottom: 20px;
            }

            .form-group input,
            .form-group textarea {
                padding: 10px 12px;
                font-size: 0.95em;
            }

            .faq-section {
            margin: 30px 15px;
            padding: 25px 15px;
        }

        .faq-question {
            padding: 15px;
            font-size: 1em;
        }

        .faq-answer {
            padding: 0 15px;
        }

        .faq-item.active .faq-answer {
            padding: 15px;
        }
        }

        @media (max-width: 480px) {
            .button span {
                font-size: 0.9em;
            }

            .button i {
                font-size: 0.8em;
            }

            .form-group label {
                font-size: 0.9em;
            }

            .faq-item {
                padding: 15px;
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
        Whistleblower
    </div>
    <!-- FAQ Section -->
        <section class="faq-section">
            <h2>Frequently Asked Questions</h2>
            <div class="faq-accordion">
                <!-- Item 1 -->
                <div class="faq-item">
                    <button class="faq-question">
                        Apa Itu Whistleblower System?
                        <i class="arrow"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Whistleblower adalah pelapor yang mengungkap kejahatan atau pelanggaran di organisasi tempatnya bekerja. Untuk menjadi whistleblower, pelapor harus:</p>
                        <ul>
                            <li>Menyampaikan informasi kepada otoritas berwenang, media, atau publik</li>
                            <li>Mengetahui langsung pelanggaran tersebut</li>
                        </ul>
                        <p>Peran whistleblower penting dalam mencegah kerugian negara. Pemerintah Kota Balikpapan telah menyediakan sistem pelaporan khusus untuk indikasi korupsi, mendukung UU Perlindungan Saksi dan Korban.</p>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="faq-item">
                    <button class="faq-question">
                        Siapa Yang Bisa Menggunakannya?
                        <i class="arrow"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Pengguna aplikasi sistem whistleblower Pemerintah Kota Balikpapan adalah:</p>
                        <ul>
                            <li>Memiliki informasi langsung tentang tindak pidana korupsi</li>
                            <li>Terutama dalam proses bisnis pemerintah (pelayanan masyarakat, pembelian barang, pembangunan, rekrutmen pegawai)</li>
                            <li>Menggunakan dana APBD</li>
                            <li>Memiliki akses informasi memadai dan bukti awal</li>
                            <li>Menyampaikan dengan niat baik untuk mendukung pemberantasan korupsi</li>
                        </ul>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="faq-item">
                    <button class="faq-question">
                        Kriteria Pengaduan
                        <i class="arrow"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Sistem hanya menerima pengaduan terkait tindak pidana korupsi sesuai UU No. 20 Tahun 2001, meliputi:</p>
                        <ul>
                            <li>Pembiaran kecurangan dalam pembangunan</li>
                            <li>Penggelapan uang/surat berharga</li>
                            <li>Pemalsuan dokumen administrasi</li>
                            <li>Penerimaan hadiah/janji untuk penyalahgunaan jabatan</li>
                            <li>Pemaksaan pembayaran melawan hukum</li>
                            <li>Penyalahgunaan kekuasaan yang merugikan negara</li>
                            <li>Keterlibatan dalam pengadaan/persewaan</li>
                            <li>Gratifikasi yang dianggap suap</li>
                        </ul>
                        <p>Laporan harus terkait pegawai Pemkot Balikpapan dan tindakan dalam jabatan.</p>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="faq-item">
                    <button class="faq-question">
                        Kerahasiaan Seorang Whistleblower
                        <i class="arrow"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Pemerintah Kota Balikpapan menjamin:</p>
                        <ul>
                            <li>Perlindungan identitas whistleblower</li>
                            <li>Proses investigasi dan audit independen</li>
                            <li>Penindakan laporan yang memenuhi persyaratan</li>
                            <li>Perlindungan sesuai perundang-undangan berlaku</li>
                        </ul>
                        <p>Kerahasiaan dijaga selama proses pembuktian dan sesuai dengan UU yang berlaku.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Whistleblower Form -->
    <section class="whistleblower-section">
        <div class="info-box">
            Formulir Whistleblower ini ditujukan untuk melaporkan pelanggaran atau tindakan tidak sesuai prosedur.
        </div>

        <form class="whistleblower-form">
            <div class="form-group">
                <label for="ditujukan">Ditujukan Ke</label>
                <input type="text" id="ditujukan" name="ditujukan" required>
            </div>

            <div class="form-group">
                <label for="nama-whistle">Nama Pelapor</label>
                <input type="text" id="nama-whistle" name="nama-whistle" required>
            </div>

            <div class="form-group">
                <label for="email-whistle">Email</label>
                <input type="email" id="email-whistle" name="email-whistle" required>
            </div>

            <div class="form-group">
                <label for="telp-whistle">No Telepon</label>
                <input type="tel" id="telp-whistle" name="telp-whistle" required>
            </div>

            <div class="form-group">
                <label for="subjek-whistle">Subjek</label>
                <input type="text" id="subjek-whistle" name="subjek-whistle" required>
            </div>

            <div class="form-group">
                <label for="pesan-whistle">Pesan</label>
                <textarea id="pesan-whistle" name="pesan-whistle" rows="6" required></textarea>
            </div>

            <div class="form-group">
                <label for="bukti">Bukti Pendukung</label>
                <input type="file" id="bukti" name="bukti">
                <small class="file-info">Format: PDF, JPG, PNG, DOCX (Maks. 10MB)</small>
            </div>

            <div class="button-container">
                <button type="submit" class="button">
                    <span>Kirim Laporan</span>
                    <i class="bi bi-send-fill"></i>
                </button>
            </div>
        </form>
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
<script>
    // Form Validation
    document.querySelectorAll('form').forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            const requiredFields = Array.from(this.querySelectorAll('[required]'));
            let isValid = true;

            requiredFields.forEach(field => {
                if(!field.value.trim()) {
                    isValid = false;
                    field.style.borderColor = '#e63946';
                } else {
                    field.style.borderColor = '#ddd';
                }
            });

            if(isValid) {
                alert('Form berhasil dikirim!');
                this.reset();
            } else {
                alert('Harap lengkapi semua field wajib!');
            }
        });
    });

    // File Input Handling
    document.querySelectorAll('input[type="file"]').forEach(input => {
        input.addEventListener('change', function() {
            const fileInfo = this.nextElementSibling;
            if(this.files[0]) {
                fileInfo.textContent = `File terpilih: ${this.files[0].name}`;
            } else {
                fileInfo.textContent = 'Format: PDF, JPG, PNG, DOCX (Maks. 10MB)';
            }
        });
    });

    // FAQ Accordion Functionality
    document.querySelectorAll('.faq-question').forEach(button => {
        button.addEventListener('click', () => {
            const faqItem = button.parentElement;
            const isActive = faqItem.classList.contains('active');

            // Close all items
            document.querySelectorAll('.faq-item').forEach(item => {
                item.classList.remove('active');
            });

            // Toggle current item if not active
            if (!isActive) {
                faqItem.classList.add('active');
            }
        });
    });

    // Close FAQ items when clicking outside
    document.addEventListener('click', (e) => {
        if (!e.target.closest('.faq-item') && !e.target.closest('.faq-question')) {
            document.querySelectorAll('.faq-item').forEach(item => {
                item.classList.remove('active');
            });
        }
    });
</script>
@endsection
