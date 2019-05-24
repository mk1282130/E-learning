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
    @foreach($users as $user)
    <div class="row">
        <div class="col-sm-1" style="background-color:cadetblue">.col-sm-4</div>
        <div class="col-sm-3 text-center" style="background-color:aquamarine ">.profile
            <div class="card" style="width: 20rem;">
            <img class="card-img-top" src="..." alt="image">
            <div class="card-body">
            {{ $user->last_name }} {{ $user->first_name }}
                <h4>Last_name First_name</h4>
                <button type="button" class="btn btn-outline-secondary">Edit Profile</button>
                <hr>
                <p>follow followed</p>
                <button type="button" class="btn btn-outline-secondary">Follow</button>
            </div>
            </div>
        </div>
        <div class="col-sm-7" style="background-color:aquamarine">.activities
            <div class="card border-success mb-3" style="max-width: 65rem;">
                <div class="card-header">Activity Log</div>
                    <div class="card-body text-success">
                    </div>
            </div>
        </div>
        <div class="col-sm-1" style="background-color:cadetblue">.col-sm-4</div>
    </div>
    @endforeach
    <div class="row">
        <div class="col-sm-1" style="background-color: antiquewhite">.col-sm-4</div>
            <div class="col-sm-10" style="background-color:aquamarine">
                <footer class="footer-container text-center">
                        <p class="float-right">
                            <a href="#">Back to Top</a>
                        </p>
                        <p>© All rights reserved.</p>
                </footer>
            </div>
        <div class="col-sm-1" style="background-color: antiquewhite">.col-sm-4</div>
    </div>

</body>
</html>

@endsection
