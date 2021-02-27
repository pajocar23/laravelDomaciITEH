<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\book_list;

class Book extends Model
{
    use HasFactory;

    protected $fillable=[
        'title','writer','list_id'
    ];

    public $timestamps=false;

    public function book_list(){
        return $this->belongsTo(book_list::class);
    }
}


