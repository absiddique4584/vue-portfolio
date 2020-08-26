<?php

use Illuminate\Database\Seeder;
use App\Models\Portfolio;
class PortfolioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *['category_id','image','title','status']
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        foreach (range(1, 9) as $index) {
            Portfolio::create([
                'category_id'   =>rand(1,3),
                'image'   => $this->getRandomImage(),
                'title'   => $faker->sentence,
                'status' => $this->getRandomStatus()
            ]);
        }
    }


    /**
     * @return string
     */
    public function getRandomStatus()
    {
        $statuses = array('active', 'inactive');
        return $statuses[array_rand($statuses)];
    }
    public function getRandomImage()
    {
        $statuses = array('own1.png', 'own2.jpg','own3.jpeg','own4.jpeg');
        return $statuses[array_rand($statuses)];
    }
}
