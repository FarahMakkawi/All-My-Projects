<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Requests\StorBookRequest;
use App\Models\Author;
use App\Models\author_book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $book=Book::all();
        return view('BookVeiw.display',compact('book'));
    }

    public function create()
    {   $author=Author::all();
        return view('BookVeiw.create',compact('author'));
    }

  
    public function store(StorBookRequest $request)
    {
        $book=Book::create([
            'name'=>$request->name,
            'publish_house'=>$request->publish_house,
            'publish_date'=>$request->publish_date,
            'author_id'=>$request->author_id,
            'available_quantity'=>$request->available_quantity,
        ]);

        $book->authors()->sync($request->author_id);
        return redirect()->route('book.create')->with('success','Created Successfully!');
    }

    
    public function show($id)
    {  // book detils
         $book=Book::findorfail($id);
        return view('BookVeiw.detilsBook',compact('book'));
    }

    public function edit($id)
    {   $author=Author::all();
        $book=Book::findorfail($id);
        return view('BookVeiw.edit',compact('book','author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorBookRequest $request, $id)
    {
        $bookId=Book::findorfail($id);
        $bookId->update([
            'name'=>$request->name,
            'publish_house'=>$request->publish_house,
            'publish_date'=>$request->publish_date,
            'author_id'=>$request->author_id,
            'available_quantity'=>$request->available_quantity,
        ]);

        $bookId->authors()->sync($request->author_id);        

       return redirect()->route('book.index')->with('success','Updated Successfully!');

    }

   

    public function destroyAll(Request $request){
      $records=$request->input('selected');
      Book::destroy($records);
      return redirect()->route('book.index')->with('success','The Selected Records have been Deleted Successfully!');

    }

    
    // public function destroy($id)
    // { 
    //     $book=Book::findorfail($id);
    //     $book->delete();
    //    return redirect()->route('book.index')->with('success','Deleted Successfully!');

    // }
}
