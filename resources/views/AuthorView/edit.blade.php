@extends('index')
@section('title','edit_author')
@section('content')
<div class="container">
    <div class="row">
    <div class="card mb-5">
    <div class="card-body">
          <h5 class="text-center">Edit Author</h5>
       <form class="row g-3" method="post" action="{{route('author.update',$author->id)}}">
            @csrf
            <div class="col-12">
              <label for="inputNanme4" class="form-label"><b>Name</b> </label>
              <input type="text" class="form-control" id="inputNanme4" name="name" value="{{old('name',$author->name)}}"  class="@error('name') is-invalid @enderror">
              @error('name')
                 <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            
            
            <br>
            <div class="col-12">
              <label for="inputPassword4" class="form-label"><b>Gender</b></label>
              <select class="form-select" aria-label="Default select example" name="gender" class="@error('gender') is-invalid @enderror">
              <option value="0" {{$author->gender==0?'selected':''}}>Male</option>
              <option value="1" {{$author->gender==1?'selected':''}}>Female</option>
              </select>
             
            </div>
            <br>

            <div class="col-12">
                <label for="inputNanme4" class="form-label"><b>Birth_Date</b> </label>
                <input type="date" class="form-control" id="inputNanme4" name="birth_date" value="{{old('birth_date',$author->birth_date)}}"  class="@error('birth_date') is-invalid @enderror">
                @error('birth_date')
                   <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>

              <br>


              <div class="col-12">
                <label for="inputPassword4" class="form-label"><b>Book_Name</b></label>
                <select class="form-select" aria-label="Default select example" name="book_id" id="inputPassword4" onchange="goToUrl(this)" class="@error('publish_date') is-invalid @enderror"  >
                  @foreach ($book as $book)
                    <option value="{{$book->id}}" {{$book->id == $author->book_id ? 'selected':''}}>{{$author->name}}</option>
                  @endforeach
                  <option value="redirect" class="blue-underline">Add New Author &rarr;</option>
                 
                </select>
                @error('publish_date')
                   <div class="text-danger">{{ $message }}</div>
                @enderror
                </div>

            <div class="text-center">
              <button type="submit" class="btn btn-info">Save</button>
            </div>
          </form>





@endsection