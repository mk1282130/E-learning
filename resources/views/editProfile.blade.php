@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-2" style="background-color: antiquewhite">.col-sm-4</div>
    <div class="col-sm-8 text-center" style="background-color:aquamarine">
        <h2>Edit Profile</h2>
            <form action="/user/{{ $user->id }}/update" method="POST">
            @csrf
                <p>Name</p>
                <div class="textBox">
                    <input type="text" name="name" value="{{ $user->name }}">
                </div>
                <br>
                <input type="submit" value="update now">
            </form>
    </div>
    <div class="col-sm-2" style="background-color:cadetblue">.col-sm-4</div>
</div>

@endsection