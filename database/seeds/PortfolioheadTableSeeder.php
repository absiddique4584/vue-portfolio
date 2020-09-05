<?php

use Illuminate\Database\Seeder;
use App\Models\Portfoliohead;
class PortfolioheadTableSeeder extends Seeder
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
            Portfoliohead::create([
                'desc'=>$faker->paragraph,
                'status'=>$this->getRandomStatus(),
            ]);
        }

    }
    public function getRandomStatus(){
        $status = array('active','inactive');
        return $status[array_rand($status)];
    }

}
