<?php

namespace Database\Seeders;

use App\Models\Penyakit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            Penyakit::create([
                'namaPenyakit' => '(P-01) Busuk Buah',
                'keterangan'=> 'Penyakit busuk buah adalah jenis penyakit yang menyerang buah-buahan yang sedang tumbuh, sehingga menyebabkan buah-buahan tersebut membusuk dan tidak dapat dimakan. Penyakit ini disebabkan oleh berbagai jenis jamur atau bakteri yang dapat menyebar melalui udara, air, atau melalui serangga yang menginfeksi tanaman.',
                'solusi'=> 'Secara fisik dapat dilakukan dengan pelilinan buah dan pemangkasan bagian bawah pohon. Secara kimiawi dengan penyemprotan fungisida yang berbahan aktif Maneb seperti Velimex 80 WP dengan dosis 2-2,5 gram/liter atau oleskan Bubur Bordeaux pada bagian yang terserang',


            ]);

            Penyakit::create([
                'namaPenyakit' => '(P-02) Bercak Daun',
                'keterangan'=> 'Penyakit bercak daun adalah jenis penyakit tanaman yang umum terjadi dan menyerang daun tanaman. Penyakit ini disebabkan oleh berbagai jenis patogen seperti jamur, bakteri, virus, dan juga serangga. Bercak pada daun ini biasanya disertai dengan adanya klorosis atau daun yang menguning di sekitarnya. Bercak pada daun dapat menyebabkan daun menjadi rusak dan mengurangi kemampuan fotosintesisnya, sehingga tanaman dapat tumbuh lebih lambat dan tidak berbuah.',
                'solusi'=> 'Secara fisik dapat dilakukan sanitasi kebun untuk mengurangi kelembaban dan daun-daun bawah yang terinfeksi secepatnya diambil agar tidak menjadi sumber penularan. Secara kimiwai dengan penyemprotan fungisida yang berbahan aktif Benomyl seperti Karbendazim atau Masalgin 50 WP dengan dosis 1-2 gram/liter atau oleskan Bubur Bordeaux pada bagian yang terserang',


                ]);

            Penyakit::create([
                'namaPenyakit' => '(P-03) Busuk Batang',
                'keterangan'=> 'Penyakit busuk batang adalah penyakit tanaman yang disebabkan oleh berbagai jenis patogen seperti jamur, bakteri, dan virus. Penyakit ini dapat menyerang batang tanaman dan menyebabkan pembusukan, kelemahan, bahkan kematian pada tanaman. Penyebaran penyakit busuk batang dapat terjadi melalui air, angin, serangga, atau alat-alat pertanian yang terkontaminasi. Penyakit ini dapat menyebar dengan sangat cepat dan mematikan tanaman dalam waktu singkat jika tidak segera diobat',
                'solusi'=> 'Secara fisik dapat dilakukan dengan cara mengerok kulit batang yang sakit sampai bagian yang sehat, lalu kerokan dibentuk oval meruncing di bagian atas dan bawah agar luka cepat tertutup kembali. Secara kimiawi oleskan fungisida berbahan aktif Tembaga seperti Karbolinum atau Difolatan 4 F 3%, lalu ditutup dengan penutup',


                ]);

            Penyakit::create([
                'namaPenyakit' => '(P-04) Busuk Akar',
                'keterangan'=> 'Penyakit busuk akar adalah jenis penyakit tanaman yang disebabkan oleh berbagai jenis patogen, seperti jamur, bakteri, nematoda, atau virus. Penyakit ini dapat menyerang sistem perakaran tanaman dan menyebabkan pembusukan, penurunan pertumbuhan, hingga kematian tanaman. Saat penyakit ini semakin parah, akar tanaman terinfeksi akan membusuk dan menjadi lembek serta berbau busuk',
                'solusi'=> 'Secara fisik dapat dilakukan dengan membongkar/eradikasi bagian tanaman yang terserang lalu dibakar dan bekas lubangnya diberi kapur. Secara kimiawi dengan penyemprotan fungisida berbahan aktif Triazin seperti Benlate 0,3% dengan dosis sesuai tertera pada kemasan atau 8 tutup botol dengan 14 liter.',

                ]);

            Penyakit::create([
                'namaPenyakit' => '(P-05) Embun Tepung',
                'keterangan'=> 'Penyakit embun tepung adalah penyakit jamur yang menyebabkan kerusakan daun, batang, dan bunga. Penyakit jamur yang paling umum dan mudah dikenali. Mempengaruhi semua jenis tanaman - sereal, rerumputan, sayuran, tanaman hias, gulma, semak, pohon buah-buahan, pohon hutan. Memiliki siklus hidup yang cepat dan menghasilkan bercak putih seperti tepung pada permukaan daun dan kuncup bunga. Mengurangi nilai estetika dan ekonomi tanaman Inang yang spesifik dan bertahan hidup dalam rentang iklim yang luas.',
                'solusi'=> 'Secara fisik dapat dilakukan sanitasi yaitu dengan memotong cabang/ranting yang pucuk bunga dan buahnya terserang berat, membuang bunga dan buah untuk tanaman yang terserang sedang dan membersihkan bunga dan buah untuk tanaman yang terserang ringan. Secara kimiawi dilakukan dengan penyemprotan fungisida berbahan aktif Triazol seperti Propiconazole dan Tebuconazole dengan dosis sesuai dengan kemasan atau konsentrasi 0,2 % (2 g/liter air).',

                ]);

            Penyakit::create([
                'namaPenyakit' => '(P-06) Nematoda Akar',
                'keterangan'=> 'Penyakit nematoda parasit akar adalah jenis cacing nematoda yang menyerang akar tanaman dan menyebabkan kerusakan pada sistem akar. Cacing nematoda ini dapat hidup dan berkembang biak di dalam akar tanaman, sehingga dapat mengakibatkan gangguan pada pertumbuhan dan kesehatan tanaman.',
                'solusi'=> 'Secara fisik dapat dilakukan sterilisasi tanah, seperti dengan menggunakan sinar matahari langsung atau uap air. Secara kimiawi dengan penyemprotan insektisida berbahan aktif Nematicide seperti Furadan dengan dosis 2-4 liter/ha.',

                ]);

            Penyakit::create([
                'namaPenyakit' => '(P-07) Kanker Batang',
                'keterangan'=> 'Penyakit kanker batang adalah penyakit tanaman yang menyebabkan pertumbuhan jaringan abnormal pada batang tanaman, sehingga menyebabkan kerusakan dan kematian pada pohon. Kanker batang biasanya disebabkan oleh infeksi jamur atau bakteri yang memasuki tanaman melalui luka pada batang atau akar, atau melalui serangga dan hama yang memakan tanaman.',
                'solusi'=> 'Secara fisik dapat dilakukan pemotongan bagian yang terinfeksi lalu dibuang agar penyakit tidak menyebar ke bagian tanaman yang lebih luas. Secara kimiawi dengan penyemprotan fungisida berbahan aktif Ditiokarbamat seperti Kaptan dan Mancozeb dengan dosis 2-4 gram /liter air.',

                ]);

            Penyakit::create([
                'namaPenyakit' => '(P-08) Cendawan Tepung',
                'keterangan'=> 'Penyakit cendawan tepung atau downy mildew adalah penyakit jamur yang disebabkan oleh jamur dari famili Peronosporaceae. Penyakit ini dapat menyerang berbagai jenis tanaman, terutama pada tanaman sayuran dan tanaman buah-buahan. Penyakit ini lebih sering terjadi pada musim dingin atau musim hujan dan dapat menyebar dengan cepat di lingkungan yang lembap.',
                'solusi'=> 'Secara fisik dapat dilakukan dengan pemangkasan dan pembuangan bagian tanaman yang terinfeksi. Secara kimiawi dengan penyemprotan fungisida berbahan aktif Triadimenol seperti Bayleton dengan dosis berkisar antara 200-300 gram/ha.',

                ]);
    }
}
