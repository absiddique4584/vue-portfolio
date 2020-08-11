<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name'=>'portfolio',
                'email'=>'portfolio@gmail.com',
                'password'=> bcrypt('12345678'),
            ],
            [
                'name'=>'vue-portfolio',
                'email'=>'vue-portfolio@gmail.com',
                'password'=> bcrypt('12345678'),
            ],
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
