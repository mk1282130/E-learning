@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-2" style="background-color: antiquewhite">.col-sm-4</div>
    <div class="col-sm-8 text-center" style="background-color:aquamarine">
        <h1>Words in <strong>{{ $category->title }}</strong> </h1>
        <div class="">
            <label role="button" class="btn btn-primary btn-sm"><font size="4" color="">Create New Words</font></label>
        </div>
    </div>
    <div class="col-sm-2" style="background-color:cadetblue">.col-sm-4</div>
</div>

@endsection