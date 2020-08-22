<?php

use Illuminate\Database\Seeder;
use App\Models\Education;
class EducationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        foreach (range(1,2) as $index){
            Education::create([
                'degree'=>$faker->sentence,
                'year'=>$faker->year,
                'versity'=>$faker->sentence,
                'skill'=>$faker->paragraph,
                'status'=>$this->getRandomStatus(),
            ]);
        }

    }
    public function getRandomStatus(){
        $status = array('active','inactive');
        return $status[array_rand($status)];
    }
}
