@extends('layouts.app')

@section('content')

<div class="row">
        <div class="col-sm-2" style="background-color: antiquewhite">.col-sm-4</div>
        <div class="col-sm-8" style="background-color:aquamarine">
            <h1>Category</h1>
                <div class ="text-center">
                    <button type="button" class="btn btn-outline-primary">
                        <a href="/category/addNewCategory">    
                            New Category
                        </a>
                    </button>
                    @foreach ($categories as $category)
                    <h3>{{ $category->title }}</h3>
                    <h4>{{ $category->description }}</h4>
                    <br>
                    @endforeach
                </div>
        </div>
    <div class="col-sm-2" style="background-color:cadetblue">.col-sm-4</div>
</div>

@endsection