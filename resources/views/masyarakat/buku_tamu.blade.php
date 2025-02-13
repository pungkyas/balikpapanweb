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
    /* deskirpsi */
    .buku-tamu-section {
            max-width: 800px;
            margin: 50px auto;
            padding: 40px 20px; /* Menambah padding agar lebih panjang ke bawah */
            font-family: 'Poppins', sans-serif;
            background: white; /* Menambahkan background agar shadow terlihat */
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1); /* Menambahkan shadow */
            border-radius: 10px; /* Agar lebih estetik */
        }


        /* Kotak Informasi */
        .info-box {
            background: #0066cc;
            color: white;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
            font-size: 0.95em;
            line-height: 1.6;
        }

        /* Form Styling */
        .buku-tamu-form {
            padding: 0;
            background: white;
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
        .form-group textarea {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 1em;
            transition: all 0.3s ease;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #0066cc;
            box-shadow: 0 0 0 3px rgba(0, 102, 204, 0.1);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 150px;
        }

        /* Tombol Style */
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

        /* Responsive Design */
        @media (max-width: 768px) {
            .buku-tamu-section {
                margin: 30px auto;
                padding: 0 15px;
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

        }

        @media (max-width: 480px) {
            .button span {
                font-size: 0.9em;
            }

            .button i {
                font-size: 0.8em;
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
        Buku Tamu
    </div>
<section class="buku-tamu-section">
    <!-- Notifikasi -->
    <div class="info-box">
        Mohon kepada pengisi Buku Tamu untuk menggunakan bahasa yang sopan.<br>
        Pengisian Buku Tamu berupa kritik, saran, pendapat, dan tanggapan yang mengandung sara, porno, hujatan, iklan / penawaran (dalam bentuk apapapun) dan sejenisnya tidak akan kami muat.
    </div>
    <!-- Form Buku Tamu -->
    <form class="buku-tamu-form">
        <!-- Nama -->
        <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" id="nama" name="nama" required>
            <span class="error-message"></span>
        </div>

        <!-- Email -->
        <div class="form-group">
            <label for="email">Alamat Email</label>
            <input type="email" id="email" name="email" required>
            <span class="error-message"></span>
        </div>

        <!-- Subjek -->
        <div class="form-group">
            <label for="subjek">Subjek</label>
            <input type="text" id="subjek" name="subjek" required>
            <span class="error-message"></span>
        </div>

        <!-- Pesan -->
        <div class="form-group">
            <label for="pesan">Pesan</label>
            <textarea id="pesan" name="pesan" rows="6" required></textarea>
            <span class="error-message"></span>
        </div>

        <!-- Tombol Kirim -->
        <div class="button-container">
            <button type="submit" class="button">
                <span>Kirim Pesan</span>
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
    // Form Validation dengan alert biasa
    document.querySelector('.buku-tamu-form').addEventListener('submit', function(e) {
        e.preventDefault();
        let isValid = true;
        let errorMessage = "";

        // Reset error states
        this.querySelectorAll('.error-message').forEach(msg => {
            msg.style.display = 'none';
            msg.previousElementSibling.classList.remove('input-error');
        });

        // Validate fields
        const fields = this.querySelectorAll('[required]');
        fields.forEach(field => {
            if(!field.value.trim()) {
                isValid = false;
                errorMessage = "Harap lengkapi semua field wajib!";
                field.classList.add('input-error');
                field.nextElementSibling.textContent = 'Field ini wajib diisi';
                field.nextElementSibling.style.display = 'block';
            }

            if(field.type === 'email' && field.value.trim()) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if(!emailRegex.test(field.value)) {
                    isValid = false;
                    errorMessage = "Format email tidak valid!";
                    field.classList.add('input-error');
                    field.nextElementSibling.textContent = 'Format email tidak valid';
                    field.nextElementSibling.style.display = 'block';
                }
            }
        });

        if(isValid) {
            alert('Form berhasil dikirim!\nTerima kasih atas kontribusinya');
            this.reset();
        } else {
            alert(errorMessage || 'Harap perbaiki data yang dimasukkan');
        }
    });
</script>
@endsection
