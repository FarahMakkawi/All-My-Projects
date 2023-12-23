@extends('index')
@section('title','All transcation')
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
        All Transcations
    </div>
   
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Borrowing Date</th>
                  <th scope="col">Return Date</th>
                  <th scope="col">Book Name</th>
                  <th scope="col">Borrower Name</th>
                  <th scope="col">Opreations</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    @forelse ($tranc as $tranc )
                    <th scope="row">{{$tranc->id}}</th>
                    <td>{{$tranc->borrowing_date}}</td>
                    <td>{{$tranc->return_date}}</td>
                    <td>{{$tranc->book()->first()->name}}</td>
                    <td>{{$tranc->borrower()->first()->name}}</td>

                    <td>
                        <a href="{{route('transaction.edit',$tranc->id)}}" class="btn btn-info">update</a>
                        <a href="{{route('transaction.destroy',$tranc->id)}}" class="btn btn-danger">delete</a>
                    </td>    
                </tr>
                @empty
                <tr>
                    <td colspan="100">
                      <p>there are no any transcation !</p>
                    </td>
                </tr>
        
        @endforelse
              
                
              </tbody>
            
          </table>
          <div class="my-3" >
              
              <a href="{{route('transaction.create')}}" class="btn btn-warning">Add transcation &rarr;</a>
        </div>

   
           






@endsection
