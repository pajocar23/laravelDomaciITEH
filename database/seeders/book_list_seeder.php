<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\User;
use App\Models\book_list;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class book_list_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // book_list::factory()
        //     ->count(2)
        //     ->has(Book::factory()->count(3))          
        //     ->for(User::factory()->state([
        //         'id' => 100,
        //     ]))
        //     ->create();

        DB::table('book_list')->insert([
            [

                'title' => 'Read books',

                'description' => 'Books that user read',

                'user_id' => '1'

            ],
            [
                'title' => 'Unread books',

                'description' => 'Books that user didnt read',

                'user_id' => '1'
            ],            
        ]);
    }
}
