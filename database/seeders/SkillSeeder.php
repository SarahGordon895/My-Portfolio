<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        $skills = [
            'Web Designer',
            'Web Developer',
            'Front End Developer',
            'Switch and Router Networker',
            'App Designer & Developer',
            'Flyer and Poster Designer'
        ];

        foreach ($skills as $skill) {
            Skill::create(['name' => $skill]);
        }
    }
}
