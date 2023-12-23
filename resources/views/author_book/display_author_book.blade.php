@extends('index')
@section('title','display_relation')
@section('content')
<div class="container">
    <div class="row">
    <div class="card mb-5">
    <div class="card-body">

    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Relation between author & book
    </div>
   
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Book_ID</th>
                  <th scope="col">Author_ID</th>
                
                </tr>
              </thead>
              <tbody>
                <tr>
                    @forelse ($author_book as $author_book )
                    <th scope="row">{{$author_book->id}}</th>
                    <td scope="row">{{$author_book->book_id}}</td>
                    <td scope="row">{{$author_book->author_id}}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="100">
                        <p>there are no relations !</p>
                    </td>
                </tr>
                
                @endforelse
              
                
              </tbody>
            
          </table>
  
@endsection
