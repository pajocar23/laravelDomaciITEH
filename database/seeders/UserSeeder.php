<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //    User::factory()
        //    ->count(5)
        //    ->create();

        DB::table('users')->insert([
            [

                'name' => 'Marko Markovic',

                'email' => 'Marko@gmail.com',

                'password' => 'marko'

            ],
            [
                'name' => 'Mirko Mirkovic',

                'email' => 'Mirko@gmail.com',

                'password' => 'mirko'
            ],
            [
                'name' => 'Petar Petrovic',

                'email' => 'Petar@gmail.com',

                'password' => 'petar'
            ]

        ]);
    }
}
