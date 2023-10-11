<?php

namespace Database\Seeders;

use App\Models\Matoa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MatoaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Matoa::create([
            'tipe_kamar'  => 'Tipe A',
            'lokasi'      => 'Alkindi Royale Matoa',
            'harga'       => '1.000.000',
            'gambar'      => '/storage/product/kamar2.jpeg',
            'petak'       => '3 Petak',
            'dapur'       => 'Dapur Mini',
            'parkir'      => 'Parkir',
            'alat_mandi'  => 'Alat_Mandi',
        ]);
    }
}
