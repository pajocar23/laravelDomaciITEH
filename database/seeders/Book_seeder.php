<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
use App\Models\book_list;

class Book_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Book::factory()
        //     ->count(2)
        //     ->for(book_list::factory()->state([
        //         'id' => 100,
        //     ]))
        //     ->create();

        DB::table('books')->insert([
            [

                'title' => 'Pride and Prejudice',

                'writer' => 'Jane Austen',

                'list_id' => '1'

            ],
            [
                'title' => 'To Kill a Mockingbird',

                'writer' => 'Harper Lee',

                'list_id' => '1'
            ],
            [
                'title' => 'The Pilgrim’s Progress',

                'writer' => 'John Bunyan',

                'list_id' => '2'
            ],
            [
                'title' => 'Robinson Crusoe',

                'writer' => 'Daniel Defoe',

                'list_id' => '2'
            ],
            [
                'title' => 'Gulliver’s Travels',

                'writer' => 'Jonathan Swift',

                'list_id' => '2'
            ]

        ]);
    }
}
