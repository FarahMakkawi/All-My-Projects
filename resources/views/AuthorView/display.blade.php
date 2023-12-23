@extends('index')
@section('title','display_Authors')
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
        All Authors
    </div>
   
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Author_Name</th>
                  <th scope="col">Gender</th>
                  <th scope="col">Birth_Date</th>
                  <th scope="col">Book_Name</th>
                  <th scope="col">Opreations</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    @forelse ($author as $author )
                    <th scope="row">{{$author->id}}</th>
                    <td>{{$author->name}}</td>
                    <td>{{$author->gender}}</td>
                    <td>{{$author->birth_date}}</td>
                    <td>{{$author->books()->first()->name}}</td>
                    <td>
                        <a href="{{route('author.edit',$author->id)}}" class="btn btn-info">update</a>
                        <a href="{{route('author.destroy',$author->id)}}" class="btn btn-danger">delete</a>
                    </td>    
                </tr>
                @empty
                <tr>
                    <td colspan="100">
                      <p>there are no any author !</p>
                    </td>
                </tr>
        
        @endforelse
              
                
              </tbody>
            
          </table>
          <div class="my-3" >
              
              <a href="{{route('author.create')}}" class="btn btn-warning">Add Author &rarr;</a>
        </div>

        <div class="my-3" >
              
            <a href="#" class="btn btn-success btn-sm">View Author Has Deleted &rarr;</a>
      </div>






@endsection
