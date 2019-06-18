@extends('layouts.app')

<!-- Styles -->
<link href="{{ asset('css/lesson.css') }}" rel="stylesheet">

@section('content')

<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <h1><strong>Excercise</strong></h1>
            <div class="row">
                <div class="col-sm-6"></div>
                <div class="col-sm-6">

                        <h3 style="margin-bottom: 30px;margin-top: 10px;">{{ $word->question }}</h3>
                        
                        @foreach($options as $option)
                                          
                            <a href="{{ route('lesson_store', ['lesson_id' => $lesson->id, 'option_id' => $option->id, 'index' => $index ]) }}">
                                <button type="radio" class="btn btn-primary btn-lg btn-block" value="option1" style="margin-top: 10px;margin-bottom: 10px;">
                                {{ $option->option }}
                                </button>
                            </a>

                        @endforeach

                </div>
            </div>
    </div>
    <div class="col-sm-2"></div>
</div>    

@endsection