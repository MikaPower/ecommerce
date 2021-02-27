<?php

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        Admin::create([
            'name'      =>  $faker->name,
            'email'     =>  'nunoalf@hotmail.com',
            'password'  =>  bcrypt('tribalwars'),
        ]);

        Admin::create([
            'name'      =>  $faker->name,
            'email'     =>  'abelsouto10@hotmail.com',
            'password'  =>  bcrypt('abelxpto10'),
        ]);
    }
}
