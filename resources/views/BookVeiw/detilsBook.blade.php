@extends('index')
@section('title','Book Detils')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
        <div class="card mb-5">
        <div class="card-body">
    
        <h1>Details</h1>
        <div class="row">
            <div class="col-md-4">
                <img src="{{asset('front/assets/images/Book.jpg')}}" class="img-fluid" alt="صورة الكتاب">
            </div>
            <div class="col-md-8">
                <h2>Title : {{$book->name}}</h2>
                <p> Publishing House : <span class="badge badge-info">{{$book->publish_house}} </span></p>
                <p> Publishing Date : <span class="badge badge-secondary">{{$book->publish_date}} </span></p>
                <p>Author of this book : <span class="badge badge-success"> {{$book->authors()->first()->name}}</span></p>
                <p> Price : <span class="badge badge-warning"> $200.0 </span></p>
                <div class="my-5 mt-5" >
                    <a href="{{route('book.index')}}" class="btn btn-secondary"> Back </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

@endsection