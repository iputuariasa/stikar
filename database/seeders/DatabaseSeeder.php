<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\MotivationSeeder;
use Database\Seeders\NewStudentSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'email' => 'iputuariasa04@gmail.com',
        //     'password' => bcrypt('12345'),
        //     'new_student_id' => 7515718,
        //     'role' => 'Siswa'
        // ]);

        User::create([
            'slug' => preg_replace("/[^a-zA-Z0-9]/", "", bcrypt(1)),
            'nama' => 'I Putu Ariasa',
            'email' => 'iputuariasa75@gmail.com',
            'password' => bcrypt('12345'),
            'foto' => 'myfoto.JPG',
            'jk' => 'Laki-laki',
            'telepon' => '081234567891',
            'jabatan' => 'Staf Pusat Teknologi Informasi Stikar',
            'alamat' => 'Br. Dinas Tukad Sabuh, Duda Utara, Selat, Karangasem, Bali',
            'role' => 'Admin'
        ]);

        User::create([
            'slug' => preg_replace("/[^a-zA-Z0-9]/", "", bcrypt(2)),
            'nama' => 'Ni Luh Putu Cahyanti Wulandari',
            'email' => 'cahyantiwulan2@gmail.com',
            'password' => bcrypt('12345'),
            'jk' => 'Perempuan',
            'telepon' => '089876543210',
            'jabatan' => 'Guru Akuntansi',
            'alamat' => 'Br. Dinas Tukad Sabuh, Duda Utara, Selat, Karangasem, Bali',
            'role' => 'Operator'
        ]);


        $this->call(MotivationSeeder::class);
        $this->call(NewStudentSeeder::class);




        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
