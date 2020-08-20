<?php

use Illuminate\Database\Seeder;
use App\Models\About;
class AboutTableSeeder extends Seeder
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
            About::create([
                'image' => 'me.jpeg',
                'title' => $faker->sentence,
                'birth' => $faker->date(),
                'age' => 27,
                'site' => 'https://google.com',
                'email' => 'mdsumon7914@gmail.com',
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'degree' => $faker->name,
                'country' => $faker->country,
                'city' => $faker->city,
                'h_desc' => $faker->paragraph,
                'm_desc' => $faker->paragraph,
                'l_desc' => $faker->paragraph,
            ]);
        }

    }
}
