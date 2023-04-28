<?php

namespace Database\Seeders;

use App\Models\Obat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Obat::create([
            'namaObat'=> 'Velimex 80WP dan Bubur Bordeaux',
            'cara'=> 'Penyemprotan secara rutin 7-14 hari sekali sesuai dengan tingkat infeksi tanaman dengan dosis 2-2,5 gram/liter',
            'jenis'=> 'Fungisida berbahan aktif Maneb',
            'khasiat'=> 'Khasiat utama dari penggunaan Velimex 80 WP pada tanaman yang terinfeksi penyakit busuk buah antara lain menghambat pertumbuhan dan membunuh jamur penyebab penyakit pada tanaman, sehingga mencegah penyebaran penyakit ke bagian tanaman lainnya & dapat membantu menjaga kualitas dan kuantitas buah yang dihasilkan, sehingga meningkatkan produktivitas tanaman.',
            'idPenyakit'=> "P-01"

        ]);

        Obat::create([
            'namaObat'=> 'Masalgin 50WP dan Karbendazim',
            'cara'=> 'Penyemprotan secara rutin 7-14 hari sekali sesuai dengan tingkat infeksi tanaman dengan dosis 1-2 gram/liter',
            'jenis'=> 'Fungisida berbahan aktif Benomyl',
            'khasiat'=> 'Khasiat utama dari penggunaan Masalgin 50 WP dan Karbendazim untuk mengobati penyakit bercak daun antara lain menghambat pertumbuhan dan membunuh jamur penyebab penyakit pada tanaman, sehingga mencegah penyebaran penyakit ke bagian tanaman lainnya & dapat membantu meningkatkan kesehatan tanaman dan meningkatkan produktivitas tanaman.',
            'idPenyakit'=> "P-02"

        ]);

        Obat::create([
            'namaObat'=> 'Karbolinum dan Difolatan 4F',
            'cara'=> 'Kerok bagian yang terinfeksi, sebelum mengoleskan Difolatan bersihkan dahulu bagian batang yang terkena penyakit dengan menggunakan sikat kecil atau kuas dan air bersih, kemudian oleskan Difolatan dan tunggu beberapa saat hingga Difolatan meresap ke dalam batang. Hal ini membutuhkan waktu sekitar 30-60 menit tergantung pada kondisi lingkungan dan ukuran batang yang diobati.',
            'jenis'=> 'Fungisida berbahan aktif Tembaga',
            'khasiat'=> 'Khasiat utama dari penggunaan Difolatan dan Karbolinum yaitu mencegah dan mengobati infeksi jamur penyebab busuk batang pada tanaman, Kedua fungisida ini untuk embunuh jamur penyebab penyakit pada tanaman.',
            'idPenyakit'=> "P-03"

        ]);

        Obat::create([
            'namaObat'=> 'Banlate',
            'cara'=> 'Penyemprotan secara rutin 7-14 hari sekali sesuai dengan tingkat infeksi tanaman dengan dosis sesuai tertera pada kemasan atau 8 tutup botol dengan 14 liter air',
            'jenis'=> 'Fungisida berbahan aktif Triazin',
            'khasiat'=> 'Khasiat utama dari penggunaan Banlate antara lain menghambat pertumbuhan jamur penyebab penyakit pada akar tanaman & dapat meningkatkan pertumbuhan tanaman dan meningkatkan produksi tanaman dengan cara mengurangi tekanan penyakit pada tanaman.',
            'idPenyakit'=> "P-04"

        ]);

        Obat::create([
            'namaObat'=> 'Propiconazole dan Tebuconazole',
            'cara'=> 'Penyemprotan secara rutin 7-14 hari sekali sesuai dengan tingkat infeksi tanaman dengan dosis sekitar 0,1-0,2% (berdasarkan volume) dari larutan yang disiapkan.',
            'jenis'=> 'Fungisida berbahan aktif Triazol',
            'khasiat'=> 'Khasiat utama dari penggunaan Propiconazole dan Tebuconazole antara lain menghambat sintesis ergosterol pada dinding sel jamur penyebab penyakit, sehingga jamur menjadi tidak dapat tumbuh dan berkembang biak & menghambat sintesis membran sel jamur penyebab penyakit.',
            'idPenyakit'=> "P-05"

        ]);

        Obat::create([
            'namaObat'=> 'Furadan',
            'cara'=> 'Penyemprotan secara rutin 10-14 hari sekali sesuai dengan tingkat infeksi tanaman dengan dosis 2-4 liter/ha.',
            'jenis'=> 'Insektisida berbahan aktif Nematicide',
            'khasiat'=> 'Khasiat utama dari penggunaan Furadan antara lain menghambat enzim asetilkolinesterase pada sistem saraf serangga dan nematoda, sehingga menyebabkan gangguan fungsi saraf dan akhirnya kematian serangga atau nematoda yang terkena insektisida & mengendalikan populasi nematoda pada tanaman dan mencegah kerusakan lebih lanjut pada akar tanaman.',
            'idPenyakit'=> "P-06"

        ]);

        Obat::create([
            'namaObat'=> 'Kaptan dan Mancozeb',
            'cara'=> 'Penyemprotan secara rutin 7-10 hari sekali sesuai dengan tingkat infeksi tanaman dengan dosis 2-4 gram /liter air.',
            'jenis'=> 'Fungisida berbahan aktif Ditiokarbamat',
            'khasiat'=> 'Khasiat utama dari penggunaan Kaptan dan Mancozeb antara lain meningkatkan ketahanan tanaman terhadap serangan jamur penyebab penyakit kanker batang & dapat mencegah perkembangbiakan lebih lanjut dari jamur penyebab penyakit.',
            'idPenyakit'=> "P-07"

        ]);

        Obat::create([
            'namaObat'=> 'Bayleton',
            'cara'=> 'Penyemprotan secara rutin 7-14 hari sekali sesuai dengan tingkat infeksi tanaman dengan dosis berkisar antara 200-300 gram/ha.',
            'jenis'=> 'Fungisida berbahan aktif Triadimenol',
            'khasiat'=> 'Khasiat utaman dari penggunaan Bayleton antara lain menghambat pertumbuhan dan perkembangan jamur penyebab penyakit cendawan tepung, sehingga jamur tersebut tidak dapat berkembang biak dan menyebabkan kerusakan pada tanaman & dapat meningkatkan daya tahan tanaman terhadap serangan penyakit cendawan tepung dan kondisi lingkungan yang tidak menguntungkan.',
            'idPenyakit'=> "P-08"

        ]);
    }
}
