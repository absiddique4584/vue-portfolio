<?php

use Illuminate\Database\Seeder;
use App\Models\Background;
class BackgroundTableSeeder extends Seeder
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
            Background::create([
                'image'=>'smart.JPG',
                'status'=>$this->getRandomStatus(),
            ]);
        }

    }
    public function getRandomStatus(){
        $status = array('active','inactive');
        return $status[array_rand($status)];
    }
}
