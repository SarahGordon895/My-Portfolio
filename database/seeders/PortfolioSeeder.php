<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            ['title' => 'Project 1', 'image' => 'img/about-1.jpg'],
            ['title' => 'Project 2', 'image' => 'img/about-2.jpg'],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
