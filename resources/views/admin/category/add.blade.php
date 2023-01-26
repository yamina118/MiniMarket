@extends('layouts.admin')
@section('title','categories')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Add Category
    </h1>
    <form action="{{ url('insert-category') }}" method="POST">
        <div class=col-md-6>
            <label for="">Name</label>
            <input type="text" class="form-control" name="name">
        </div>
</body>
</html>

@endsection