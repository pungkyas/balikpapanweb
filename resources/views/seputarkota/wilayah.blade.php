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
    .containerrr {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            color: #034EA1;
            font-family: 'Poppins', sans-serif;
            margin-top: -2%;
        }

        .section-header {
            text-align: center;
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .sub-header {
            text-align: left;
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .image-container {
            text-align: center;
            margin-bottom: 20px;
        }

        .image-container img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .link-container {
            text-align: center;
            margin: 10px 0 20px;
        }

        .link-container a {
            text-decoration: underline;
            font-weight: bold;
            font-size: 1rem;
        }

        .text {
            margin-bottom: 20px;
            font-size: 1rem;
            text-align: justify;
        }

        .table-container {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #034EA1;
            color: #fff;
        }

        @media (max-width: 375px) {
            .section-header {
                font-size: 1.8rem;
            }

            .sub-header {
                font-size: 1.3rem;
            }

            .text {
                font-size: 0.9rem;
            }
            .containerrr {
            margin-top: -20%;
        }
        }
        /* balikpapan Nyaman */
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
        Wilayah Administrasi
    </div>
        <div class="containerrr">
            <!-- Header Utama -->
            <div class="section-header">Administrasi Kota Balikpapan</div>

            <!-- Gambar Wilayah -->
            <div class="image-container">
                <img src="assets/img/peta1.png" alt="Wilayah Kota Balikpapan">
            </div>

            <!-- Link Lihat Detail -->
            <div class="link-container">
                <a href="#">Lihat Detail</a>
            </div>

            <!-- Teks Deskripsi -->
            <div class="text">
                Kota Balikpapan secara astronomis terletak di antara 1,0 LS - 1,5 LS dan 116,5BT - 117,0 dengan luas sekitar 50.330,57 ha atau sekitar 503,3 km² dan luas pengelolaan laut mencapai 160.10 km² dengan batas wilayah:
            </div>

            <!-- Tabel Batas Wilayah -->
            <div class="table-container">
                <table>
                    <tbody>
                        <tr>
                            <td>Utara</td>
                            <td>Kabupaten Kutai Kartanegara</td>
                        </tr>
                        <tr>
                            <td>Selatan</td>
                            <td>Selat Makassar</td>
                        </tr>
                        <tr>
                            <td>Barat</td>
                            <td>Kabupaten Penajam Paser Utara</td>
                        </tr>
                        <tr>
                            <td>Timur</td>
                            <td>Selat Makassar</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Teks Administratif -->
            <div class="text">
                Secara administratif sesuai dengan Peraturan Pemerintah Republik Indonesia Nomor 38 Tahun 1996, Kota Balikpapan terdiri dari 5 (lima) Kecamatan dan 27 (dua puluh tujuh) Kelurahan.
            </div>

            <!-- Perubahan Peraturan -->
            <div class="text">
                Pada tahun 2012 ada Perubahan Peraturan Daerah Kota Balikpapan Nomor 7 Tahun 2012 tentang Pembentukan 7 (Tujuh) Kelurahan Dalam Wilayah Kota Balikpapan, dan Peraturan Daerah Kota Balikpapan Nomor 8 Tahun 2012 tentang Pembentukan Kecamatan Balikpapan Kota Dalam Wilayah Kota Balikpapan. Balikpapan terdiri dari 6 (enam) Kecamatan dan 34 (tiga puluh empat) Kelurahan, yaitu:
            </div>

            <!-- Header Subsection -->
            <div class="sub-header">Kecamatan Balikpapan Timur</div>

            <!-- Teks Deskripsi -->
            <div class="text">
                Kecamatan Balikpapan Timur memiliki luas wilayah perairan 92,42 km² dan wilayah darat 137,158 km². Kecamatan ini memiliki 4 (empat) kelurahan dan jumlah rukun tetangga:
            </div>

            <!-- Tabel Kecamatan -->
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kelurahan</th>
                            <th>Luas Daerah</th>
                            <th>Jumlah RT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Manggar</td>
                            <td>35,255km2	</td>
                            <td>30</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Manggar Baru</td>
                            <td>3,836km2	</td>
                            <td>26</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Lamaru</td>
                            <td>48,555km2	</td>
                            <td>13</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Teritip</td>
                            <td>49,512km2</td>
                            <td>24</td>
                        </tr>
                        <tr>
                    </tbody>
                </table>
            </div>
            <div class="sub-header">Kecamatan Balikpapan Selatan</div>

            <!-- Teks Deskripsi -->
            <div class="text">
                Kecamatan Balikpapan Selatan memiliki luas wilayah perairan 200,3 km2 dan wilayah darat 37,818 km2. Kecamatan ini memiliki 7 (tujuh) kelurahan dan jumlah rukun tetangga sebagai berikut :
            </div>

            <!-- Tabel Kecamatan -->
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kelurahan</th>
                            <th>Luas Daerah</th>
                            <th>Jumlah RT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Damai Baru</td>
                            <td>2,149 km²</td>
                            <td>33</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Damai Bahagia</td>
                            <td>3,708 km²</td>
                            <td>43</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Sepinggan Baru</td>
                            <td>10,618 km²</td>
                            <td>40</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Sungai Nangka</td>
                            <td>3,204 km²</td>
                            <td>27</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Sepinggan Raya</td>
                            <td>6,588 km²</td>
                            <td>31</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Gunung Bahagia</td>
                            <td>3,735 km²</td>
                            <td>50</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Sepinggan</td>
                            <td>7,812 km²</td>
                            <td>45</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="sub-header">Kecamatan Balikpapan Tengah</div>

            <!-- Teks Deskripsi -->
            <div class="text">
                Kecamatan Balikpapan Tengah memiliki luas wilayah perairan 9,97 km2 dan wilayah darat 11,0738 km2. Kecamatan ini memiliki 6 (enam) kelurahan dan jumlah rukun tetangga sebagai berikut :
            </div>

            <!-- Tabel Kecamatan -->
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kelurahan</th>
                            <th>Luas Daerah</th>
                            <th>Jumlah RT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Gunung Sari Ilir</td>
                            <td>1,1410 km²</td>
                            <td>69</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Gunung Sari Ulu</td>
                            <td>1,8252 km²</td>
                            <td>34</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Mekar Sari</td>
                            <td>1,2866 km²</td>
                            <td>35</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Karang Rejo</td>
                            <td>1,2050 km²</td>
                            <td>66</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Sumber Rejo</td>
                            <td>2,205 km²</td>
                            <td>44</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Karang Jati</td>
                            <td>3,411 km²</td>
                            <td>37</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="sub-header">Kecamatan Balikpapan Utara</div>

            <!-- Teks Deskripsi -->
            <div class="text">
                Kecamatan Balikpapan Utara memiliki wilayah darat seluas 132,1662 km2 dan tidak memiliki wilayah perairan. Kecamatan ini memiliki 6 (enam) kelurahan dan jumlah rukun tetangga sebagai berikut :
            </div>

            <!-- Tabel Kecamatan -->
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kelurahan</th>
                            <th>Luas Daerah</th>
                            <th>Jumlah RT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Gunung Samarinda</td>
                            <td>2,703 km²</td>
                            <td>47</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Muara Rapak</td>
                            <td>3,5272 m²</td>
                            <td>87</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Batu Ampar</td>
                            <td>10,553 km²</td>
                            <td>58</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Karang Joang</td>
                            <td>93,0904 km²</td>
                            <td>42</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Gunung Samarinda Baru</td>
                            <td>3,035 km²</td>
                            <td>20</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Graha Indah</td>
                            <td>19,254 km²</td>
                            <td>36</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="sub-header">Kecamatan Balikpapan Barat</div>

            <!-- Teks Deskripsi -->
            <div class="text">
                Kecamatan Balikpapan Barat memiliki luas wilayah perairan 37,49 km2 dan wilayah darat 179,952 km2. Kecamatan ini memiliki 6 (enam) kelurahan dan jumlah rukun tetangga sebagai berikut :
            </div>

            <!-- Tabel Kecamatan -->
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kelurahan</th>
                            <th>Luas Daerah</th>
                            <th>Jumlah RT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Baru Ilir	</td>
                            <td>0,589 km²</td>
                            <td>62</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Margo Mulyo</td>
                            <td>1,8453 km²</td>
                            <td>39</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Marga Sari	</td>
                            <td>0,665 km²</td>
                            <td>30</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Baru Tengah</td>
                            <td>0,5704  km²</td>
                            <td>43</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Baru Ulu</td>
                            <td>0,9548 km²</td>
                            <td>40</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Kariangau</td>
                            <td>175,3275 km²</td>
                            <td>9</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="sub-header">Kecamatan Balikpapan Kota</div>

            <!-- Teks Deskripsi -->
            <div class="text">
                Kecamatan Balikpapan Kota memiliki luas wilayah perairan 200,3 km2 dan wilayah darat 10,218 km2. Kecamatan ini memiliki 5 (lima) kelurahan dan jumlah rukun tetangga sebagai berikut :
            </div>

            <!-- Tabel Kecamatan -->
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kelurahan</th>
                            <th>Luas Daerah</th>
                            <th>Jumlah RT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Prapatan</td>
                            <td>3,1412 km²</td>
                            <td>36</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Telaga Sari</td>
                            <td>2,538 km²</td>
                            <td>38</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Klandasan Ulu</td>
                            <td>0,89 km²</td>
                            <td>53</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Klandasan Ilir</td>
                            <td>1,435 km²</td>
                            <td>57</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Damai</td>
                            <td>2,221 km²</td>
                            <td>16</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section>
        <div class="section-container">
            <img src="assets/img/balikpapan_nyaman.png" alt="Gambar di Pojok Kanan Bawah" />
         </div>
    </section>
    <section class="responsive-image-section">
    <style>

    </style>
</main>
    <div class="responsive-image-container">
        <!-- Gambar whistleblower -->
        <img
            src="assets/img/batik.png"
            alt="Whistleblower System"
            class="responsive-image">
    </div>
@endsection
