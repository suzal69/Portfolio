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

        PortfolioItem::firstOrCreate([
            'title' => 'Sample Project',
        ], [
            'description' => 'A full-stack Laravel application deployed on Render.',
            'tech_stack' => 'Laravel, Tailwind CSS, MySQL',
            'image_path' => 'images/profile.jpg',
            'github_url' => 'https://github.com/suzal69/Portfolio',
        ]);

        // Restore the three projects the user expects (idempotent)
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