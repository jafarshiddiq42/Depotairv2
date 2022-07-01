<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class isiBarang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void 
     */
    public function run()
    {


        DB::table('barangs')->insert([
            'namaBarang' => 'Isi Ulang',
            'harga' => 3000,
           
        ]);
        DB::table('barangs')->insert([
            'namaBarang' => 'RO',
            'harga' => 5000,
           
        ]);
        DB::table('barangs')->insert([
            'namaBarang' => 'Gas Besar',
            'harga' => 200000,
            'stok'=>3,
           
        ]);
        DB::table('barangs')->insert([
            'namaBarang' => 'Gas Sedang',
            'harga' => 100000,
            'stok'=>6,
           
        ]);
        DB::table('barangs')->insert([
            'namaBarang' => 'Gas Kecil',
            'harga' => 30000,
            'stok'=>8,
           
        ]);
    }
}
