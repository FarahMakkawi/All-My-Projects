<?php

namespace App\Http\Controllers;

use App\Models\author_book;
use Illuminate\Http\Request;

class AuthorBookController extends Controller
{
    public function index(){
        $author_book=author_book::all();
        return view('author_book.display_author_book',compact('author_book'));
    }
}
