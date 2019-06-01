@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-2" style="background-color: antiquewhite">.col-sm-4</div>
    <div class="col-sm-8 text-center" style="background-color:aquamarine">
        <h1>New Admin</h1>
        <form action="/admin/addAdmin/save" method="POST">
        @csrf
            <h2>Name</h2>
                <input type="text" name="name">
            <h2>Password</h2>
                <input type="password" name="password">
            <h2>Email</h2>
                <input type="text" name="email">
            <br><br>
            <input type="submit" value=Register>
        </form>
    </div>
    <div class="col-sm-2" style="background-color:cadetblue">.col-sm-4</div>
</div>

@endsection