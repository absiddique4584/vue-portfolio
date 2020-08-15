<?php

use Illuminate\Database\Seeder;
use App\Models\Service;
class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        foreach (range(1,6) as $index){
            Service::create([
                'icon'=>$this->getRandomIcon(),
                'name'=>$this->getRandomName(),
                'desc'=>$faker->sentence,
                'status'=>$this->getRandomStatus(),
            ]);
        }

    }

    public function getRandomName(){
        $names = array('Web Design','Web Development','Graphic Design','Software Development','SEO','Digital Marcketing');
        return $names[array_rand($names)];
    }
    public function getRandomStatus(){
        $status = array('active','inactive');
        return $status[array_rand($status)];
    }
    public function getRandomIcon(){
        $icons = array('bxl-dribbble','bx-file','bx-tachometer','bx-layer','bx-slideshow','bx-arch');
        return $icons[array_rand($icons)];
    }

}
