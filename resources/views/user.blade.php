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
                <h1>{{ $user->first_name }} {{ $user->last_name }}</h1>
                    @if(Auth::user()->id == $user->id)
                    <button type="button" class="btn btn-outline-secondary"><a href="/user/{{ $user->id }}/editProfile">Edit Profile</a></button>
                    @endif
                    <hr>
                    <h2>following</h2>
                        <h3>{{ count( $user->following()->get() ) }}</h3>
                    <h2>followers</h2>
                        <h3>{{ count( $user->follower()->get() ) }}</h3>

                    @if(auth()->user()->following()->find($user->id) !== null)
                    <label><a href="/user/{{ $user->id }}/unfollow" role="button" class="btn btn-primary btn-sm float-right"><font size="4" color=""> unfollow </font></a></label>
                    @else
                    <label><a href="/user/{{ $user->id }}/follow" role="button" class="btn btn-primary btn-sm float-right"><font size="4" color=""> Follow </font></a><label>
                    @endif

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
