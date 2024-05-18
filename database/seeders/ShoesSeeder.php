<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShoesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Shoe::create([
            'Name' => 'Man Running Shoes',
            'Price' => 500000,
            'Size' => 45,
            'Color' => 'White',
            'Photo' => fake()->image(),
            'CategoryId' => 1
        ]);

        \App\Models\Shoe::create([
            'Name' => 'Woman Running Shoes',
            'Price' => 500000,
            'Size' => 39,
            'Color' => 'Purple',
            'Photo' => fake()->image(),
            'CategoryId' => 2
        ]);
    }
}
