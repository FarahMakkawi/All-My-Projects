@extends('index')
@section('title','display_books')
@section('content')
<div class="container">
    <div class="row">
    <div class="card mb-5">
    <div class="card-body">

        @if(session('success'))
        <div class="alert alert-success" >
            {{session('success')}} 
        </div>
        @endif

    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        All Books
    </div>
   
    <form method="post" action="{{route('destroyAll')}}">
      @csrf
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Book_Name</th>
                  <th scope="col">Publish_house</th>
                  <th scope="col">Publish_date</th>
                  <th scope="col">Author_name</th>
                  <th scope="col">Available_Quantity</th>
                  <th scope="col" >Opreations</th>
                  <th scope="col" >Delete</th>

                 

                </tr>
              </thead>
              <tbody>
                <tr>
                    @forelse ($book as $book )
                    <th scope="row">{{$book->id}}</th>
                    <td>{{$book->name}}</td>
                    <td>{{$book->publish_house}}</td>
                    <td>{{$book->publish_date}}</td>
                    <td>{{$book->authors()->first()->name}}</td>
                    <td>{{$book->available_quantity}}</td>
                    
                    <td>
                        <a href="{{route('book.edit',$book->id)}}" class="btn btn-info">update</a>
                        <a href="{{route('book.show',$book->id)}}" class="btn btn-success">details</a>
                    </td>    
                    <td scope="col">
                        <input type="checkbox" name="selected[]" value="{{$book->id}}">
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="100">
                        <p>there are no any book !</p>
                    </td>
                </tr>
                
                @endforelse
              
                
              </tbody>
            </table>
            
<div class="my-3" >
  <button type="submit" class="btn btn-danger btn-sm">Delete the Selected</button>

  <a href="{{route('softDeletBookIndex')}}" class="btn btn-success btn-sm">View Book Has Deleted </a>
   
</div>

</form>


<div class="my-3" >
<a href="{{route('book.create')}}" class="btn btn-warning">Add Book &rarr;</a>
</div>

@endsection
