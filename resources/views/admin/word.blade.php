@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <h1 style="margin-bottom: 30px;">Add New Words </h1>
                <form action="/category/{{ $category->id }}/save" method="POST">
                @csrf
                    <h3>Question</h3>
                        <input class="form-control" type="text" name="question">
                    <h3 style="margin-top: 15px;">Options</h3>
                        <div><label>〇</label><input class="form-control pull-right" type="text" name="option_1"><br></div>
                        <label>×</label><input class="form-control" type="text" name="option_2"><br>
                        <label>×</label><input class="form-control" type="text" name="option_3"><br>
                    <input type="submit" value="create">
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
@endsection