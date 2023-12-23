<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable=[
        'name','publish_house','publish_date','author_id','available_quantity'
    ];

    public function authors(){
        return $this->belongsToMany(Author::class);
    }

    public function transcations(){
        return $this->hasMany(Transaction::class);
    }
}
