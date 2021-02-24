<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Book;

class book_list extends Model
{
    use HasFactory;

    protected $fillable=[
        'title','description','user_id'
    ];

    public $timestamps=false;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function books(){
        return $this->hasMany(Book::class);
    }
}

?>
