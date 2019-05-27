@extends('layouts.app')

@section('css')
<!-- Styles -->
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection

@section('content') 
    <div class="row">
        <div class="col-md-2" style="background-color: antiquewhite">.col-md-4</div>
            <div class="col-md-8" style="background-color:aquamarine">
                <h1 class="text-center">Admin Users</h1>
                    <p class="text-center">
                    Admin can make, edit, and delete lessons. <br>
                    Only admin can add and delete another admin users.
                    </p>
                    <div class="row">
                        <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <hr>
                            </div>
                        <div class="col-md-2"></div>
                    </div>
                    @foreach($users as $user)
                    <div class="row">
                        <div class="col-md-2"></div>
                            <div class="col-md-8">
                                    <p class="float-right">
                                        <a href="http://">edit</a> | <a href="http://"><label>delete</label></a>
                                    </p>
                                    <h4>{{ $user->name }}</h4>
                                <hr>
                            </div>
                        <div class="col-md-2"></div>
                    </div>
                    @endforeach
            </div>
        <div class="col-md-2" style="background-color:cadetblue">.col-md-4</div>
    </div>

@endsection
