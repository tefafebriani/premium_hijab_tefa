<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    public function run()
    {
        Profile::create([
            'name' => 'Teyufa Febriani Nur Fadilah ',
            'nim' => 'SSI202303692',
            'class' => 'S1 SISTEM INFORMASI',
            'univ' => 'STMIK Widya Utama 2023/2024',
            'email' => 'tefamail89@gmail.com',
            'photo' => 'https://down-id.img.susercontent.com/file/id-11134207-7rasc-m40lrl7pqdg938_tn',
        ]);
    }
}
