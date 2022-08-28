<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'title' => "Cleaning Services",
            'image' => 'https://media.publit.io/file/cleaning-services.jpeg'
        ]);
        DB::table('categories')->insert([
            'title' => "Domestic Help",
            'image' => 'https://media.publit.io/file/domestic-help.jpeg'
        ]);
        DB::table('categories')->insert([
            'title' => "Home Repair",
            'image' => 'https://media.publit.io/file/home-repair.jpeg'
        ]);
        DB::table('categories')->insert([
            'title' => "Yard Work",
            'image' => 'https://media.publit.io/file/yarn-work.jpeg'
        ]);
        DB::table('categories')->insert([
            'title' => "Moving Services",
            'image' => 'https://media.publit.io/file/moving-services.jpeg'
        ]);
        DB::table('categories')->insert([
            'title' => "Plumber",
            'image' => 'https://media.publit.io/file/plumber-W.jpeg'
        ]);
        DB::table('categories')->insert([
            'title' => "Health Services",
            'image' => 'https://media.publit.io/file/health-services.jpeg'
        ]);
        DB::table('categories')->insert([
            'title' => "Food Delivery",
            'image' => 'https://media.publit.io/file/food-delivery-r.jpeg'
        ]);
        DB::table('categories')->insert([
            'title' => "Animal Care",
            'image' => 'https://media.publit.io/file/animal-care.jpeg'
        ]);
    }
}
