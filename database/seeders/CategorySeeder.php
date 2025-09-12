<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    public $categories = [
        [
            "name" => "electronics",
            "color" => "background-color: #bde51ee3; color: white;"
        ],
        [
            "name" => "furniture",
            "color" => "background-color: #0b5e0fff; color: white;"
        ],
        [
            "name" => "books and comics",
            "color" => "background-color: #3564fdff; color: white;"
        ],
        [
            "name" => "sports",
            "color" => "background-color: #8506a8ff; color: white;"
        ],
        [
            "name" => "music",
            "color" => "background-color: #F4511E; color: white;"
        ],
        [
            "name" => "antiques",
            "color" => "background-color: #42f41eff; color: white;"
        ],
        [
            "name" => "adventure",
            "color" => "background-color: #f41e1eff; color: white;"
        ],
        [
            "name" => "vehicles",
            "color" => "background-color: #f41e9eff; color: white;"
        ],
        [
            "name" => "properties",
            "color" => "background-color: #1ef430d5; color: white;"
        ],
        [
            "name" => "art",
            "color" => "background-color: #cdf41ec2; color: white;"
        ],
    ];
    public function run(): void
    {                
        foreach ($this->categories as $category) {
            Category::create($category);
        }
    }
}
