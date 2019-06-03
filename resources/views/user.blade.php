@extends('layouts.app')

@section('css')
<!-- Styles -->
<link href="{{ asset('css/user.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="row">
    <div class="col-sm-1" style="background-color:cadetblue">.col-sm-4</div>
    <div class="col-sm-3 text-center" style="background-color:lightgray ">.profile
        <div class="card m-0" style="width: 20rem;">
            <div class="card-body">
                <img src="/images/telegram.png" alt="icon" style="width:100px; height:100px;">
                <h1>{{ $user->name }}</h1>
                    @if(Auth::user()->id == $user->id)
                    <button type="button" class="btn btn-outline-secondary"><a href="/user/{{ $user->id }}/editProfile">Edit Profile</a></button>
                    @endif
                    <hr>
                    <p>follow followed</p>
                    <button type="button" class="btn btn-outline-secondary">Follow</button>
            </div>
        </div>
    </div>
    <div class="col-sm-7" style="background-color:aquamarine">.activities
        <div class="card border-success mb-3" style="max-width: 65rem;">
            <div class="card-header">Activity Log</div>
                <div class="card-body text-success">
                </div>
        </div>
    </div>
    <div class="col-sm-1" style="background-color:cadetblue">.col-sm-4</div>
</div>
<div class="row">
    <div class="col-sm-12" style="background-color:lightgreen">
        <footer class="footer-container text-center">
                <p class="float-right">
                    <a href="#">Back to Top</a>
                </p>
                <p>© All rights reserved.</p>
        </footer>
    </div>
</div>

@endsection
