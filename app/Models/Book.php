<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\book_list;

class Book extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(book_list::class);
    }
}
