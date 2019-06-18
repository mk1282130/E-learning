@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <h1>Words List</h1>
        
            <h4>{{ $word->question }}</h4>

            @foreach($word->wordGetOption()->get() as $option)
                
                <h5>{{ $option->option }}</h5>

            @endforeach
            
    </div>
<div class="col-sm-3"></div>
</div>

@endsection