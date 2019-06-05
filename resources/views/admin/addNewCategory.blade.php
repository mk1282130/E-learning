@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-2" style="background-color: antiquewhite">.col-sm-4</div>
    <div class="col-sm-8 text-center" style="background-color:aquamarine">
        <form action="/category/addNewCategory/save" method="POST">
        @csrf
            <h2>Title</h2>
                <input type="text" name="title">
            <h2>Description</h2>
                <input type="text" name="description">
            <br><br>
            <input type="submit" value="Send">
        </form>
    </div>
    <div class="col-sm-2" style="background-color:cadetblue">.col-sm-4</div>
</div>

@endsection