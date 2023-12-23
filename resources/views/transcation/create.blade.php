@extends('index')
@section('title','create_transcation')
@section('content')
<div class="container">
    <div class="row">
    <div class="card mb-5">
    <div class="card-body">
          <h5 class="text-center">Add New transcation</h5>
       <form class="row g-3" method="post" action="{{route('transaction.store')}}">
            @csrf
            <div class="col-12">
              <label for="inputNanme4" class="form-label"><b>Borrowing Date</b> </label>
              <input type="date" class="form-control" id="inputNanme4" name="borrowing_date" value="{{old('borrowing_date')}}"  class="@error('borrowing_date') is-invalid @enderror">
              @error('borrowing_date')
                 <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            
            
            <br>
            <div class="col-12">
              <label for="inputPassword4" class="form-label"><b>Return Date</b></label>
              <input type="date" class="form-control" id="inputPassword4" name="return_date"  value="{{old('return_date')}}" class="@error('return_date') is-invalid @enderror">
              @error('return_date')
                 <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <br>

            <div class="col-12">
                <label for="inputPassword4" class="form-label"><b>Book Name</b></label>
                <select multiple class="form-select" aria-label="Default select example" name="book_id" id="inputPassword4"  class="@error('book_id') is-invalid @enderror"  >
                  @foreach ($book as $book)
                    <option value="{{$book->id}}">{{$book->name}}</option>
                  @endforeach
                </select>
                @error('book_id')
                   <div class="text-danger">{{ $message }}</div>
                @enderror
                </div>
                <br>

                <div class="col-12">
                    <label for="inputPassword4" class="form-label"><b>Borrower Name</b></label>
                    <select multiple class="form-select" aria-label="Default select example" name="borrower_id" id="inputPassword4"  class="@error('borrower_id') is-invalid @enderror"  >
                      @foreach ($borrower as $borrower)
                        <option value="{{$borrower->id}}">{{$borrower->name}}</option>
                      @endforeach
                    </select>
                    @error('borrower_id')
                       <div class="text-danger">{{ $message }}</div>
                    @enderror
                    </div>

            

            <div class="text-center">
              <button type="submit" class="btn btn-info">Add</button>
              <button type="reset" class="btn btn-light">Reset</button>
            </div>
          </form>





@endsection