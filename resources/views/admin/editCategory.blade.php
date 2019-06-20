@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-2" style="background-color: antiquewhite">.col-sm-4</div>
    <div class="col-sm-8 text-center" style="background-color:aquamarine">
        <form action="/category/{{ $category->id }}/update" method="POST">
        @csrf
            <h2>Title</h2>
                <input type="text" name="title" value="{{ $category->title }}">
            <h2>Description</h2>
                <input type="text" name="description" value="{{ $category->description }}">
            <br><br>
            <input type="submit" value="Send">
        </form>
    </div>
    <div class="col-sm-2" style="background-color:cadetblue">.col-sm-4</div>
</div>

@endsection