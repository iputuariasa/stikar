<?php

namespace Database\Seeders;

use App\Models\Motivation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MotivationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Motivation::create([
            'isi' => 'Jangan mengharapkan semuanya bisa jadi lebih mudah, berharaplah agar dirimu bisa jadi lebih baik.',
            'pencetus' => 'Jim Rohn'
        ]);
        
        Motivation::create([
            'isi' => 'Lakukan! Kalau Anda sukses Anda berbahagia, kalau Anda gagal Anda belajar.',
            'pencetus' => 'Mario Teguh'
        ]);

        Motivation::create([
            'isi' => 'Memang baik merayakan kesuksesan, tapi hal yang lebih penting adalah untuk mengambil pelajaran dari kegagalan.',
            'pencetus' => 'Bill Gates'
        ]);
    }
}
