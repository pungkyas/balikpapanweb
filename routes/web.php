<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');  // Halaman utama
});

// Jika ingin logo mengarah kembali ke halaman utama
Route::get('/home', function () {
    return view('home');  // Halaman utama
});

Route::get('/moto-daerah', function () {
    return view('profil.moto-daerah');  // Halaman utama
});

Route::get('/sejarah', function () {
    return view('profil.sejarah');  // Halaman utama
});
Route::get('/struktur', function () {
    return view('profil.struktur');  // Halaman utama
});
Route::get('/visi_misi', function () {
    return view('profil.visi_misi');  // Halaman utama
});
Route::get('/kepala_daerah', function () {
    return view('profil.kepala_daerah');  // Halaman utama

});
Route::get('/organisasi', function () {
    return view('profil.organisasi');  // Halaman utama
});

Route::get('/selayang_pandang', function () {
    return view('profil.selayang_pandang');  // Halaman utama
});
Route::get('/pariwisata', function () {
    return view('seputarkota.pariwisata');  // Halaman utama
});
Route::get('/peta', function () {
    return view('profil.peta');  // Halaman utama
});
Route::get('/penghargaan', function () {
    return view('profil.penghargaan');  // Halaman utama
});
Route::get('/no_telp', function () {
    return view('seputarkota.no_telp');  // Halaman utama
});
Route::get('/kesehatan', function () {
    return view('seputarkota.kesehatan');  // Halaman utama
});
Route::get('/ekonomi', function () {
    return view('seputarkota.ekonomi');  // Halaman utama
});
Route::get('/transportasi', function () {
    return view('seputarkota.transportasi');  // Halaman utama
});
Route::get('/pendidikan', function () {
    return view('seputarkota.pendidikan');  // Halaman utama
});
Route::get('/wilayah', function () {
    return view('seputarkota.wilayah');  // Halaman utama
});
Route::get('/berita', function () {
    return view('berita.berita');  // Halaman utama
});
Route::get('/info_penting', function () {
    return view('info_penting');  // Halaman utama
});
Route::get('/data_statistik', function () {
    return view('programkerja.data_statistik');  // Halaman utama
});
Route::get('/ilppd', function () {
    return view('programkerja.ilppd');  // Halaman utama
});
Route::get('/survey_kepuasan', function () {
    return view('programkerja.survey_kepuasan');  // Halaman utama
});

Route::get('/transparansi', function () {
    return view('programkerja.transparansi');
});
Route::get('/transparansi_2014', function () {
    return view('transparansi.transparansi_2014');
});
Route::get('/transparansi_2015', function () {
    return view('transparansi_2015');
});
Route::get('/transparansi_2016', function () {
    return view('transparansi.transparansi_2016');
});
Route::get('/transparansi_2017', function () {
    return view('transparansi.transparansi_2017');
});
Route::get('/transparansi_2019_2', function () {
    return view('transparansi.transparansi_2019_2');
});
Route::get('/transparansi_2023', function () {
    return view('transparansi.transparansi_2023');
});
Route::get('/transparansi_2023_1', function () {
    return view('transparansi.transparansi_2023_1');
});
Route::get('/transparansi_2023_2', function () {
    return view('transparansi.transparansi_2023_2');
});
Route::get('/transparansi_2023_3', function () {
    return view('transparansi.transparansi_2023_3');
});
Route::get('/transparansi_2023_4', function () {
    return view('transparansi.transparansi_2023_4');
});
Route::get('/transparansi_2023_5', function () {
    return view('transparansi.transparansi_2023_5');
});
Route::get('/transparansi_2023_6', function () {
    return view('transparansi.transparansi_2023_6');
});
Route::get('/transparansi_2019_1', function () {
    return view('transparansi.transparansi_2019_1');
});
Route::get('/transparansi_2022_1', function () {
    return view('transparansi.transparansi_2022_1');
});
Route::get('/transparansi_2022_2', function () {
    return view('transparansi.transparansi_2022_2');
});
Route::get('/transparansi_2022_3', function () {
    return view('transparansi.transparansi_2022_3');
});
Route::get('/transparansi_2022_5', function () {
    return view('transparansi_2022_5');
});
Route::get('/transparansi_2021_1', function () {
    return view('transparansi.transparansi_2021_1');
});
Route::get('/transparansi_2021_2', function () {
    return view('transparansi.transparansi_2021_2');
});
Route::get('/transparansi_2022_4', function () {
    return view('transparansi.transparansi_2022_4');
});
Route::get('/transparansi_2024_1', function () {
    return view('transparansi.transparansi_2024_1');
});
Route::get('/transparansi_2020_1', function () {
    return view('transparansi.transparansi_2020_1');
});
Route::get('/transparansi_2020_2', function () {
    return view('transparansi.transparansi_2020_2');
});
Route::get('/transparansi_2020_3', function () {
    return view('transparansi.transparansi_2020_3');
});
Route::get('/transparansi_2024_2', function () {
    return view('transparansi.transparansi_2024_2');
});
Route::get('/transparansi_2024_4', function () {
    return view('transparansi.transparansi_2024_4');
});
Route::get('/transparansi_2024_3', function () {
    return view('transparansi.transparansi_2024_3');
});
Route::get('/transparansi_2025_1', function () {
    return view('transparansi.transparansi_2025_1');
});
Route::get('/transparansi_2018_1', function () {
    return view('transparansi.transparansi_2018_1');
});
Route::get('/transparansi_2018_2', function () {
    return view('transparansi.transparansi_2018_2');
});
Route::get('/transparansi_2014_1', function () {
    return view('transparansi.transparansi_2014_1');
});
Route::get('/transparansi_2014_2', function () {
    return view('transparansi.transparansi_2014_2');
});
Route::get('/detail_berita', function () {
    return view('berita.detail_berita');
});
Route::get('/detail_berita_1', function () {
    return view('berita.detail_berita_1');
});
Route::get('/detail_berita_2', function () {
    return view('berita.detail_berita_2');
});
Route::get('/detail_berita_3', function () {
    return view('berita.detail_berita_3');
});
Route::get('/detail_berita_4', function () {
    return view('berita.detail_berita_4');
});
Route::get('/detail_sarana_1', function () {
    return view('sarana.detail_sarana_1');
});
Route::get('/detail_sarana_2', function () {
    return view('sarana.detail_sarana_2');
});
Route::get('/detail_sarana_3', function () {
    return view('sarana.detail_sarana_3');
});
Route::get('/detail_sarana_4', function () {
    return view('sarana.detail_sarana_4');
});
Route::get('/detail_sarana_5', function () {
    return view('sarana.detail_sarana_5');
});
Route::get('/detail_wisata1', function () {
    return view('wisata.detail_wisata1');
});
Route::get('/detail_pariwisata_1', function () {
    return view('wisata.detail_pariwisata_1');
});
Route::get('/detail_pariwisata_2', function () {
    return view('wisata.detail_pariwisata_2');
});
Route::get('/detail_pariwisata_3', function () {
    return view('wisata.detail_pariwisata_3');
});
Route::get('/detail_pariwisata_4', function () {
    return view('wisata.detail_pariwisata_4');
});
Route::get('/detail_pariwisata_5', function () {
    return view('wisata.detail_pariwisata_5');
});
Route::get('/detail_pariwisata_6', function () {
    return view('wisata.detail_pariwisata_6');
});
Route::get('/detail_pariwisata_7', function () {
    return view('wisata.detail_pariwisata_7');
});
Route::get('/detail_pariwisata_8', function () {
    return view('wisata.detail_pariwisata_8');
});
Route::get('/detail_pariwisata_9', function () {
    return view('wisata.detail_pariwisata_9');
});
Route::get('/detail_pariwisata_10', function () {
    return view('wisata.detail_pariwisata_10');
});
Route::get('/whistleblower', function () {
    return view('masyarakat.whistleblower');
});
Route::get('/kunjungan_kerja', function () {
    return view('masyarakat.kunjungan_kerja');
});
Route::get('/buku_tamu', function () {
    return view('masyarakat.buku_tamu');
});
Route::get('/aduan_masyarakat', function () {
    return view('masyarakat.aduan_masyarakat');
});
Route::get('/status', function () {
    return view('programkerja.status');
});

Route::get('/aset', function () {
    return view('programkerja.aset');
});

Route::get('/perencanaan', function () {
    return view('programkerja.perencanaan');
});

Route::get('/perencanaan_1', function () {
    return view('detail perencanaan.perencanaan_1');
});
Route::get('/perencanaan_2', function () {
    return view('detail perencanaan.perencanaan_2');
});

Route::get('/detail_event', function () {
    return view('detail_event');
});

Route::get('/detail_event_1', function () {
    return view('detail_event_1');
});
Route::get('/detail_event_2', function () {
    return view('detail_event_2');
});
Route::get('/detail_event_3', function () {
    return view('detail_event_3');
});

Route::get('/eventt', function () {
    return view('eventt');
});

Route::get('/realisasi', function () {
    return view('programkerja.realisasi');
});

Route::get('/laporan', function () {
    return view('programkerja.laporan');
});
Route::get('/semua-layanan', function () {
    return view('semua-layanan');
});




