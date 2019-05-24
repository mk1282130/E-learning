@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
hr {
 height: 5px;
 background-color: gray;
 width: 60%;
 border: none;
}
</style>
<body>
    
    <div class="row">
        <div class="col-md-2" style="background-color: antiquewhite">.col-md-4</div>
        <div class="col-md-8 jumbotron text-center" style="background-color:aquamarine">
            <h1>Admin Users</h1>
                <p>
                Admin can make, edit, and delete lessons. <br>
                Only admin can add and delete another admin users.
                <p>
            

        </div>
        <div class="col-md-2" style="background-color:cadetblue">.col-md-4</div>
    </div>

</body>
</html>

@endsection
