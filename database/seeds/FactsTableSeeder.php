<?php

use Illuminate\Database\Seeder;
use App\Models\Fact;
class FactsTableSeeder extends Seeder
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
            Fact::create([
                'icon'=>$this->getRandomIcon(),
                'number'=>rand(50,999),
                'name'=>$this->getRandomName(),
                'status'=>$this->getRandomStatus(),
            ]);
        }

    }

    public function getRandomName(){
        $names = array('Happy Clients','Projects','Hours Of Support','Hard Workers');
        return $names[array_rand($names)];
    }
    public function getRandomStatus(){
        $status = array('active','inactive');
        return $status[array_rand($status)];
    }
    public function getRandomIcon(){
        $icons = array('simple-smile','document-folder','live-support','users-alt-5');
        return $icons[array_rand($icons)];
    }
}
