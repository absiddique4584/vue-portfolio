<?php

use Illuminate\Database\Seeder;
use App\Models\Experience;
class ExperienceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.['rank','work_place','year','work1','work2','work3','work4','status']
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        foreach (range(1,2) as $index){
           Experience::create([
                'rank'=>$faker->sentence,
                'work_place'=>$faker->sentence,
                'year'=>$faker->year,
                'work1'=>$faker->paragraph,
                'work2'=>$faker->paragraph,
                'work3'=>$faker->paragraph,
                'work4'=>$faker->paragraph,
                'status'=>$this->getRandomStatus(),
            ]);
        }

    }
    public function getRandomStatus(){
        $status = array('active','inactive');
        return $status[array_rand($status)];
    }

}
