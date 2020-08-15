<?php

use Illuminate\Database\Seeder;
use App\Models\Skill2;
class Skill2TableSeeder extends Seeder
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
            Skill2::create([
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
        $names = array('Laravel','Vue.js','React.js','Php');
        return $names[array_rand($names)];
    }
}
