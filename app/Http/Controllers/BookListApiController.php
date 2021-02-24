<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book_list;

class BookListApiController extends Controller
{
    public function getAll()
    {
        return book_list::all();
    }

    //BOOK LIST API
    public function insert()
    {
        request()->validate([
            'title'=>'required',
            'description'=>'required',
            'user_id'=>'required'
        ]);
    
        return book_list::create([
            'title'=>request('title'),
            'description'=>request('description'),
            'user_id'=>request('user_id'),
        ]);
    }

    public function update(book_list $book_lists)
    {
        request()->validate([
            'title'=>'required',
            'description'=>'required',
            'user_id'=>'required'
        ]);
    
        $success=$book_lists->update([
            'title'=>request('title'),
            'description'=>request('description'),
            'user_id'=>request('user_id'),
        ]);
    
        return[
            'success'=>$success
        ];
    }

    public function destroy(book_list $book_lists)
    {
        $success=$book_lists->delete();

        return[
            'success'=>$success
        ];
    }
    //BOOK LIST API
}
