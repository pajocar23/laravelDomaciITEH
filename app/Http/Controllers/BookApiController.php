<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\book_list;

class BookApiController extends Controller
{
    public function getAll()
    {
        return Book::all();
    }

    public function getBooksInList($book_list_id)
    {
        $books= Book::where('book_list_id', $book_list_id)->get();
        $output="";

        foreach ($books as $key => $book) {
            $output .= '<tr>' .
                '<td>' . $book->title . '</td>' .
                '<td>' . $book->writer . '</td>'.
                '<td> <a id="'.$book->id.'"class="btn btn-secondary" href="#" role="button">Update</a>
                <a id="'.$book->id.'"class="btn btn-danger" href="#" role="button">Delete</a></td>'.
                '</tr>';
        }
        return Response($output);
    }


    public function insert()
    {
        request()->validate([
            'title' => 'required',
            'writer' => 'required',
            'book_list_id' => 'required'
        ]);

        return Book::create([
            'title' => request('title'),
            'writer' => request('writer'),
            'book_list_id' => request('book_list_id'),
        ]);
    }

    public function update(Book $book)
    {
        request()->validate([
            'title' => 'required',
            'writer' => 'required',
            'book_list_id' => 'required'
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
}
