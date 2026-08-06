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
            'image_path' => 'images/profile.jpg',
            'github_url' => 'https://github.com/suzal69/Portfolio',
        ]);
    }
}