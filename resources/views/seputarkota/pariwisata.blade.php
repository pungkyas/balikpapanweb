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

/* parwisata */
  .pariwisata {
    font-family: 'Poppins', sans-serif;
    padding: 80px 0;
    background: #ffffff;
    margin-top: 80px; /* Untuk mengkompensasi header fixed */
  }

  .pariwisata-title {
    text-align: center;
    margin-bottom: 60px;
    padding-bottom: 20px;
    position: relative;
  }

  .pariwisata-title::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 3px;
    background: #034ea1;
  }

  .pariwisata-title h2 {
    font-size: 3.5rem;
    color: #034ea1;
    margin-bottom: 1rem;
    font-weight: 700;
  }

  .pariwisata-title p {
    color: #4a5568;
    font-size: 1.1rem;
    max-width: 600px;
    margin: 0 auto;
  }

  /* FILTER BUTTONS */
  .pariwisata-filters {
    display: flex;
    justify-content: center;
    gap: 1rem;
    margin-bottom: 40px;
    flex-wrap: wrap;

  }

  .pariwisata-filters li {
    padding: 8px 20px;
    border-radius: 25px;
    border: 2px solid #034ea1;
    justify-content: center;
    color: #034ea1;
    cursor: pointer;
    transition: all 0.3s ease;
    font-weight: 500;
    box-sizing: border-box; /* Menjamin padding dan border tidak keluar dari area tombol */
    list-style: none; /* Pastikan tidak ada bullet atau elemen lainnya */
  }

  .pariwisata-filters li:hover,
  .pariwisata-filters li.filter-active {
    background: #034ea1;
    justify-content: center;
    color: white;
  }


  /* GRID LAYOUT */
  .pariwisata-grid {
    display: grid;
    grid-template-columns: repeat(3, 10fr); /* 3 item dalam satu baris */
    gap: 30px;
    padding: 0 20px;
    max-width: 1200px; /* Pastikan cukup luas */
    margin: 0 auto; /* Agar grid tetap di tengah */
  }


  .pariwisata-item {
    display: block;
    position: relative;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
  }

  .pariwisata-item.hidden {
    display: none;
  }

  .pariwisata-item:hover {
    transform: translateY(-5px);
  }

  .pariwisata-item img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    transition: transform 0.3s ease;
  }

  .pariwisata-content {
    position: relative;
  }

  .pariwisata-info {
    position: absolute;
    bottom: -100%;
    left: 0;
    right: 0;
    background: rgba(3, 78, 161, 0.9);
    color: white;
    padding: 20px;
    transition: all 0.4s ease-in-out;
  }

  .pariwisata-item:hover .pariwisata-info {
    bottom: 0;
  }

  .pariwisata-info h4 {
    color: white;
    font-size: 1.2rem;
    margin-bottom: 8px;
    font-weight: 600;
  }

  .pariwisata-info p {
    font-size: 0.95rem;
    opacity: 0.9;
    line-height: 1.4;
  }

  /* RESPONSIVE */
  @media (max-width: 1024px) {
    .pariwisata-grid {
      grid-template-columns: repeat(2, 1fr);
    }
  }

  @media (max-width: 768px) {
    .pariwisata {
      padding: 60px 0;
    }

    .pariwisata-title h2 {
      font-size: 2rem;
    }

    .pariwisata-grid {
      grid-template-columns: 1fr;
    }

    .pariwisata-filters {
      gap: 0.5rem;
    }

    .pariwisata-filters li {
      padding: 6px 15px;
      font-size: 0.9rem;
    }
  }

  @media (max-width: 480px) {
    .pariwisata-title h2 {
      font-size: 1.75rem;
    }

    .pariwisata-title p {
      font-size: 1rem;
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
        Pariwisata
    </div>
  <section id="pariwisata" class="pariwisata">
    <div class="container pariwisata-title">
      <h2>Wisata & Sarana</h2>
    </div>

    <div class="container">
      <div class="isotope-layout">
        <ul class="pariwisata-filters">
          <li data-filter="*" class="filter-active">Semua</li>
          <li data-filter=".filter-app">Wisata</li>
          <li data-filter=".filter-product">Sarana</li>
        </ul>

        <div class="pariwisata-grid">
          <!-- Item 1 -->
          <div class="pariwisata-item isotope-item filter-app">
            <div class="pariwisata-content">
              <a href="/detail_wisata1">
                <img src="assets/img/pariwisata.png" class="img-fluid" alt="">
                <div class="pariwisata-info">
                  <h4>Wisata</h4>
                  <p>Hutan Lindung Sungai Wain</p>
                </div>
              </a>
            </div>
          </div>

          <!-- Item 2 -->
          <div class="pariwisata-item isotope-item filter-product">
            <div class="pariwisata-content">
              <a href="/detail_sarana_1">
                <img src="assets/img/hotel.png" class="img-fluid" alt="">
                <div class="pariwisata-info">
                  <h4>Sarana</h4>
                  <p>Hotel</p>
                </div>
              </a>
            </div>
          </div>

          <!-- Item 3 -->
          <div class="pariwisata-item isotope-item filter-app">
            <div class="pariwisata-content">
              <a href="/detail_pariwisata_1">
                <img src="assets/img/hutanmangrove.png" class="img-fluid" alt="">
                <div class="pariwisata-info">
                  <h4>Wisata</h4>
                  <p>Hutan Mangrove</p>
                </div>
              </a>
            </div>
          </div>

          <!-- Item 4 -->
          <div class="pariwisata-item isotope-item filter-app">
            <div class="pariwisata-content">
              <a href="/detail_pariwisata_2">
                <img src="assets/img/kwlph.png" class="img-fluid" alt="">
                <div class="pariwisata-info">
                  <h4>Wisata</h4>
                  <p>KWLPH Beruang Madu</p>
                </div>
              </a>
            </div>
          </div>

          <!-- Item 5 -->
          <div class="pariwisata-item isotope-item filter-product">
            <div class="pariwisata-content">
              <a href="/sejarah">
                <img src="assets/img/restoran.png" class="img-fluid" alt="">
                <div class="pariwisata-info">
                  <h4>Sarana</h4>
                  <p>Restoran dan Cafe</p>
                </div>
              </a>
            </div>
          </div>

          <!-- Item 6 -->
          <div class="pariwisata-item isotope-item filter-product">
            <div class="pariwisata-content">
              <a href="/sejarah">
                <img src="assets/img/biro.png" class="img-fluid" alt="">
                <div class="pariwisata-info">
                  <h4>Sarana</h4>
                  <p>Biro Perjalanan</p>
                </div>
              </a>
            </div>
          </div>

          <!-- Item 7 -->
          <div class="pariwisata-item isotope-item filter-product">
            <div class="pariwisata-content">
              <a href="/sejarah">
                <img src="assets/img/pramuwisata.png" class="img-fluid" alt="">
                <div class="pariwisata-info">
                  <h4>Sarana</h4>
                  <p>Pramuwisata</p>
                </div>
              </a>
            </div>
          </div>

          <!-- Item 8 -->
          <div class="pariwisata-item isotope-item filter-app">
            <div class="pariwisata-content">
              <a href="/detail_pariwisata_3">
                <img src="assets/img/kemala.png" class="img-fluid" alt="">
                <div class="pariwisata-info">
                  <h4>Wisata</h4>
                  <p>Pantai Kemala</p>
                </div>
              </a>
            </div>
          </div>

          <div class="pariwisata-item isotope-item filter-app">
            <div class="pariwisata-content">
              <a href="/detail_pariwisata_4">
                <img src="assets/img/manggar.png" class="img-fluid" alt="">
                <div class="pariwisata-info">
                  <h4>Wisata</h4>
                  <p>Pantai Manggar Segara Sari</p>
                </div>
              </a>
            </div>
          </div>

          <div class="pariwisata-item isotope-item filter-app">
            <div class="pariwisata-content">
              <a href="/detail_pariwisata_5">
                <img src="assets/img/buaya.png" class="img-fluid" alt="">
                <div class="pariwisata-info">
                  <h4>Wisata</h4>
                  <p>Penangkaran Buaya Teritip</p>
                </div>
              </a>
            </div>
          </div>

          <div class="pariwisata-item isotope-item filter-app">
            <div class="pariwisata-content">
              <a href="/detail_pariwisata_6">
                <img src="assets/img/softgun.png" class="img-fluid" alt="">
                <div class="pariwisata-info">
                  <h4>Wisata</h4>
                  <p>A3 Airsoftgun</p>
                </div>
              </a>
            </div>
          </div>

          <div class="pariwisata-item isotope-item filter-product">
            <div class="pariwisata-content">
              <a href="/sejarah">
                <img src="assets/img/bank.png" class="img-fluid" alt="">
                <div class="pariwisata-info">
                  <h4>Sarana</h4>
                  <p>Bank dan Pertukaran Uang</p>
                </div>
              </a>
            </div>
          </div>

          <div class="pariwisata-item isotope-item filter-app">
            <div class="pariwisata-content">
              <a href="/detail_pariwisata_7">
                <img src="assets/img/kolamrenang.png" class="img-fluid" alt="">
                <div class="pariwisata-info">
                  <h4>Wisata</h4>
                  <p>Caribbean Island Water park</p>
                </div>
              </a>
            </div>
          </div>

          <div class="pariwisata-item isotope-item filter-app">
            <div class="pariwisata-content">
              <a href="/detail_pariwisata_8">
                <img src="assets/img/kebunsayur.png" class="img-fluid" alt="">
                <div class="pariwisata-info">
                  <h4>Wisata</h4>
                  <p>Pasar Kerajinan Kebun Sayur</p>
                </div>
              </a>
            </div>
          </div>

          <div class="pariwisata-item isotope-item filter-app">
            <div class="pariwisata-content">
              <a href="/detail_pariwisata_9">
                <img src="assets/img/bandar.png" class="img-fluid" alt="">
                <div class="pariwisata-info">
                  <h4>Wisata</h4>
                  <p>Bandar Balikpapan</p>
                </div>
              </a>
            </div>
          </div>
          <div class="pariwisata-item isotope-item filter-app">
            <div class="pariwisata-content">
              <a href="/detail_pariwisata_10">
                <img src="assets/img/monpera.png" class="img-fluid" alt="">
                <div class="pariwisata-info">
                  <h4>Wisata</h4>
                  <p>Monumen Perjuangan Rakyat</p>
                </div>
              </a>
            </div>
          </div>
        </div>
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
<script>
    // Mengambil semua filter
    const filters = document.querySelectorAll('.pariwisata-filters li');

    // Menangani klik pada filter
    filters.forEach(filter => {
      filter.addEventListener('click', () => {
        // Mengambil kategori filter yang dipilih
        const filterValue = filter.getAttribute('data-filter');

        // Menghapus kelas 'filter-active' dari semua filter dan menambahkannya pada yang dipilih
        filters.forEach(f => f.classList.remove('filter-active'));
        filter.classList.add('filter-active');

        // Mengambil semua item
        const items = document.querySelectorAll('.pariwisata-item');

        // Menyembunyikan semua item
        items.forEach(item => {
          if (filterValue === '*' || item.classList.contains(filterValue.slice(1))) {
            item.classList.remove('hidden');  // Tampilkan item
          } else {
            item.classList.add('hidden');  // Sembunyikan item
          }
        });
      });
    });
  </script>
  @endsection
