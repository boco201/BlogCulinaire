<?php

use App\Models\Admin;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

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
            'email'     =>  'elizaboco@admin.com',
            'password'  =>  bcrypt('@@__#&1121#___@Tsembehou##&&123&&&uzezezs____#'),
        ]);
    }
}