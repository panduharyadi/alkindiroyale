<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'nama_kamar'  => 'Kamar 01',
            'harga'       => '2000',
            'deskripsi'   => 'kamar nomor 1',
            'image'       => '/assets/images/kamar1.jpeg',
            'lokasi'      => 'Alkindi 1'
        ]);

        Product::create([
            'nama_kamar'  => 'Kamar 02',
            'harga'       => '2000',
            'deskripsi'   => 'kamar nomor 2',
            'image'       => '/storage/product/kamar2.jpeg',
            'lokasi'      => 'Alkindi 2'
        ]);
    }
}
