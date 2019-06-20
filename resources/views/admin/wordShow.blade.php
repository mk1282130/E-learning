@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1><strong>{{ $category->title }}</strong></h1>
                <h4><strong>Words & Options</strong></h4>
                <button type="button" class="btn btn-primary"><a href="/category/{{ $category->id }}/word" class="text-white"><strong>Add New Words</strong></a></button>
                <br><br>
            </div>    
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="list-group">
                
                @foreach($words as $word)
                    <img src="uploads/word_image/{{ $word->image }}" alt="word_image" style="width: 150px;height: 150px;margin-top: 20px;margin-bottom: 20px;">
                    <label class="list-group-item active btn-light" style="margin-top: 20px;">
                        <h5><strong>{{ $word->question }}</strong></h5>
                    </label>

                    @foreach($word->wordGetOption()->get() as $option)
                        
                        <label class="list-group-item"><h5>{{ $option->option }}</h5></label>

                    @endforeach

                    <label><a href="/category/{{ $word->id }}/wordDelete">delete</a> | 
                    <a href="/category/{{ $word->id }}/wordEdit">edit</a></label>        
                @endforeach
                </div>
            </div>
        </div>
    </div>
<div class="col-sm-3"></div>

@endsection