@extends('index')
@section('title','display_borrower')
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
        All Borrowers
    </div>
   
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Borrower_Name</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Opreations</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    @forelse ($borrower as $borrower )
                    <th scope="row">{{$borrower->id}}</th>
                    <td>{{$borrower->name}}</td>
                    <td>{{$borrower->phone}}</td>
                    <td>
                        <a href="{{route('borrower.edit',$borrower->id)}}" class="btn btn-info">update</a>
                        <a href="{{route('borrower.destroy',$borrower->id)}}" class="btn btn-danger">delete</a>
                    </td>    
                </tr>
                @empty
                <tr>
                    <td colspan="100">
                      <p>there are no any borrower !</p>
                    </td>
                </tr>
        
        @endforelse
              
                
              </tbody>
            
          </table>
          <div class="my-3" >
              
              <a href="{{route('borrower.create')}}" class="btn btn-warning">Add Borrower &rarr;</a>
        </div>

        
        <div class="my-3" >
              
            <a href="#" class="btn btn-success btn-sm">View Borrower Has Deleted &rarr;</a>
      </div>






@endsection
