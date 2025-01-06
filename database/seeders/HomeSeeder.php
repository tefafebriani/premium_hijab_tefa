<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Home;

class HomeSeeder extends Seeder
{
    public function run()
    {
        Home::create([
            'name' => env('APP_NAME'),
            'tagline' => 'Keanggunan dalam Setiap Lilitan Hijab.',
            'banner_photo_url' => 'https://texco.co.id/wp-content/uploads/2024/05/model-crinkle.webp',
            'description' => 'Premium Hijab adalah platform fashion yang menghadirkan koleksi hijab premium dengan desain elegan dan kualitas terbaik.',
            'about_photo' => 'https://i0.wp.com/zaloraadmin.wpcomstaging.com/wp-content/uploads/2023/09/tutorial-hijab-segi-empat.jpg?fit=1200%2C620&ssl=1',
            'about_us' => "Premium hijab tefa adalah toko hijab yang menyediakan berbagai pilihan hijab modern, nyaman, dan berkualitas. Kami hadir untuk memenuhi kebutuhan muslimah dengan koleksi yang elegan dan terjangkau, cocok untuk penggunaan sehari-hari maupun acara spesial.",
            'title_1' => "Elegansi yang Menyempurnakan Penampilan Anda",
            'description_1' => 'Premium Hijab menghadirkan koleksi hijab eksklusif dengan desain modern dan kualitas terbaik untuk melengkapi gaya anggun Anda setiap hari.',
            'feature_1' => 'Kualitas Premium',
            'feature_desc_1' => 'Hijab yang terbuat dari bahan berkualitas tinggi untuk kenyamanan maksimal dan tampilan elegan sepanjang hari.',
            'feature_2' => 'Desain Modern',
            'feature_desc_2' => 'Koleksi hijab dengan gaya modern yang sesuai dengan tren terkini tanpa mengorbankan nilai kesopanan.',
            'feature_3' => 'Kenyamanan Optimal',
            'feature_desc_3' => 'Dirancang untuk memberikan kenyamanan maksimal, bahkan saat digunakan dalam waktu lama.',
        ]);
    }
}
