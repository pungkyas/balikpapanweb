@extends('partials.partial')
@section('home')
    <main class="main">
        {{-- cari --}}
        <section class="herro">
            <div class="herro-bg"></div>
            <div class="overlayy"></div>
            <div class="herro-content">
                <img src="assets/img/logohero.png" alt="Kota Balikpapan Logo" class="loggo">
                <h1 class="herro-title" style="font-size: 3rem; color: #ffff;">Ku Bangun, Ku Jaga, Ku Bela</h1>
                <div class="search-bar">
                    <input type="text" placeholder="Cari berita...">
                    <a href="/berita"><button type="button">Cari</button></a>
                </div>
            </div>
        </section>
        {{-- end cari --}}

        {{-- berita --}}

        <section>
            <!-- Wrapper with border and shadow -->
            <div class="news-section-wrapper">
                <div class="container news-section">
                    <!-- Section Title -->
                        <!-- Bagian Header Section -->
                        <div class="d-flex align-items-center">
                            <div class="news-title">Berita Terkini</div>
                            <div class="blue-line"></div>
                            <a href="/berita" class="buttonnn">
                                <span class="button-content">
                                    Lihat Selengkapnya
                                </span>
                            </a>
                        </div>

                    <!-- News Content -->
                    <div class="row mt-4">
                        <!-- Left Column: 2 News Images -->
                        <div class="col-md-4 col-sm-6 mb-3">
                            <div class="news-item">
                                <a href="/detail_berita"><img src="assets/img/apel.png" alt="News 1">
                                <div class="overrlay">
                                    <h5>Wali Kota Balikpapan Sampaikan Ekspos Akhir Tahun 2024</h5>
                                    <p class="date">Jumat, 27 Desember 2024</p> <!-- Tanggal berita -->
                                </div>
                            </a>
                            </div>
                            <div class="news-item">
                                <a href="/detail_berita_4"><img src="assets/img/pemerintah kota.png" alt="News 2">
                                <div class="overrlay">
                                    <h5>Pemkot Balikpapan Peroleh Nilai 94,64 dengan Predikat Informatif di Malam Penganugerahan KIP 2024</h5>
                                    <p class="date">02 Januari 2025</p> <!-- Tanggal berita -->
                                </div>
                            </a>
                            </div>
                        </div>

                        <!-- Middle Column: List of 7 News -->
                        <div class="col-md-4 col-sm-6 mb-3">
                            <div class="scrollable-list">
                                <ul class="news-list">
                                    <?php
                                    // Contoh data berita
                                    $news = [
                                        ['title' => 'Masyarakat Balikpapan Diimbau Optimalkan Kerja Bakti, Cegah DPD dan Leptospirosis', 'date' => '2025-01-01'],
                                        ['title' => 'Masyarakat Balikpapan Diimbau Optimalkan Kerja Bakti, Cegah DPD dan Leptospirosis', 'date' => '2025-01-02'],
                                        ['title' => 'Masyarakat Balikpapan Diimbau Optimalkan Kerja Bakti, Cegah DPD dan Leptospirosis', 'date' => '2025-01-03'],
                                        ['title' => 'Masyarakat Balikpapan Diimbau Optimalkan Kerja Bakti, Cegah DPD dan Leptospirosis', 'date' => '2025-01-04'],
                                        ['title' => 'Masyarakat Balikpapan Diimbau Optimalkan Kerja Bakti, Cegah DPD dan Leptospirosis', 'date' => '2025-01-01'],
                                        ['title' => 'Masyarakat Balikpapan Diimbau Optimalkan Kerja Bakti, Cegah DPD dan Leptospirosis', 'date' => '2025-01-02'],
                                        ['title' => 'Masyarakat Balikpapan Diimbau Optimalkan Kerja Bakti, Cegah DPD dan Leptospirosis', 'date' => '2025-01-03'],
                                        ['title' => 'Masyarakat Balikpapan Diimbau Optimalkan Kerja Bakti, Cegah DPD dan Leptospirosis', 'date' => '2025-01-04'],
                                    ];

                                    foreach ($news as $item) {
                                        echo '<li><strong>' . $item['title'] . '</strong>  ' . $item['date'] . '</li>';
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>

                        <!-- Right Column: Scrollable Blue Box with Article List -->
                        <div class="col-md-4 col-sm-12 mb-3">
                            <div class="blue-box">
                                <!-- Bagian atas Blue Box dengan background hitam -->
                                <div class="d-flex align-items-center mb-4" style="background-color: black; padding: 25px;">
                                    <img src="assets/img/artikel.png" class="article-img" alt="Artikel Icon">
                                    <span>Artikel</span>
                                </div>
                                <ul class="article-list">
                                    <?php
                                    // Artikel list untuk kotak biru
                                    foreach ($news as $item) {
                                        echo '<li><img src="assets/img/artikel.png" class="article-img" alt="Artikel Icon"> ' . $item['title'] . '</li>';
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end berita --}}

            {{-- walikota --}}

            <div class="flex-container">
              <!-- Left Section -->
              <div class="left-section">
                  <a href = "/kepala_daerah"><div class="background-circle"></div>
                  <img src="assets/img/RM.png" alt="Profile" class="profile-img" />
                  <div class="bottom-banner">
                      <span class="name">H. Rahmad Mas’ud, S.E., M.E.</span>
                      <span class="title">Walikota Balikpapan</span>
                  </div>
                </a>
              </div>
              <!-- Right Section -->
              <div class="right-section">
                  <div class="title-large">Profil Kota Balikpapan</div>
                  <div class="description">
                      Balikpapan adalah sebuah kota di Kalimantan Timur yang dikenal sebagai pintu gerbang utama menuju Ibu Kota Negara (IKN) Nusantara. Kota ini memiliki peran strategis sebagai pusat industri, perdagangan, dan jasa, didukung oleh infrastruktur modern seperti Bandara Internasional Sultan Aji Muhammad Sulaiman (Sepinggan) dan pelabuhan laut yang aktif. Dikenal dengan julukan "Kota Minyak," Balikpapan juga memiliki keindahan alam seperti Pantai Kemala dan Hutan Lindung Sungai Wain. Dengan kualitas hidup yang tinggi dan predikat kota terbersih di Indonesia, Balikpapan menjadi tempat ideal untuk tinggal, berbisnis, dan menikmati wisata alam.
                  </div>
                  <!-- Button Section -->
                  <div class="button-container">
                      <div class="button">
                        <a href="/sejarah"style="text-decoration: none;"><span>Lihat Selengkapnya</span></a>
                      </div>
                  </div>
              </div>
          </div>
    </section>
    {{-- end walikota --}}

    {{-- iklan --}}
    <section>
        <div class="slideshow-wrapper">
            <button class="btn-prev" onclick="switchSlide(-1)">&#10094;</button>
            <div class="slideshow-content">
                <div class="slide-item">
                    <img src="assets/img/iklan1.png" alt="Iklan 1">
                </div>
                <div class="slide-item">
                    <img src="assets/img/iklan2.png" alt="Iklan 2">
                </div>
                <div class="slide-item">
                    <img src="assets/img/iklan1.png" alt="Iklan 1">
                </div>
            </div>
            <button class="btn-next" onclick="switchSlide(1)">&#10095;</button>
        </div>
        <div class="navigation-dots">
            <span class="nav-dot" onclick="selectSlide(1)"></span>
            <span class="nav-dot" onclick="selectSlide(2)"></span>
            <span class="nav-dot" onclick="selectSlide(3)"></span>
        </div>

        <script>

        </script>
    </section>
    {{-- endiklan --}}

    {{-- event --}}
    <div class="event-kota py-5">
        <div class="container">
            <!-- Judul Section -->
            <div style="text-align: center; color: #034EA1; font-size: 2.5rem; font-family: Poppins; font-weight: 700; word-wrap: break-word; margin-bottom: 40px;">
              Event Kota
            </div>

            <!-- Slider -->
            <div id="eventSlider" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <div class="position-relative">
                            <a href="/detail_event_1"><img src="assets/img/events.jpg" class="d-block w-100" alt="Event 1">
                            <div class="overlay">
                                <div class="overlay-content">
                                    <p class="date">Jumat, 27 Desember 2024 - 08:36:03</p>
                                    <p class="title">Tjap Legende Hadirkan Kuliner Legendaris di Balikpapan</p>
                                </div>
                            </div></a>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <div class="position-relative">
                            <a href="/detail_event_3"><img src="assets/img/events2.jpg" class="d-block w-100" alt="Event 2">
                            <div class="overlay">
                                <div class="overlay-content">
                                    <p class="date"> 10 Februari 2025 - 10:45:20</p>
                                    <p class="title">HUT Ke-128, Rahmad Mas'ud: Jadikan Balikpapan Kota Terbaik di Negeri Ini</p>
                                </div>
                            </div></a>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="carousel-item">
                        <div class="position-relative">
                            <a href="/detail_event_2"><img src="assets/img/events3.jpg" class="d-block w-100" alt="Event 3">
                            <div class="overlay">
                                <div class="overlay-content">
                                    <p class="date">Minggu, 29 Desember 2024 - 15:22:10</p>
                                    <p class="title">Balikpapan Manuntung Art Fest 2022 Resmi dibuka</p>
                                </div>
                            </div></a>
                        </div>
                    </div></div>

                <!-- Slider Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#eventSlider" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#eventSlider" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        {{-- end event --}}

        <section>
        <div class="container-layanan">
            <h1 class="title-layanan">Layanan Kota Balikpapan</h1>
            <p class="subtitle-layanan">Memberikan pelayanan di setiap langkah hidup Anda</p>

            <div class="services-layanan">
                <!-- Kolom Kiri -->
                <div class="services-column">
                    <div class="service-card-layanan">
                        <a href="https://disdikbudbalikpapan.id/"> <img src="assets/img/pendidikan.png" alt="">
                        <div class="text-layanan">
                            <h2>Dinas Pendidikan</h2>
                            <p>instansi yang mengelola dan mengawasi pendidikan di suatu wilayah.</p> </a>
                        </div>
                    </div>

                    <div class="service-card-layanan">
                        <a href="https://disnaker.balikpapan.go.id/"><img src="assets/img/ketenagakerjaan.png" alt="">
                        <div class="text-layanan">
                            <h2>Dinas ketenagakerjaan</h2>
                            <p>menyediakan informasi, pelatihan, dan bantuan terkait peluang kerja serta pengembangan keterampilan tenaga kerja.</p></a>
                        </div>
                    </div>

                    <div class="service-card-layanan">
                        <a href="http://rsud.balikpapan.go.id/"><img src="assets/img/kesehatan.png" alt="Pelatihan & Sertifikasi">
                        <div class="text-layanan">
                            <h2>Layanan Kesehatan</h2>
                            <p>Fasilitas yang menyediakan perawatan medis, pencegahan, dan promosi kesehatan untuk masyarakat.</p></a>
                        </div>
                    </div>
                </div>

                <!-- Kolom Kanan -->
                <div class="services-column">
                    <div class="service-card-layanan">
                        <a href="http://imtn.balikpapan.go.id/mobile/imtn_pt/"><img src="assets/img/imtn.png" alt="">
                        <div class="text-layanan">
                            <h2>IMTN</h2>
                            <p> layanan perizinan yang diberikan oleh Wali Kota untuk membuka dan memanfaatkan tanah negara sebagai dasar permohonan hak.</p></a>
                        </div>
                    </div>

                    <div class="service-card-layanan">
                        <a href="https://capil.balikpapan.go.id/disdukcapil/"><img src="assets/img/kependudukan.png" alt="">
                        <div class="text-layanan">
                            <h2>Layanan Sosial</h2>
                            <p>melaksanakan urusan administrasi kependudukan di bidang Kependudukan dan Pencatatan Sipil</p></a>
                        </div>
                    </div>

                    <div class="service-card-layanan">
                        <a href="https://investasi.balikpapan.go.id/"><img src="assets/img/dmpt.png" alt="">
                        <div class="text-layanan">
                            <h2>DPMPT</h2>
                            <p>perizinan dan pelayanan investasi secara terpadu untuk mempermudah proses administrasi dan pengawasan.</p></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="btn-container">
                <a href="/semua-layanan" class="btn-layanan">
                    <div class="btn-layanan-content">
                        Lihat Semua Layanan
                    </div>
                </a>
            </div>
        </div>
    {{-- endlayanan --}}

    {{-- layanan --}}
                <div class="slider-custom">
                    <div class="slider-header">
                        <h2>Info Penting</h2>
                    </div>
                    <div class="slides-custom">
                        <div class="slide-custom">
                            <img src="assets/img/pdf.png" alt="PDF Icon">
                            <p>25 Januari 2025</p>
                            <h3>Pengumuman pembatalan Kelulusan Peserta Penerimaan PPPK Pemkot Balikpapan TA 2024 Periode I</h3>
                            <p>Pengumuman selengkapnya dapat diakses pada tautan berikut</p>
                            <a href="https://drive.google.com/drive/folders/1l5s-YmKaWxjzAUtCypvyxQBHeYjXz_Dz"><button>Unduh</button></a>
                        </div>
                        <div class="slide-custom">
                            <img src="assets/img/pdf.png" alt="PDF Icon">
                            <p>21 Januari 2025</p>
                            <h3>Pengumuman Hasil akhir pasca sanggah seleksi CPNS Pemkot Balikpapan TA 2024</h3>
                            <p>Pengumuman selengkapnya dapat diakses pada tautan berikut</p>
                            <a href="https://bit.ly/HASIL_AKHIR_CPNS_2024_BPP"><button>Unduh</button></a>
                        </div>
                        <div class="slide-custom">
                            <img src="assets/img/pdf.png" alt="PDF Icon">
                            <p>10 Januari 2025</p>
                            <h3>Pengumuman Hasil Integrasi Nilai SKD dan SKB CPNS Pemkot Balikpapan TA 2024</h3>
                            <p>Pengumuman selengkapnya dapat diakses pada tautan berikut</p>
                            <a href="https://bit.ly/HasilSKDSKB_CPNS_TA2024_Bpp"><button>Unduh</button></a>
                        </div>
                        <div class="slide-custom">
                            <img src="assets/img/pdf.png" alt="PDF Icon">
                            <p>06 Januari 2025</p>
                            <h3>Pengumuman Hasil Seleksi Kompetensi PPPK Guru Pemkot Balikpapan TA 2024 Periode I</h3>
                            <p>Pengumuman selengkapnya dapat diakses pada tautan berikut</p>
                            <a href="https://bit.ly/HasilSelkom_PPPKGuru_Periode1"><button>Unduh</button></a>
                        </div>
                        <div class="slide-custom">
                            <img src="assets/img/pdf.png" alt="PDF Icon">
                            <p>02 Januari 2025</p>
                            <h3>Pengumuman Rekrutmen Tenaga Teknis Pada Dinas Komunikasi dan Informatika Kota Balikpapan Tahun 2025</h3>
                            <p>Pengumuman selengkapnya dapat diakses pada tautan berikut</p>
                            <a href="https://web.balikpapan.go.id/uploaded/Pengumuman_Rekrutmen_Tenaga_Teknis_Diskominfo_Tahun_2025.pdf"><button>Unduh</button></a>
                        </div>
                        <div class="slide-custom">
                            <img src="assets/img/pdf.png" alt="PDF Icon">
                            <p>27 Desember 2024</p>
                            <h3>PENGUMUMAN HASIL SELEKSI KOMPETENSI PPPK JABATAN TENAGA TEKNIS PEMKOT BALIKPAPAN TA 2024 PERIODE I</h3>
                            <p>Pengumuman selengkapnya dapat diakses pada tautan berikut</p>
                            <a href="https://bit.ly/HasilSelkom_PPPKTeknis_Periode1"><button>Unduh</button></a>
                        </div>
                        <div class="slide-custom">
                            <img src="assets/img/pdf.png" alt="PDF Icon">
                            <p>06 Desember 2024</p>
                            <h3>Pelaksanaan SKB CPNS Pemkot Balikpapan TA 2024</h3>
                            <p>Pengumuman selengkapnya dapat diakses pada tautan berikut</p>
                            <a href="https://bit.ly/SKB_BPP_2024"><button>Unduh</button></a>
                        </div>
                        <div class="slide-custom">
                            <img src="assets/img/pdf.png" alt="PDF Icon">
                            <p>01 Desember 2024</p>
                            <h3>Pengumuman Seleksi Kompetensi PPPK Pemkot Balikpapan TA 2024 Periode I</h3>
                            <p>Pengumuman selengkapnya dapat diakses pada tautan berikut</p>
                            <a href="https://bit.ly/Pengumuman_selkom_PPPKBpp_2024"><button>Unduh</button></a>
                        </div>
                    </div>
                    <div class="controls-custom">
                        <button class="control-custom prev">&#9664;</button>
                        <button class="control-custom next">&#9654;</button>
                    </div>
                    <div class="indicators-custom">
                        <div class="indicator-custom active"></div>
                        <div class="indicator-custom"></div>
                    </div>
                    <div class="button-container-custom">
                        <div class="button-custom">
                            <a href="/info_penting" style="text-decoration: none;">
                                <span>Lihat Semua Laporan</span>
                            </a>
                        </div>
                    </div>
                </div>
        {{-- end layanan --}}
    </main>
    <div class="responsive-image-container">
        <!-- Gambar whistleblower -->
        <img
            src="assets/img/whitstleblower.png"
            alt="Whistleblower System"
            class="responsive-image">
    </div>
@endsection
