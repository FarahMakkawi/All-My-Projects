<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable=[
        'borrowing_date','return_date','book_id','borrower_id'
    ];

    public function book(){
        return $this->belongsTo(Book::class);
    } 
    
    public function borrower(){
        return $this->belongsTo(Borrower::class);
    } 

} 
