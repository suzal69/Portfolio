<?php

namespace Database\Seeders;

use App\Models\PortfolioItem;
use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::firstOrCreate([
            'email' => env('ADMIN_EMAIL', 'admin@example.com'),
        ], [
            'name' => env('ADMIN_NAME', 'Admin User'),
            'password' => Hash::make(env('ADMIN_PASSWORD', 'password')),
            'email_verified_at' => now(),
        ]);

        $portfolioItems = [
            [
                'title' => 'Laravel Portfolio & Project Management App',
                'description' => 'A full-stack Laravel application deployed on Render, featuring portfolio management and project tracking.',
                'tech_stack' => 'Laravel, Tailwind CSS, MySQL, Alpine.js',
                'image_path' => 'images/portfolio.jpg',
                'github_url' => 'https://github.com/suzal69/Portfolio',
            ],
            [
                'title' => 'Helmet Nepal Ecommerce Website',
                'description' => 'An online store for motorcycle helmets with product management and a checkout flow.',
                'tech_stack' => 'Laravel, Livewire, MySQL',
                'image_path' => 'images/ecommerce.jpg',
            ],
            [
                'title' => 'Ekantipur Scraper',
                'description' => 'A Python script to scrape news articles from Ekantipur online portal.',
                'tech_stack' => 'Python, Beautiful Soup',
                'image_path' => 'images/scraper.png',
            ],
            [
                'title' => 'Hostel Management System',
                'description' => 'A web app to manage hostel rooms, bookings, and residents.',
                'tech_stack' => 'PHP, MySQL, JavaScript',
                'image_path' => 'images/hostel.png',
            ],
            [
                'title' => 'Retail-Sales-Analysis',
                'description' => 'Data analysis of retail sales using Python libraries.',
                'tech_stack' => 'Python, Pandas, Matplotlib',
                'image_path' => 'images/retail.png',
            ],
        ];

        foreach ($portfolioItems as $item) {
            PortfolioItem::updateOrCreate(
                ['title' => $item['title']],
                $item
            );
        }

        Project::firstOrCreate([
            'title' => 'Hostel Management System',
        ], [
            'description' => 'A web app to manage hostel rooms, bookings, and residents.',
            'status' => 'completed',
        ]);

        Project::firstOrCreate([
            'title' => 'E-commerce Store',
        ], [
            'description' => 'An online store with product management and checkout flow.',
            'status' => 'completed',
        ]);

        Project::firstOrCreate([
            'title' => 'Portfolio Website',
        ], [
            'description' => 'Personal portfolio showcasing projects and contact info.',
            'status' => 'published',
        ]);
    }
}