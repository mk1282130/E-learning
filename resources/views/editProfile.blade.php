@extends('layouts.app')

@section('css')
<!-- Styles -->
<link href="{{ asset('css/editProfile.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <h1>Edit Profile</h1>
            <br>
                <form action="/user/{{ $user->id }}/update" method="POST">
                @csrf
                    <div class="form-group">
                        <h2>First Name</h2>
                            <input class="form-control" type="text" name="first_name" value="{{ $user->first_name }}">
                        <h2 style="margin-top: 10px;">Last Name</h2>
                            <input class="form-control" type="text" name="last_name" value="{{ $user->last_name }}">
                        <h2 style="margin-top: 10px;">E-mail Address</h2>
                            <input class="form-control" type="text" name="email" value="{{ $user->email }}">
                        <h2 style="margin-top: 10px;">Password</h2>
                            <input class="form-control" type="text" name="password">
                    </div>
                    <br>
                    <input class="button" type="submit" value="Update">
                </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>

@endsection