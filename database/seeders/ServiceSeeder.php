<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'title' => "Clothing Wash",
            'description' => "The best clothing washing machines, we will give you clothers in the best quality.",
            'price' => 44,
            'subategory_id' => 1,
            'image' => 'https://media.publit.io/file/yarn-work.jpeg'
        ]);
        DB::table('services')->insert([
            'title' => "Industrial Cleaning",
            'description' => "Industrial cleaning service with high quality workers, window cleaning can be included.",
            'price' => 33,
            'subategory_id' => 1,
            'image' => 'https://media.publit.io/file/yarn-work.jpeg'
        ]);
        DB::table('services')->insert([
            'title' => "Office Cleaning",
            'description' => "Office cleaning service with high quality worker, window cleaning can be included.",
            'price' => 15,
            'subategory_id' => 1,
            'image' => 'https://media.publit.io/file/yarn-work.jpeg'
        ]);
        DB::table('services')->insert([
            'title' => "Test 2 Cleaning",
            'description' => "Office cleaning service with high quality worker, window cleaning can be included.",
            'price' => 11,
            'subategory_id' => 2,
            'image' => 'https://media.publit.io/file/yarn-work.jpeg'
        ]);
        DB::table('services')->insert([
            'title' => "Test 3 Cleaning",
            'description' => "Office cleaning service with high quality worker, window cleaning can be included.",
            'price' => 22,
            'subategory_id' => 3,
            'image' => 'https://media.publit.io/file/yarn-work.jpeg'
        ]);
    }
}
