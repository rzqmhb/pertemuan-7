<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nim' => '2141720086',
                'nama' => 'Roziq Mahbubi',
                'kelas' => 'TI-2G',
                'jurusan' => 'Teknologi Informasi',
                'no_hp' => '087x-xxxx-xxxx'
            ],
        ];
        DB::table('mahasiswas')->insert($data);
    }
}
