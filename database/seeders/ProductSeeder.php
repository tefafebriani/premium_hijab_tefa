<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Tefa Pashmina',
            'photo' => 'https://dauky.co.id/cdn/shop/files/INSTANTPASHMINATEXTURE-TOBACCOBROWNA.jpg?v=1722325714&width=1200',
            'price' => '250.000',
        ]);

        Product::create([
            'name' => 'Tefa Bergo',
            'photo' => 'https://tubita.id/cdn/shop/products/hanna-bergo-instant-mocca-by-tubita-587563.jpg?v=1696930361',
            'price' => '199.000',
        ]);

        Product::create([
            'name' => 'Tefa Scarf',
            'photo' => 'https://storage.googleapis.com/hijup-production-sg-core/system/product_image/image/730428/big_KAMI_DELICATE_PARIS_WARM_TAUPE_4.jpg',
            'price' => '209.000',
        ]);

        Product::create([
            'name' => 'Tefa Rajut',
            'photo' => 'https://media.karousell.com/media/photos/products/2023/8/11/hijab_rajut_1691728644_df5aa035_progressive.jpg',
            'price' => '150.000',
        ]);

        Product::create([
            'name' => 'Tefa Sport',
            'photo' => 'https://asset-a.grid.id/crop/0x0:0x0/700x0/photo/2024/06/11/demarjpg-20240611030825.jpg',
            'price' => '109.000',
        ]);

        Product::create([
            'name' => 'Tefa Instan',
            'photo' => 'https://id-test-11.slatic.net/p/93bf7a14e6c167e376659d0f87fb3d30.jpg',
            'price' => '129.000',
        ]);
    }
}
