@extends('layouts.app')

@section('css')
<!-- Styles -->
<link href="{{ asset('css/editCategory.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form action="/category/{{ $category->id }}/update" method="POST">
            @csrf
            <h1 style="margin-bottom: 15px;">Edit Category</h1>
                <h2>Title</h2>
                    <input class="form-control" type="text" name="title" value="{{ $category->title }}">
                <h2 style="margin-top: 10px;">Description</h2>
                    <input class="form-control" type="text" name="description" value="{{ $category->description }}">
                <br>
                <input class="button" type="submit" value="Update">
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
@endsection