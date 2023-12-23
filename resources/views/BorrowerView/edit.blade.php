@extends('index')
@section('title','edit_borrower')
@section('content')
<div class="container">
    <div class="row">
    <div class="card mb-5">
    <div class="card-body">
          <h5 class="text-center">Edit Borrower</h5>
       <form class="row g-3" method="post" action="{{route('borrower.update',$borrower->id)}}">
            @csrf
            @method('PUT')
            <div class="col-12">
              <label for="inputNanme4" class="form-label"><b>Name</b> </label>
              <input type="text" class="form-control" id="inputNanme4" name="name" value="{{old('name',$borrower->name)}}"  class="@error('name') is-invalid @enderror">
              @error('name')
                 <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            
            
            <br>
            <div class="col-12">
              <label for="inputPassword4" class="form-label"><b>Phone</b></label>
              <input type="text" class="form-control" id="inputPassword4" name="phone"  value="{{old('phone',$borrower->phone)}}" class="@error('phone') is-invalid @enderror">
              @error('phone')
                 <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <br>

            <div class="text-center">
              <button type="submit" class="btn btn-info">Save</button>
            </div>
          </form>





@endsection