@extends('layouts.app')

@section('content')

<div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <h1 class="text-center">Category</h1>
                <div class ="text-center">
                    @if((auth()->user()->is_admin==1))
                        <button type="button" class="btn btn-outline-primary" style="margin: 20px;">
                            <a href="/category/addNewCategory">    
                                New Category
                            </a>
                        </button>
                    @else
                        <br>
                    @endif
                    <div class="row object-list">
                        @foreach ($categories as $category)
                        <div class="col-sm-4" style="padding-bottom: 20px;;padding-right: 5px;padding-left: 5px;">
                            <div class="card" style="width: 100%">
                                <img class="card-img-top" src="/images/image.png" alt="Card image">
                                    <div class="card-body" style="margin-bottom:10px;">

                                        @if((auth()->user()->is_admin==1))
                                        <h2><a href="/category/{{ $category->id }}/showWords">{{ $category->title }}</a></h2>
                                        @else
                                        <h2>{{ $category->title }}</h2>
                                        @endif

                                        <h5 class="card-text">{{ $category->description }}</h5>
                                    
                                        @if((auth()->user()->is_admin==1))
                                            <a href="/category/{{ $category->id }}/edit" class="btn btn-success" style="margin-top: 5px;margin-left: 1px;margin-bottom: 5px;margin-right: 1px;">Edit</a>
                                            <a href="/category/{{ $category->id }}/delete" class="btn btn-success">Delete</a>
                                        @else
                                            <a href="/category/category_id={{$category->id}}/lesson" class="btn btn-primary"><strong>Lesson Now</strong></a>
                                        @endif

                                        @if((auth()->user()->is_admin==1))
                                            <a href="/category/category_id={{$category->id}}/lesson" class="btn btn-primary"><strong>Lesson Now</strong></a>
                                        @endif

                                    </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
        </div>
    <div class="col-sm-2"></div>
</div>

@endsection