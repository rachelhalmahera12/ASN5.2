<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class daftar_barangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('daftar_barang')->insert([
            'id' => '',
            'nama_barang' => 'tempat alat tulis',
            'kategori_barang' => 'alat penyimpanan',
            'satuan' => '12000',
            'harga' => '144000',
            'deskripsi_barang' => 'Kotak pensil adalah tempat untuk menyimpan pensil. Sebuah kotak pensil juga dapat berisi alat tulis lain.',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('daftar_barang')->insert([
            'id' => '',
            'nama_barang' => 'bolpoin',
            'kategori_barang' => 'alat penyimpanan',
            'satuan' => '3000',
            'harga' => '36000',
            'deskripsi_barang' => 'Bolpoin (bahasa Inggris: ballpoint pen; sering disalahpahami sebagai pulpen ), adalah alat tulis yang ujungnya menggunakan bola kecil yang berputar untuk mengontrol pengeluaran tinta kental.',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('daftar_barang')->insert([
            'id' => '',
            'nama_barang' => 'pensil',
            'kategori_barang' => 'alat tulis',
            'satuan' => '3000',
            'harga' => '36000',
            'deskripsi_barang' => 'Pensil atau potlot[1] adalah suatu alat tulis dan lukis yang awalnya terbuat dari grafit murni. Penulisan dilakukan dengan menggoreskan grafit tersebut ke atas media.',
            'created_at' => date('Y-m-d H:i:s')
        ]);

    }
}
