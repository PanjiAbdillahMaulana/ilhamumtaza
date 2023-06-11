<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\product;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345'),
            'is_admin' => 1
        ]);
        
        User::factory(5)->create();

        Category::create([
            'name' => 'Rempeyek',
            'slug' => 'rempeyek'
        ]);

        Category::create([
            'name' => 'Keripik Tempe',
            'slug' => 'keripik-tempe'
        ]);

        Product::create([
            'product' => 'Rempeyek Teri',
            'category_id' => 1,
            'user_id' => 1,
            'detail' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec scelerisque risus eget purus viverra, eget cursus turpis fringilla. Morbi posuere imperdiet sem.',
            'slug' => 'rempeyek-teri'
        ]);

        Product::create([
            'product' => 'Rempeyek Kacang',
            'category_id' => 1,
            'user_id' => 1,
            'detail' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec scelerisque risus eget purus viverra, eget cursus turpis fringilla. Morbi posuere imperdiet sem.',
            'slug' => 'rempeyek-kacang'
        ]);

        Product::create([
            'product' => 'Rempeyek Udang',
            'category_id' => 1,
            'user_id' => 1,
            'detail' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec scelerisque risus eget purus viverra, eget cursus turpis fringilla. Morbi posuere imperdiet sem.',
            'slug' => 'rempeyek-udang'
        ]);

        Product::create([
            'product' => 'keripik tempe petak',
            'category_id' => 2,
            'user_id' => 2,
            'detail' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec scelerisque risus eget purus viverra, eget cursus turpis fringilla. Morbi posuere imperdiet sem.',
            'slug' => 'keripik-tempe-petak'
        ]);

        Product::create([
            'product' => 'keripik tempe bulat',
            'category_id' => 2,
            'user_id' => 2,
            'detail' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec scelerisque risus eget purus viverra, eget cursus turpis fringilla. Morbi posuere imperdiet sem.',
            'slug' => 'keripik-tempe-bulat'
        ]);

        Product::create([
            'product' => 'keripik tempe segitiga',
            'category_id' => 2,
            'user_id' => 2,
            'detail' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec scelerisque risus eget purus viverra, eget cursus turpis fringilla. Morbi posuere imperdiet sem.',
            'slug' => 'keripik-tempe-segitiga'
        ]);

        Product::create([
            'product' => 'keripik tempe belah ketupat',
            'category_id' => 2,
            'user_id' => 2,
            'detail' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec scelerisque risus eget purus viverra, eget cursus turpis fringilla. Morbi posuere imperdiet sem.',
            'slug' => 'keripik-tempe-belah-ketupat'
        ]);

        Product::create([
            'product' => 'Rempeyek Kacang Hijau',
            'category_id' => 1,
            'user_id' => 1,
            'detail' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec scelerisque risus eget purus viverra, eget cursus turpis fringilla. Morbi posuere imperdiet sem.',
            'slug' => 'rempeyek-kacang-hijau'
        ]);
    }
}
