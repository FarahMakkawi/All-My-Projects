<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class author_book extends Model
{
    use HasFactory;
    
    public $table='author_book';
    protected $fillable=['book_id','author_id'];
}
