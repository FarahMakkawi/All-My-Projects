@extends('index')
@section('title','Edit_book')
@section('content')
<div class="container">
    <div class="row">
    <div class="card mb-5">
    <div class="card-body">
          <h5 class="text-center"> Edit Book </h5>
       <form class="row g-3" method="post" action="{{route('book.update',$book->id)}}">
            @method('put')
            @csrf
            <div class="col-12">
              <label for="inputNanme4" class="form-label"><b>Name</b> </label>
              <input type="text" class="form-control" id="inputNanme4" name="name" value="{{old('name',$book->name)}}"  class="@error('name') is-invalid @enderror">
              @error('name')
                 <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            
            
            <br>
            <div class="col-12">
              <label for="inputPassword4" class="form-label"><b>Publish_House</b></label>
              <input type="text" class="form-control" id="inputPassword4" name="publish_house"  value="{{old('publish_house',$book->publish_house)}}" class="@error('publish_house') is-invalid @enderror">
              @error('publish_house')
                 <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <br>

            <div class="col-12">
              <label for="inputPassword4" class="form-label"><b>Publish_Date</b></label>
              <input type="date" class="form-control" id="inputPassword4" name="publish_date"  value="{{old('publish_date',$book->publish_date)}}" class="@error('publish_date') is-invalid @enderror">
              @error('publish_date')
                 <div class="text-danger">{{ $message }}</div>
              @enderror
              </div>

              <br>
              <div class="col-12">
                <label for="inputPassword4" class="form-label"><b>Author_Name</b></label>
                <select class="form-select" aria-label="Default select example" name="author_id" id="inputPassword4" onchange="goToUrl(this)" class="@error('author_id') is-invalid @enderror"  >
                  @foreach ($author as $author)
                    <option value="{{$author->id}}" {{$author->id == $book->author_id ? 'selected':''}}>{{$author->name}}</option>
                  @endforeach
                  <option value="redirect" class="blue-underline">Add New Author &rarr;</option>
                 
                </select>
                @error('author_id')
                   <div class="text-danger">{{ $message }}</div>
                @enderror
                </div>

                <br>

            
                <div class="col-12">
                  <label for="inputNanme4" class="form-label"><b>Available_quantity</b> </label>
                  <input type="text" class="form-control" id="inputNanme4" name="available_quantity" value="{{old('available_quantity',$book->available_quantity)}}"  class="@error('available_quantity') is-invalid @enderror">
                  @error('available_quantity')
                     <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>

            <div class="text-center">
              <button type="submit" class="btn btn-info">Save</button>
            
            </div>
          </form>





@endsection