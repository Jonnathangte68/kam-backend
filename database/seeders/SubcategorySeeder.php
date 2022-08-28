<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subategories')->insert([
            'title' => "House Cleaning",
            'description' => "Gasdgjkasbgnslaas gs  ga sdgkasjdgalsdgjasldg gaksgasldglasndgnlsgagkask kgasdkgsabkgbsakbdg",
            'price' => 14,
            'category_id' => 1,
            'image' => 'https://media.publit.io/file/cleaning-services.jpeg'
        ]);
        DB::table('subategories')->insert([
            'title' => "House Cleaning",
            'description' => "Gasdgjkasbgnslaas gs  ga sdgkasjdgalsdgjasldg gaksgasldglasndgnlsgagkask kgasdkgsabkgbsakbdg",
            'price' => 14,
            'category_id' => 2,
            'image' => 'https://media.publit.io/file/cleaning-services.jpeg'
        ]);
        DB::table('subategories')->insert([
            'title' => "House Cleaning",
            'description' => "Gasdgjkasbgnslaas gs  ga sdgkasjdgalsdgjasldg gaksgasldglasndgnlsgagkask kgasdkgsabkgbsakbdg",
            'price' => 14,
            'category_id' => 3,
            'image' => 'https://media.publit.io/file/cleaning-services.jpeg'
        ]);
        DB::table('subategories')->insert([
            'title' => "House Cleaning",
            'description' => "Gasdgjkasbgnslaas gs  ga sdgkasjdgalsdgjasldg gaksgasldglasndgnlsgagkask kgasdkgsabkgbsakbdg",
            'price' => 14,
            'category_id' => 4,
            'image' => 'https://media.publit.io/file/cleaning-services.jpeg'
        ]);
        DB::table('subategories')->insert([
            'title' => "House Cleaning",
            'description' => "Gasdgjkasbgnslaas gs  ga sdgkasjdgalsdgjasldg gaksgasldglasndgnlsgagkask kgasdkgsabkgbsakbdg",
            'price' => 14,
            'category_id' => 5,
            'image' => 'https://media.publit.io/file/cleaning-services.jpeg'
        ]);
        DB::table('subategories')->insert([
            'title' => "House Cleaning",
            'description' => "Gasdgjkasbgnslaas gs  ga sdgkasjdgalsdgjasldg gaksgasldglasndgnlsgagkask kgasdkgsabkgbsakbdg",
            'price' => 14,
            'category_id' => 6,
            'image' => 'https://media.publit.io/file/health-services.jpeg'
        ]);
    }
}
