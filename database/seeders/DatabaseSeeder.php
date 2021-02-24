<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call([
        //     UserSeeder::class,
        //     book_list_seeder::class,
        //     Book_seeder::class
        // ]);
        //$this->call(UserSeeder::class);
          $this->call(book_list_seeder::class);
          $this->call(Book_seeder::class);
            
    }
}
