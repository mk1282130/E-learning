@extends('layouts.app')

@section('css')
<!-- Styles -->
<link href="{{ asset('css/ProfileImageUpload.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6 text-center">
        <form action="update_avatar" method="POST" enctype="multipart/form-data">
        @csrf
            <h1><strong>Word Image</strong></h1>
            <div class="card">
                <div class="card-body">
                    <img src="/uploads/word_image/{{ $word->image }}" style="width: 150px;height: 150px;margin-top: 20px;margin-bottom: 20px;" alt="image">
                        <br><br>
                    <input type="file" name="avatar">
                        <br>
                    <input class="button" type="submit" value="Upload" style="margin-top: 25px;">
                </div>
            </div>
    </div>
    <div class="col-sm-3"></div>
    
@endsection