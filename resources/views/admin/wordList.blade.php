@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <h1>Confirmation</h1>
        <h3>Words List</h3>
    
            <div class="list-group">
            <a class="list-group-item">
                <h4><strong>{{ $word->question }}</strong></h4>
            </a>
            
            @foreach($word->wordGetOption()->get() as $option)
                
                <a class="list-group-item"><h5>{{ $option->option }}</h5></a>

            @endforeach
      
    </div>
<div class="col-sm-3"></div>
</div>

@endsection