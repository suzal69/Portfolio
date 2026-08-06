<?php

namespace Database\Seeders;

use App\Models\PortfolioItem;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        PortfolioItem::create([
            'title' => 'Sample Project',
            'description' => 'A full-stack Laravel application deployed on Render.',
            'image' => 'images/profile.jpg',
            'link' => 'https://github.com/suzal69/Portfolio',
        ]);
    }
}