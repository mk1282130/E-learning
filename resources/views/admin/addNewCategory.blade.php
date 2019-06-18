@extends('layouts.app')

@section('css')
<!-- Styles -->
<link href="{{ asset('css/addNewCategory.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form action="/category/addNewCategory/save" method="POST">
            @csrf
                    <h1 style="margin-bottom: 30px;">Create New Category</h1>
                    <div class="form-group has-error">
                        <h2>Title</h2>
                        <input class="form-control" type="text" name="title">
                    </div>
                    <div class="form-group has-error">
                        <h2>Description</h2>
                        <input class="form-control" type="text" name="description">
                    </div>
                    <input class="button" type="submit" value="Create">

            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>

@endsection