<?php

namespace Database\Seeders;

use App\Models\DetailPenyakit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailPenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DetailPenyakit::create([
            'idPenyakit' => 'P-01',
            'idGejala'=>'G-01',
            'Buah' => 'Mangga',
            'Bagian' => 'Buah'
        ]);
        DetailPenyakit::create([
            'idPenyakit' => 'P-01',
            'idGejala'=>'G-02',
            'Buah' => 'Mangga',
            'Bagian' => 'Buah'
        ]);
        DetailPenyakit::create([
            'idPenyakit' => 'P-02',
            'idGejala'=>'G-03',
            'Buah' => 'Mangga',
            'Bagian' => 'Buah'
        ]);
    }
}
