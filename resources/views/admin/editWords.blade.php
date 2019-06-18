@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <h1>Edit Words</h1>
    
            <form action="/word/{{ $word->id }}/update" method="POST">
            @csrf
                    <h2>Question</h2>
                    <input class="form-control" type="text" name="question" value="{{ $word->question }}">

                    <h2>Options</h2>
                    @foreach($options as $option)
                        @if($word->id == $option->word_id)
                            <input class="form-control" type="text" name="option" value="{{ $option->option }}">
                        @endif
                    @endforeach
                    
                    <br>
                    <input class="button" type="submit" value="Update">

        </div>
<div class="col-sm-3"></div>

@endsection