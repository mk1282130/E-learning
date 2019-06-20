@extends('layouts.app')

@section('css')
<!-- Styles -->
<link href="{{ asset('css/user.css') }}" rel="stylesheet">
@endsection

@section('content')
<div>
<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-3 text-center" style="padding-left: 10px;padding-right: 10px;">
        <div class="card m-0" style="width: 100%;">
            <div class="card-body">
                <a href="/user/{{ $user->id }}/profileImage">
                    <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px;margin-top: 10px;margin-bottom: 10px;" alt="image">
                </a>
                <h1 style="margin-top: 20px;margin-bottom: 20px;">{{ $user->first_name }} {{ $user->last_name }}</h1>
                    @if(Auth::user()->id == $user->id)
                    <button type="button" class="btn btn-outline-secondary"><a href="/user/{{ $user->id }}/editProfile">Edit Profile</a></button>
                    @endif
                    <hr>

                    <h2>following</h2>
                        <h3><a href="/user/{{ $user->id }}/following">{{ count( $user->following()->get() ) }}</a></h3>
                    <h2>followers</h2>
                        <h3><a href="/user/{{ $user->id }}/followers">{{ count( $user->follower()->get() ) }}</a></h3>
                    <h2 class=""><strong>Learned</strong></h2>
                        <h3><a>{{ count( $user->follower()->get() ) }}</a></h3>

                    @if(Auth::user()->id == $user->id)
                        @else
                            @if(auth()->user()->following()->find($user->id) !== null)
                            <label><a href="/user/{{ $user->id }}/unfollow" role="button" style="margin-top: 15px;margin-bottom: 5px;" class="btn btn-primary btn-sm float-right"><font size="4" color="" style="padding-left: 10px;padding-right: 10px;"> unfollow </font></a></label>
                            @else
                            <label><a href="/user/{{ $user->id }}/follow" role="button" style="margin-top: 15px;margin-bottom: 5px;" class="btn btn-primary btn-sm float-right"><font size="4" color="" style="padding-left: 10px;padding-right: 10px;"> Follow </font></a><label>
                            @endif
                    @endif
            </div>
        </div>
    </div>
    <div class="col-sm-7" style="padding-left: 5px;padding-right: 5px;">
        <div class="card mb-3" style="max-width: 65rem;">
            <div class="card-header">Activity Log</div>
                <div class="card-body text-success">

                    @if(auth()->user()->following()->find($user->id) !== null)
                        
                    @else
                        @if(auth()->user()->id !== $user->id)
                            You are not following this user!
                        @else
                            * Nothing to show. This is your own page. *
                        @endif
                    @endif
                </div>
        </div>
    </div>
    <div class="col-sm-1"></div>
</div>
<!-- <div class="row">
    <div class="col-sm-12" style="background-color:#ffff85;height:80px;text-center">
        <footer class="footer-container text-center">
                <p class="float-right">
                    <a href="#">Back to Top</a>
                </p>
                <p style="">© All rights reserved.</p>
        </footer>
    </div>
</div> -->

@endsection
