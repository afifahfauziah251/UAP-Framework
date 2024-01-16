<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dokters')->insert([
            'nama' => 'Afifah Fauziah',
            'noizinpraktik' => '02134',
            'email' => 'afifah@gmail.com',
            'umur' => '21'
        ]);
    }
}
