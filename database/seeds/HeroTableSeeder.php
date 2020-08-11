<?php

use Illuminate\Database\Seeder;
use App\Models\Hero;
class HeroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        foreach (range(1,1) as $index){
            Hero::create([
                'name'=>'MD ABU BAKAR SIDDIQUE',
                'name_a'=>'Programmer',
                'name_b'=>'Software Engineer',
                'name_c'=>'Developer',
                'name_d'=>'Designer',
                'twitter'=>'https://twitter.com',
                'facebook'=>'https://facebook.com',
                'instagram'=>'https://instagram.com',
                'skype'=>'https://skype.com',
                'linkedin'=>'https://linkedin.com',
            ]);
        }

    }
}
