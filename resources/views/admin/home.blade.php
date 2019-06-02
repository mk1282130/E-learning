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
                    <div class ="text-center">
                        <button type="button" class="btn btn-outline-primary">
                            <a href="admin/addAdmin">    
                                New Admin
                            </a>
                        </button>
                    </div>
                    <div class="row">
                        <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <hr>
                            </div>
                        <div class="col-md-3"></div>
                    </div>
                    @foreach($users as $user)
                    <div class="row">
                        <div class="col-md-3"></div>
                            <div class="col-md-6">
                                    <p class="float-right">
                                        <a href="http://">edit</a> | <a href="user/{{ $user->id }}/delete"><label>delete</label></a>
                                    </p>
                                    <h4>{{ $user->first_name }} {{ $user->last_name }}</h4>
                                <hr>
                            </div>
                        <div class="col-md-3"></div>
                    </div>
                    @endforeach
            </div>
        <div class="col-md-2" style="background-color:cadetblue">.col-md-4</div>
    </div>

@endsection
