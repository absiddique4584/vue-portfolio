<?php

use Illuminate\Database\Seeder;
use App\Models\Testimonial;
class TestimonialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        foreach (range(1,5) as $index){
            Testimonial::create([
                'photo'=>$this->getRandomPhoto(),
                'name'=>$this->getRandomName(),
                'title'=>$faker->name,
                'desc'=>$faker->paragraph,
                'status'=>$this->getRandomStatus(),
            ]);
        }

    }

    public function getRandomName(){
        $names = array('MD SUMON','MD SUJON','MD SAHEEN','MD RASHED');
        return $names[array_rand($names)];
    }
    public function getRandomStatus(){
        $status = array('active','inactive');
        return $status[array_rand($status)];
    }
    public function getRandomPhoto(){
        $photo = array('my2.jpg','my3.jpg','my4.jpg','my5.jpg',);
        return $photo[array_rand($photo)];
    }

}
