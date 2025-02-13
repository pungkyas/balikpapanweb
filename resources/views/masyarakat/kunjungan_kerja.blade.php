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
    .kunjungan-section {
        max-width: 800px;
        margin: 50px auto;
        padding: 0 20px;
        font-family: 'Poppins', sans-serif;
    }

    .kunjungan-form {
        background: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 2px 15px rgba(0,0,0,0.1);
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

    .form-group input {
        width: 100%;
        padding: 12px 15px;
        border: 1px solid #ddd;
        border-radius: 6px;
        font-size: 1em;
        transition: all 0.3s ease;
    }

    .form-group input:focus {
        outline: none;
        border-color: #0066cc;
        box-shadow: 0 0 0 3px rgba(0, 102, 204, 0.1);
    }

    .required {
        color: #e63946;
        font-size: 0.8em;
    }

    .file-info {
        display: block;
        margin-top: 5px;
        color: #666;
        font-size: 0.85em;
    }

    .buttonv-container {
        margin-top: 30px;
    }

    .buttonv {
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

    .buttonv:hover {
        transform: scale(1.02);
        box-shadow: 0 4px 15px rgba(0, 203, 68, 0.3);
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
        Kunjungan Masyarakat
    </div>
<section class="kunjungan-section">
    <!-- Form Kunjungan Kerja -->
    <form class="kunjungan-form">
        <!-- Nama Instansi -->
        <div class="form-group">
            <label for="instansi">Nama Instansi <span class="required">*</span></label>
            <input type="text" id="instansi" name="instansi" required>
        </div>

        <!-- Request Tanggal Kunjungan -->
        <div class="form-group">
            <label for="tanggal">Request Tanggal Kunjungan <span class="required">*</span></label>
            <input type="date" id="tanggal" name="tanggal" required>
        </div>

        <!-- Jumlah Rombongan -->
        <div class="form-group">
            <label for="jumlah">Jumlah Rombongan <span class="required">*</span></label>
            <input type="number" id="jumlah" name="jumlah" required>
        </div>

        <!-- Asal Daerah -->
        <div class="form-group">
            <label for="daerah">Asal Daerah <span class="required">*</span></label>
            <input type="text" id="daerah" name="daerah" required>
        </div>

        <!-- Ketua Rombongan -->
        <div class="form-group">
            <label for="ketua">Ketua Rombongan <span class="required">*</span></label>
            <input type="text" id="ketua" name="ketua" required>
        </div>

        <!-- No. Telepon/HP -->
        <div class="form-group">
            <label for="telp">No. Telepon/HP <span class="required">*</span></label>
            <input type="tel" id="telp" name="telp" required>
        </div>

        <!-- Durasi Kunjungan -->
        <div class="form-group">
            <label for="durasi">Durasi Kunjungan (hari) <span class="required">*</span></label>
            <input type="number" id="durasi" name="durasi" required>
        </div>

        <!-- Lampiran -->
        <div class="form-group">
            <label for="lampiran">Lampiran</label>
            <input type="file" id="lampiran" name="lampiran">
            <small class="file-info">Format: PDF, JPG, PNG (Maks. 5MB)</small>
        </div>

        <!-- Tombol Kirim -->
        <div class="buttonv-container">
            <button type="submit" class="buttonv">
                <span>Kirim Permohonan</span>
                <i class="bi bi-send-fill"></i>
            </button>
        </div>
    </form>
</section>
<section>
        <div class="section-container">
            <img src="assets/img/balikpapan_nyaman.png" alt="Gambar di Pojok Kanan Bawah" />
         </div>
</main>
    <div class="responsive-image-container">
        <!-- Gambar whistleblower -->
        <img
            src="assets/img/batik.png"
            alt="Whistleblower System"
            class="responsive-image">
    </div>
        <script>
        document.querySelector('.kunjungan-form').addEventListener('submit', function(e) {
            e.preventDefault();

            const requiredFields = ['instansi', 'tanggal', 'jumlah', 'daerah', 'ketua', 'telp', 'durasi'];
            let isValid = true;

            requiredFields.forEach(field => {
                const input = document.getElementById(field);
                if (!input.value.trim()) {
                    isValid = false;
                    input.style.borderColor = '#e63946';
                } else {
                    input.style.borderColor = '#ddd';
                }
            });

            if (isValid) {
                alert('Permohonan kunjungan berhasil dikirim!');
                this.reset();
            } else {
                alert('Harap lengkapi semua field wajib!');
            }
        });
            </script>
@endsection
