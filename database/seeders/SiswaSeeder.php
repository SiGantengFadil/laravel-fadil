<?php

namespace Database\Seeders;

use App\Models\siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       siswa ::insert(
        [
            'nama' => 'fadhil',
            'kelas' => 'Xl RPL 2',
            'jenis_kelamin' => 0
        ]
        );

        siswa ::insert(
            [
                'nama' => 'fawwaz',
                'kelas' => 'Xl RPL 2',
                'jenis_kelamin' => 0
            ]
        );
        siswa ::insert(
            [
                'nama' => 'maulana',
                'kelas' => 'Xl RPL 2',
                'jenis_kelamin' => 0
            ]
        );
    }
}
