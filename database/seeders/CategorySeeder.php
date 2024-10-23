<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => [
                'uz' => 'Stol',
                'ru' => 'Стол'
            ]
        ]);
        Category::create([
            'name' => [
                'uz' => 'Divan',
                'ru' => 'диван'
            ]
        ]);
        Category::create([
            'name' => [
                'uz' => 'Stul',
                'ru' => 'Стул'
            ]
        ]);
    }
}
