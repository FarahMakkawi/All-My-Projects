@extends('index')
@section('title','display_books_deleted')
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
        All Books Has Been Deleted
    </div>
   
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Book_Name</th>
                  <th scope="col">Deleted_at</th>
                  <th scope="col">Opreations</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    @forelse ($softBook as $softBook )
                    <th scope="row">{{$softBook->id}}</th>
                    <td>{{$softBook->name}}</td>
                    <td>{{$softBook->deleted_at}}</td>
                    <td>
                        <a href="{{route('softDeletBookRestor',$softBook->id)}}" class="btn btn-info">restor</a>
                        <a href="{{route('softDeletBookForcDelete',$softBook->id)}}" class="btn btn-danger">force_delete</a>
                    </td>    
                </tr>
                @empty
                <tr>
                    <td colspan="100">
                        <p>there are no any book deleted !</p>
                    </td>
                </tr>
                
                @endforelse
              
                
              </tbody>
            
          </table>
        




@endsection
