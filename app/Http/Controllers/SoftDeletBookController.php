<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class SoftDeletBookController extends Controller
{
    public function index(){
        $softBook=Book::onlyTrashed()->get();
        return view('BookVeiw.softDelet',compact('softBook'));
    }

    public function restor($id){
        Book::withTrashed()->where('id',$id)->restore();
       return redirect()->route('book.index')->with('success','Restore Successfully!');


    }

    public function forcDelete($id){
        Book::withTrashed()->where('id',$id)->forceDelete();
        return redirect()->route('book.index')->with('success','ForcDelete Successfully!');

    }

   

}
