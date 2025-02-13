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

    h2 {
            padding-bottom: 50px;
            text-align: center;
            color: #034EA1;
             }

             table {
            width: 80%;
            margin: 0 auto 20px;
            border-collapse: collapse;
            font-family: 'Poppins', sans-serif;
        }

        th, td {
            padding: 10px;
            text-align: justify;
            border: 1px solid #ddd;
            color: #034EA1;
        }

        th {
            background-color: #034EA1;
            color: #ffffff;
        }


            /* Responsif untuk tablet dan layar lebih kecil */
            @media (max-width: 1024px) {
                th, td {
                    padding: 4px; /* Mengurangi padding pada tablet dan layar kecil */
                }
            }

            /* Responsif untuk perangkat mobile */
            @media (max-width: 768px) {
                table {
                    font-size: 12px; /* Mengurangi ukuran font untuk layar kecil */
                }
                th, td {
                    padding: 4px; /* Mengurangi padding pada perangkat mobile */
                }
            }

            /* Responsif untuk perangkat mobile portrait */
            @media (max-width: 480px) {
                th, td {
                    padding: 3px; /* Mengurangi padding lebih jauh untuk layar sangat kecil */
                }
                table {
                    font-size: 10px; /* Ukuran font lebih kecil lagi untuk perangkat kecil */
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
        Organisasi Perangkat
    </div>
        <h2>Sekertariat</h2>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Instansi</th>
                    <th>Alamat</th>
                    <th>Kepala OPD / Tautan</th>
                    <th>Website</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Sekretariat Daerah</td>
                    <td>Jenderal Sudirman No. 1 RT. 13, Balikpapan</td>
                    <td>Muhaimin, S.T.,M.T.</td>
                    <td><a href="https://setdakot.balikpapan.go.id/">https://setdakot.balikpapan.go.id/</a></td>
                </tr>
                <tr>
                    <td></td>
                    <td>a. Asisten Tata Pemerintahan : Drs. Zulkipli, M.Si.</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>b. Asisten Perekonomian Pembangunan dan Kesejahteraan Rakyat : Andi Muhammad Yusri Ramli, ST, MT.</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>c. Asisten Administrasi Umum : Dr. Andi Sri Juliarty R, M.Kes</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Sekretariat DPRD</td>
                    <td>Jl. Jend. Sudirman No. 86 Balikpapan 76122<br>Telp. 0542 – 420654, 421008, 425445<br>Fax 0542 – 731218</td>
                    <td>Arfiansyah, ST.</td>
                    <td><a href="http://dprd.balikpapan.go.id/">dprd.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Staf Ahli Wali Kota</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>a. Bidang Sosial, Kesejahteraan dan Pengembangan SDM : Adamin, S.Kom, M.Eng.</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>b. Bidang Pemerintahan  : Adwar Skenda Putra, S.Sos, M.M</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>c. Bidang Perekonomian dan Pembangunan : Neny Dwi Winahyu S.STP, M.Si.</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>


                <!-- Tambahkan baris lainnya sesuai kebutuhan -->
            </tbody>
        </table>


        <h2>Dinas</h2>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Instansi</th>
                    <th>Alamat</th>
                    <th>Kepala OPD / Tautan</th>
                    <th>Website</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Dinas Pendidikan dan Kebudayaan</td>
                    <td>Jl. Ruhui Rahayu I Balikpapan 76114 Telp. (0542) 8879450, Fax. (0542) 8879295</td>
                    <td>Irfan Taufik, S.Ag, M.Si.</td>
                    <td><a href="http://disdikbud.balikpapan.go.id/web/">disdikbud.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Dinas Kesehatan</td>
                    <td>Jl. Jend. Sudirman 118 Balikpapan 76113 Telp. 0542 – 421481 fax : 0542 – 733580</td>
                    <td>Dra. Alwiati, A.Apt.</td>
                    <td><a href="http://dkk.balikpapan.go.id/">dkk.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Dinas Pekerjaan Umum</td>
                    <td>Jl. Ruhui Rahayu I Balikpapan Telp. 0542- 874084</td>
                    <td>Rita, S.T</td>
                    <td><a href="http://dpu.balikpapan.go.id/">dpu.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Dinas Perumahan dan Permukiman</td>
                    <td>Jl. Ruhui Rahayu I No. 10 Balikpapan 76114 Telp. (0542) 874091 Fax. (0542)874085</td>
                    <td>Rafiuddin, S.T, M.T.</td>
                    <td><a href="http://disperkim.balikpapan.go.id/">disperkim.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Dinas Pertanahan dan Penataan Ruang</td>
                    <td>Gedung Squash Jl. Syarifuddin Yoes Balikpapan</td>
                    <td></td>
                    <td><a href="http://dppr.balikpapan.go.id/">dppr.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Dinas Perhubungan</td>
                    <td>Jl. Ruhui Rahayu I No. 5 Balikpapan 76114 Telp 0542 – 87629 Fax 0542 -876290</td>
                    <td></td>
                    <td><a href="http://dishub.balikpapan.go.id/">dishub.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Dinas Kependudukan Dan Catatan Sipil</td>
                    <td>Jl. MT Haryono No. 187 RT. 26 Telp. (0542) 876292 Fax. (0542) 876911</td>
                    <td>Tirta Dewi, S.Sos, M.AP</td>
                    <td><a href="https://capil.balikpapan.go.id/disdukcapil/">capil.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Dinas Ketenagakerjaan</td>
                    <td>Ged. Tiga Dinas lt.2 & 3, Jl.Jend Sudirman No.2 Balikpapan Telp. 0542 - 8800932 Fax: 0542 - 8800930</td>
                    <td>Ani Mufaidah, S.IP, M.Si.</td>
                    <td><a href="https://disnaker.balikpapan.go.id/">disnaker.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Dinas Sosial</td>
                    <td>Jl. Ruhui Rahayu I No.3 Kelurahan Sepinggan Kecamatan Balikpapan Selatan Telp/fax : (0542) 874087</td>
                    <td>Edy Gunawan, S.H., M.H</td>
                    <td><a href="http://dinsos.balikpapan.go.id/">dinsos.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Dinas Koperasi, Usaha Mikro, Kecil, Menengah & Perindustrian</td>
                    <td>Jl. Ruhui Rahayu I No. 7 Balikpapan 76114 Telp. (0542) 8879220, 8879242 Fax. (0542) 8879235</td>
                    <td>Heruressandy Setia Kesuma, S.STP, M.H.</td>
                    <td><a href="http://dkumkmp.balikpapan.go.id/">dkumkmp.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Dinas Perdagangan</td>
                    <td>Jl. Laks R.E Martadinata No. 01 Balikpapan 76121 Telp. (0542) 735530</td>
                    <td>Haemusri, SE, M.Ec. Dev</td>
                    <td><a href="http://dinasperdagangan.balikpapan.go.id/">dinasperdagangan.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Dinas Pemuda, Olahraga, Dan Pariwisata</td>
                    <td>Jl. Marsma R Iswahyudi Balikpapan</td>
                    <td>dr.Cokorda Istri Ratih Kusuma W.</td>
                    <td><a href="http://disporapar.balikpapan.go.id/">disporapar.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>Dinas Pangan, Pertanian, dan Perikanan</td>
                    <td>Jl. Marsma R Iswahyudi RT 53 No. 82 Balikpapan 76114 Telp/fax. 0542 – 761530, 763689, 763909</td>
                    <td>Ir. Sri Wahjuningsih, M.AP</td>
                    <td><a href="http://dipangan.balikpapan.go.id/">dipangan.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>Dinas Komunikasi dan Informatika</td>
                    <td>Jl. Jend Sudirman RT. 13 No.1 Balikpapan (Area Kantor Wali Kota Balikpapan)</td>
                    <td></td>
                    <td><a href="http://diskominfo.balikpapan.go.id/">diskominfo.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>Dinas Lingkungan Hidup</td>
                    <td>Jl. Ruhui Rahayu I Balikpapan 76114 Telp. (0542) 423332, 427614. Fax. (0542) 423332 email: dlh@balikpapan.go.id</td>
                    <td>Drs.Sudirman Djayaleksana, M.M</td>
                    <td><a href="http://dlh.balikpapan.go.id/">dlh.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>Dinas Pemberdayaan Perempuan, Perlindungan Anak dan Keluarga Berencana</td>
                    <td>Jl. MT Haryono RT. 26 No. 186 Balikpapan 76114 Telp. (0542) 424808, 8810561, 8810562 Fax. (0542) 424808</td>
                    <td>Ir. Heria Prisni</td>
                    <td><a href="http://dp3akb.balikpapan.go.id/">dp3akb.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>Dinas Penanaman Modal dan Perizinan Terpadu Satu Pintu</td>
                    <td>Jl. Ruhui Rahayu I RT.08 No.09 Kelurahan Sepinggan Baru Telp. 081348744743/ (0542) 8512311</td>
                    <td>Hasbullah Helmi, A.P, M.Si</td>
                    <td><a href="https://investasi.balikpapan.go.id/">investasi.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>Dinas Perpustakaan dan Arsip</td>
                    <td>Jl. Kapten Piere Tendean No. 1 Telp.0542–426811 Fax. 0542–422020</td>
                    <td>Drs. Elvin Junaidi, M.Si.</td>
                    <td><a href="http://dispustakar.balikpapan.go.id/">dispustakar.balikpapan.go.id</a></td>
                </tr>
            </tbody>
        </table>
        <h2>Badan/Kantor</h2>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Instansi</th>
                    <th>Alamat</th>
                    <th>Kepala OPD / Tautan</th>
                    <th>Website</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Inspektorat</td>
                    <td>Jl. Ruhui Rahayu I Telp. 0542 – 7218734 Kotak Pos 1111</td>
                    <td>Silvia Rahmadina, AP</td>
                    <td><a href="http://inspektorat.balikpapan.go.id/">inspektorat.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Badan Perencanaan Pembangunan Daerah, Penelitian dan Pengembangan</td>
                    <td>Jl. Jend. Sudirman No. 1 RT 13 Balikpapan 76100 Telp. 0542 – 422515, 421141 fax 0542 -421142</td>
                    <td>Murni, S.T</td>
                    <td><a href="http://bappeda.balikpapan.go.id/">bappeda.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Badan Kepegawaian dan Pengembangan Sumber Daya Manusia</td>
                    <td>Ged. Tiga Dinas lt.5, Jl.Jend Sudirman No.2 Telp. 0542-8800933  Fax.0542 - 8800934</td>
                    <td>Purnomo, S.Sos, MM</td>
                    <td><a href="http://bkpsdm.balikpapan.go.id/">bkpsdm.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Badan Keuangan Aset Daerah</td>
                    <td>Jl. Jend. Sudirman No. 1 RT 13 Balikpapan 76100 Telp. 0542-7171371, 0543300 Fax. 0542-414402</td>
                    <td>Agus Budi Prasetyo, S.IP, M.T.</td>
                    <td><a href="https://bkad.balikpapan.go.id/">bkad.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Badan Pengelola Pajak Daerah dan Retribusi Daerah</td>
                    <td>Ged. Tiga Dinas lt.2 & 3, Jl.Jend Sudirman No.2</td>
                    <td>Idham, SE</td>
                    <td><a href="http://bppdrd.balikpapan.go.id/">bppdrd.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Badan Penanggulangan Bencana Daerah (BPBD)</td>
                    <td>Jl. Ruhui Rahayu I No. 12 Balikpapan Telp/fax. 0542 – 874095</td>
                    <td>Usman Ali</td>
                    <td><a href="http://bpbd.balikpapan.go.id/">bpbd.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Badan Kesatuan Bangsa dan Politik</td>
                    <td>Jl. Kapten Pierre Tendean RT 29 No. 1 Balikpapan 76112 Telp. 0542 – 424540 Fax.0542 415217</td>
                    <td>Sutadi, S.Sos, M.M</td>
                    <td><a href="http://kesbangpol.balikpapan.go.id/">kesbangpol.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Satuan Polisi Pamong Praja</td>
                    <td>Jl. Jend. Sudirman No. 29 Call Center/Petugas Piket (0542) 8500123 Telp/Fax : (0542) 420531</td>
                    <td>Drs. Boedi Liliono, M.M</td>
                    <td><a href="http://satpolpp.balikpapan.go.id/">satpolpp.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Rumah Sakit Ibu dan Anak Sayang Ibu</td>
                    <td>Jl.Wain Nomor 33 Kel. Baru Ilir. Telp ( 0542 ) 422088 Fax ( 0542 ) 422088</td>
                    <td>drg. Retno Sulistyo Sitoresmi</td>
                    <td><a href="http://rskbsi.balikpapan.go.id/">rskbsi.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>RSUD Kota Balikpapan</td>
                    <td>Jl. Mayjend Sutoyo Telp 0542 - 792028, 792029, 792030</td>
                    <td>dr. Ifransyah Fuadi, Sp. PD</td>
                    <td><a href="http://rsud.balikpapan.go.id/">rsud.balikpapan.go.id</a></td>
                </tr>
            </tbody>
        </table>
        <h2>Kecamatan</h2>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Instansi</th>
                    <th>Alamat</th>
                    <th>Kepala OPD / Tautan</th>
                    <th>Website</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Kecamatan Balikpapan Timur</td>
                    <td>Jl. Mulawarman No. 32 RT 39 Balikpapan 76116 Telp. 0542 – 772007</td>
                    <td>Mustamin, S.E.</td>
                    <td><a href="http://balikpapantimur.balikpapan.go.id/">balikpapantimur.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Kecamatan Balikpapan Barat</td>
                    <td>Jl. Letjend. Soeprapto RT 06 No. 01 Balikpapan 76131 Telp. 0542 – 422038</td>
                    <td>Erwin, S.E.</td>
                    <td><a href="http://balikpapanbarat.balikpapan.go.id/">balikpapanbarat.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Kecamatan Balikpapan Tengah</td>
                    <td>Jl. RE. Martadinata No. 1 RT.52 Balikpapan.</td>
                    <td>Agung Budi Wibowo, S.STP, M.H.</td>
                    <td><a href="http://balikpapantengah.balikpapan.go.id/">balikpapantengah.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Kecamatan Balikpapan Utara</td>
                    <td>Jl. Projakal RT. 22 Kelurahan Graha Indah Km. 5,5 Telp : (0542) 422037</td>
                    <td>Muhammad Fadli Pathurrahman, S.STP, M.Si.</td>
                    <td><a href="http://balikpapanutara.balikpapan.go.id/">balikpapanutara.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Kecamatan Balikpapan Kota</td>
                    <td>Jl. Jend. Sudirman Rt 09 No. 12 (Depan Kantor Imigrasi Balikpapan)</td>
                    <td>Rosin Suparlan, S.STP.</td>
                    <td><a href="http://balikpapankota.balikpapan.go.id/">balikpapankota.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Kecamatan Balikpapan Selatan</td>
                    <td>Jl. Ruhui Rahayu RT 23 No. 1 Telp. 0542 – 875724</td>
                    <td>Muhammad Hakim, S.Sos.</td>
                    <td><a href="http://balikpapanselatan.balikpapan.go.id/">balikpapanselatan.balikpapan.go.id</a></td>
                </tr>
            </tbody>
        </table>
        <h2>Kelurahan</h2>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kelurahan</th>
                    <th>Alamat</th>
                    <th>Kepala Kelurahan / Tautan</th>
                    <th>Website</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Kelurahan Teritip</td>
                    <td>Jl. Mulawarman No.1 RT 29, Balikpapan Timur, Kalimantan Timur 76118</td>
                    <td>Sheli Seftiana Ningrum, S.STP.</td>
                    <td><a href="http://teritip.balikpapan.go.id/">teritip.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Kelurahan Manggar</td>
                    <td>Jl. Mulawarman No.1 RT 39, Balikpapan Timur, Kalimantan Timur 76116</td>
                    <td>Dedy Prasetia Utama Idris, S.Sos</td>
                    <td><a href="http://manggar.balikpapan.go.id/">manggar.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Kelurahan Lamaru</td>
                    <td>Jl. Mulawarman No.1 RT 1, Balikpapan Timur, Kalimantan Timur 76117</td>
                    <td>Hikmatullah Hardian, S.Sos.</td>
                    <td><a href="http://lamaru.balikpapan.go.id/">lamaru.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Kelurahan Manggar Baru</td>
                    <td>Jl. Pesut RT 21 Balikpapan 76116 Telp. 0542 – 747401</td>
                    <td>Munir Achmad, S.E.</td>
                    <td><a href="http://manggarbaru.balikpapan.go.id/">manggarbaru.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Kelurahan Kariangau</td>
                    <td>Jl. Sultan Hasanuddin RT 1 No. 05 Balikpapan Telp. 0542 – 7074272</td>
                    <td>Singgih Aji Wibowo, S.STP</td>
                    <td><a href="http://kariangau.balikpapan.go.id/">kariangau.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Kelurahan Margo Mulyo</td>
                    <td>Jl. BTN Gn.Empat rt.38 Balikpapan Telp. 0542 – 421766</td>
                    <td>Aji Syarifah Nur Alifah, S.Sos</td>
                    <td><a href="http://margomulyo.balikpapan.go.id/">margomulyo.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Kelurahan Baru Ilir</td>
                    <td>Jl. Letjen Suprapto No. 2, RT 06, Baru Ilir, Balikpapan Barat, Kota Balikpapan, Kalimantan Timur 76113</td>
                    <td>Junaidi, S.IP</td>
                    <td><a href="http://baruilir.balikpapan.go.id/">baruilir.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Kelurahan Baru Ulu</td>
                    <td>Jl. Sultan Hasanuddin (Komp. Perumahan Guru) RT 39 Balikpapan 76133 Telp/fax. 0542 – 740490</td>
                    <td>Abas, S.Pd</td>
                    <td><a href="http://baruulu.balikpapan.go.id/">baruulu.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Kelurahan Baru Tengah</td>
                    <td>Jl. 21 Januari RT 01 No. 001 Balikpapan 76131 Telp. 0542 – 736180</td>
                    <td>Eddy Moelyono</td>
                    <td><a href="http://barutengah.balikpapan.go.id/">barutengah.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Kelurahan Marga Sari</td>
                    <td>Jl. Semoi No.46 RT. 14, Marga Sari, Balikpapan Barat, Kota Balikpapan, Kalimantan Timur 76131</td>
                    <td>Hendra Jaya Prawira, S.ST</td>
                    <td><a href="http://margasari.balikpapan.go.id/">margasari.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Kelurahan Sumber Rejo</td>
                    <td>Jl. Sumber Rejo I RT 34 No. 04 Balikpapan 76124 Telp. 0542 – 441715 fax 0542 – 441714</td>
                    <td>Paing</td>
                    <td><a href="http://sumberrejo.balikpapan.go.id/">sumberrejo.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Kelurahan Karang Rejo</td>
                    <td>Jl. P. Antasari RT 63 No. 21 Balikpapan 76124 Telp. 0542 – 425584</td>
                    <td>Budi, S.Pd. I</td>
                    <td><a href="http://karangrejo.balikpapan.go.id/">karangrejo.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>Kelurahan Gn. Sari Ilir</td>
                    <td>Jl. Jenderal Ahmad Yani, RT 44, Gunungsari Ilir, Balikpapan Tengah, Kota Balikpapan, Kalimantan Timur</td>
                    <td>Arwani Ahmad, S.IP.</td>
                    <td><a href="http://gunungsariilir.balikpapan.go.id/">gunungsariilir.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>Kelurahan Gn. Sari Ulu</td>
                    <td>Jl. Letjen S. Parman, RT. 28 No. 1 Gunungsari Ulu, Balikpapan Tengah, Kota Balikpapan, Kalimantan Timur 76122</td>
                    <td>Rendra Hermawan, S.IP</td>
                    <td><a href="http://gunungsari-ulu.balikpapan.go.id/">gunungsari-ulu.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>Kelurahan Karang Jati</td>
                    <td>Jl. Jenderal Ahmad Yani No.593, RT.13, Balikpapan Tengah, Kota Balikpapan, Kalimantan Timur</td>
                    <td>Dedy Prasetya Utama Idris, S.Sos.</td>
                    <td><a href="http://karangjati.balikpapan.go.id/">karangjati.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>Kelurahan Mekar Sari</td>
                    <td>Jl. RE Martadinata RT 12 No. 05 Balikpapan 76112 Telp. 0542 – 737001</td>
                    <td>Evi Nurharyanti, S.STP</td>
                    <td><a href="http://mekarsari.balikpapan.go.id/">mekarsari.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>Kelurahan Karang Joang</td>
                    <td>Jl. Soekarno Hatta Km 11 No. 10 Balikpapan 76127 Telp/fax 0542 – 861891</td>
                    <td>Maryana, S.K.H</td>
                    <td><a href="http://karangjoang.balikpapan.go.id/">karangjoang.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>Kelurahan Gn. Samarinda</td>
                    <td>Jl. Tiga RT 33 Balikpapan 76125 Telp. 0542 – 416205</td>
                    <td>Sarjoko Wiyono. S.Pd.</td>
                    <td><a href="http://gunungsamarinda.balikpapan.go.id/">gunungsamarinda.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>Kelurahan Gn. Samarinda Baru</td>
                    <td>Jl. Indrakila RT 4 No. 17 Balikpapan 76125 Telp. 0542 – 861321</td>
                    <td>Yulita Kusuma Lestari, S.STP</td>
                    <td><a href="http://gunungsamarindabaru.balikpapan.go.id/">gunungsamarindabaru.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>Kelurahan Batu Ampar</td>
                    <td>Jl. Ulin Raya (Perumnas blok.IV) rt.10 No. 59 Balikpapan 76126 Telp. 0542 – 731301</td>
                    <td>Awan Darmawan, S.IP</td>
                    <td><a href="http://batuampar.balikpapan.go.id/">batuampar.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>21</td>
                    <td>Kelurahan Graha Indah</td>
                    <td>Perum Graha Indah Blok D No. 27 RT 01 Balikpapan 76126 Telp. 0542 – 862250</td>
                    <td>Muhammad Arif Rachman, A.Md, Farm</td>
                    <td><a href="http://grahaindah.balikpapan.go.id/">grahaindah.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>22</td>
                    <td>Kelurahan Muara Rapak</td>
                    <td>Jl. Soekarno Hatta Km 1,5 RT 50 N0. 64 Balikpapan Telp. 0542 – 731755</td>
                    <td>Bima Wibisono, S.Sos.</td>
                    <td></td>
                </tr>
                <tr>
                    <td>23</td>
                    <td>Kelurahan Damai Baru</td>
                    <td>Jl. MT Haryono RT 41 No.77 Balikpapan 76114 Telp. 0542 – 871285</td>
                    <td>Hendra Wardana, S.A.P</td>
                    <td><a href="http://damaibaru.balikpapan.go.id/">damaibaru.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>24</td>
                    <td>Kelurahan Damai Bahagia</td>
                    <td>Jl. Marsma R. Iswahyudi No.7 Telp 0542 – 7214270</td>
                    <td>Murdelina, SE</td>
                    <td><a href="http://damaibahagia.balikpapan.go.id/">damaibahagia.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>25</td>
                    <td>Kelurahan Gunung Bahagia</td>
                    <td>Jl. Ruhui Rahayu RT 14 No. 48 Balikpapan 76114 Telp. 0542 – 874504</td>
                    <td>A. Abd. Aziz, M. S.Pd.</td>
                    <td><a href="http://gunungbahagia.balikpapan.go.id/">gunungbahagia.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>26</td>
                    <td>Kelurahan Sungai Nangka</td>
                    <td>Jl. Marsma R Iswahyudi No.28A, RT.10, Balikpapan Selatan, Kalimantan Timur</td>
                    <td>Zainul Husni Suryadi, S.Sos</td>
                    <td><a href="http://sungainangka.balikpapan.go.id/">sungainangka.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>27</td>
                    <td>Kelurahan Sepinggan Raya</td>
                    <td>Jl. Syarifuddin Yoes Komp. Pelita Blok C4 RT 3 Balikpapan Telp. 0542 – 764517 fax 0542 – 764517</td>
                    <td>Arifuddin, S.P</td>
                    <td><a href="http://sepingganraya.balikpapan.go.id/">sepingganraya.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>28</td>
                    <td>Kelurahan Sepinggan</td>
                    <td>Jl. SMA IV Sepinggan Baru RT 033 Balikpapan 76115 Telp. 0542 – 780218 fax 0542 – 780218</td>
                    <td>Nur Ilham Septian, S.IP</td>
                    <td><a href="http://sepinggan.balikpapan.go.id/">sepinggan.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>29</td>
                    <td>Kelurahan Sepinggan Baru</td>
                    <td>Jl. Syarifuddin Yoes RT 2 Telp. 0542 – 7219522</td>
                    <td>Sarbin, S.Sos</td>
                    <td><a href="http://sepingganbaru.balikpapan.go.id/">sepingganbaru.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>30</td>
                    <td>Kelurahan Prapatan</td>
                    <td>Jl. Prapatan RT 26 No. 13 Balikpapan 76111 Telp. 0542 – 731787, 736317</td>
                    <td>Reza Dipa Pradeka, S.STP</td>
                    <td><a href="http://prapatan.balikpapan.go.id/">prapatan.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>31</td>
                    <td>Kelurahan Telaga Sari</td>
                    <td>Jl. RE Martadinata No. 03 Balikpapan 76111 Telp. 0542 – 424644</td>
                    <td>Arini Amir. S.Sos</td>
                    <td><a href="http://telagasari.balikpapan.go.id/">telagasari.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>32</td>
                    <td>Kelurahan Klandasan Ulu</td>
                    <td>Jl. Jend. Sudirman RT 1 No. 51 Balikpapan Telp 0542 – 731804</td>
                    <td>Andi Cucup Suparna, S.STP</td>
                    <td><a href="http://klandasanulu.balikpapan.go.id/">klandasanulu.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>33</td>
                    <td>Kelurahan Klandasan Ilir</td>
                    <td>Jl. Gajah Mada No. 53 RT 027 Balikpapan 76115 Telp. 0542 – 423210</td>
                    <td>Andi Arief Hidayatullah, S.P</td>
                    <td><a href="http://klandasanilir.balikpapan.go.id/">klandasanilir.balikpapan.go.id</a></td>
                </tr>
                <tr>
                    <td>34</td>
                    <td>Kelurahan Damai</td>
                    <td>Jl. Jend. Sudirman Perum Balikpapan Permai RT 16 Nomor 6</td>
                    <td>Kanti Suharjo, S.E.</td>
                    <td><a href="http://damai.balikpapan.go.id/">damai.balikpapan.go.id</a></td>
                </tr>
            </tbody>
        </table>
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
