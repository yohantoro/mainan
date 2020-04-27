<?php

// domain email
$namaDomain = '@mbah.gugel.com';

// array $hasil
$hasil = [];

// daftar data mahasiswa
$daftarMahasiswa = [
    [
        'noInduk' => '101230001',
        'nama' => 'Dika Sit Emet',
        'programStudi' => 'Teknik Komputer'
    ],
    [
        'noInduk' => '101230002',
        'nama' => 'Fitriani Lorem',
        'programStudi' => 'Teknik Komputer'
    ],
    [
        'noInduk' => '101230003',
        'nama' => 'Sum Ipsum',
        'programStudi' => 'Teknik Komputer'
    ],
    [
        'noInduk' => '101230004',
        'nama' => 'Jamaludin Dolor',
        'programStudi' => 'Teknik Komputer'
    ],
];

if ($daftarMahasiswa != null) {
    foreach ($daftarMahasiswa as $mahasiswa) {
        // hilangkan spasi di antara nama yang diubah ke huruf kecil semua
        $nama = str_replace(' ', '', strtolower($mahasiswa['nama']));

        // ambil lima karakter awal nama
        $potonganNama = substr($nama, 0, 5);

        // ambil lima karakter terakhir noInduk
        $potonganNoInduk = substr($mahasiswa['noInduk'], -5);

        // gabungan $potonganNama, $potonganNoInduk, dan $namaDomain
        $email = $potonganNama . $potonganNoInduk . $namaDomain;

        // hasil akhir email dimasukkan ke array $hasil
        $hasil[] = $email;
    }
}

// tampilkan hasilnya berupa json (atau ke bentuk lainnya, terserah Anda)
echo json_encode($hasil);

?>
