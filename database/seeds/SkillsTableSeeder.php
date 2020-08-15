<?php

use Illuminate\Database\Seeder;
use App\Models\Skill;
class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        foreach (range(1,4) as $index){
            Skill::create([
                'name'=>$this->getRandomName(),
                'percent'=>rand(50,100),
                'value'=>rand(50,100),
                'status'=>$this->getRandomStatus(),
            ]);
        }

    }
    public function getRandomStatus(){
        $status = array('active','inactive');
        return $status[array_rand($status)];
    }
    public function getRandomName(){
        $names = array('HTML5','CSS3','Javascript','Php');
        return $names[array_rand($names)];
    }
}
