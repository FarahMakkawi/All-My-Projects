<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $fillable=[
        'name','gender','birth_date','book_id'
    ];

    public function books(){
        return $this->belongsToMany(Book::class);
    }
}
