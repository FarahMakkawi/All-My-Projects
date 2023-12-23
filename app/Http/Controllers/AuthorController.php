<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorAuthorRequest;
use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $author=Author::all();
        return view('AuthorView.display',compact('author'));
    }

    public function create()
    {   $book=Book::all();
        return view('AuthorView.create',compact('book'));
    }

    public function store(StorAuthorRequest $request)
    {
        $author=Author::create([
            'name'=>$request->name,
            'birth_date'=>$request->birth_date,
            'gender'=>$request->gender,
            'book_id'=>$request->book_id
            
            
        ]);
        $author->books()->sync($request->book_id);
        return redirect()->route('author.create')->with('success','Created Successfully!');

    }

   
    public function show(Author $author)
    {
        //
    }

  
    public function edit($id)
    {   $book=Book::all();
        $author=Author::findorfail($id);
        return view('AuthorView.edit',compact('author','book'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorAuthorRequest $request,$id)
    {
        $author=Author::findorfail($id);
        $author->ubdate([
            'name'=>$request->name,
            'birth_date'=>$request->birth_date,
            'gender'=>$request->gender,
            'book_id'=>$request->book_id
        ]);
    
        $author->books()->sync($request->book_id);
        return redirect()->route('author.index')->with('success','Updated Successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $author=Author::findorfail($id);
        $author->delete();
        return redirect()->route('author.index')->with('success','Deleted Successfully!');

    }
}
