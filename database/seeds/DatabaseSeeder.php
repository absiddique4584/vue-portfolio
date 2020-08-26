<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
             UsersTableSeeder::class,
             HeroTableSeeder::class,
             FactsTableSeeder::class,
             SkillsTableSeeder::class,
             Skill2TableSeeder::class,
             ServiceTableSeeder::class,
             TestimonialTableSeeder::class,
             AboutTableSeeder::class,
             EducationTableSeeder::class,
             ExperienceTableSeeder::class,
             CategoryTableSeeder::class,
             PortfolioTableSeeder::class,
         ]);
    }
}
