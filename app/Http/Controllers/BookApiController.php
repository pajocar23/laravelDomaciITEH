<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookApiController extends Controller
{
    public function getAll()
    {
        return Book::all();
    }

    //BOOK API
    public function insert()
    {
        request()->validate([
            'title' => 'required',
            'writer' => 'required',
            'list_id' => 'required'
        ]);

        return Book::create([
            'title' => request('title'),
            'writer' => request('writer'),
            'list_id' => request('list_id'),
        ]);
    }

    public function update(Book $book)
    {
        request()->validate([
            'title' => 'required',
            'writer' => 'required',
            'list_id' => 'required'
        ]);

        $success = $book->update([
            'title' => request('title'),
            'writer' => request('writer'),
            'list_id' => request('list_id'),
        ]);

        return [
            'success' => $success
        ];
    }

    public function destroy(Book $book)
    {
        $success = $book->delete();

        return [
            'success' => $success
        ];
    }
    //BOOK API
}
