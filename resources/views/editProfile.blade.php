@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-2" style="background-color: antiquewhite">.col-sm-4</div>
    <div class="col-sm-8 text-center" style="background-color:aquamarine">
        <h1>Edit Profile</h1>
        <br>
            <form action="/user/{{ $user->id }}/update" method="POST">
            @csrf
                <div class="textBox">
                    <h2>First Name</h2>
                        <input type="text" name="first_name" value="{{ $user->first_name }}">
                    <h2>Last Name</h2>
                        <input type="text" name="last_name" value="{{ $user->last_name }}">
                </div>
                <br>
                <input type="submit" value="update now">
            </form>
    </div>
    <div class="col-sm-2" style="background-color:cadetblue">.col-sm-4</div>
</div>

@endsection