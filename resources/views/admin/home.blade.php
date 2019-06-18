@extends('layouts.app')

@section('css')
<!-- Styles -->
<link href="{{ asset('css/home.css') }}" rel="stylesheet">

<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('content') 
    <div class="row">
        <div class="col-md-3"></div>
            <div class="col-md-6">
                <h1 class="text-center">Admin Users</h1>
                    <p class="text-center">
                    Admin can make, edit, and delete lessons. <br>
                    Only admin can add and delete another admin users.
                    </p>
                    <div class ="text-center">
                        <button class="btn btn-default text-muted" style="margin-bottom: 20px; background-color:#e6e6e6;">
                            <a href="admin/addAdmin">    
                                New Admin
                            </a>
                        </button>
                    </div>
                    @foreach($users as $user)
                    <div class="row list-group">
                        <div class="shadow p-10 mb-3 bg-white rounded text-muted" style="margin-bottom:10px;margin-bottom: 10px;height: 80px;">
                            <p class="float-right" style="margin-top: 25px;margin-right: 20px;margin-left: 20px;margin-bottom: 20px;">
                                <font size="4"><a href="user/{{ $user->id }}/editProfile"><button class="btn" style="padding-top: 9px;padding-bottom: 9px;padding-left: 12px;"><i class="fa fa-pencil"></i></button></a>
                                <a href="user/{{ $user->id }}/delete"><button class="btn" style="padding-top: 9px;padding-bottom: 9px;padding-left: 12px;"><i class="fa fa-close"></i></button></a></font>
                            </p>
                            <h3 style="padding-top: 25px;padding-left: 20px;padding-bottom: 20px;padding-right: 20px;">
                                {{ $user->first_name }} {{ $user->last_name }}
                            </h3>
                        </div>
                    </div>
                    @endforeach
            </div>
        <div class="col-md-3"></div>
    </div>

@endsection