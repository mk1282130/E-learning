@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-3 text-center"></div>
    <div class="col-sm-6">

    <h1>{{ $user->first_name }} {{ $user->last_name }} 's followers</h1>

        @foreach($followers as $follower)
        <div class="list-group-item mb-3">
                <a href="/user/{{ $user->id }}/home">
                <div class="row">
                    <div class="col-sm-4">   
                        <img src="/images/avatars/default.jpg" alt="icon" style="width: 100px;height: 100px;margin-left: 3px;margin-top: 3px;margin-bottom: 3px;">
                    </div>  
                    <div class="col-sm-7">         
                        <a href="/user/{id}/profile"><h2 style="margin-left: 25px;align-items-center;margin-top: 20px;">{{ $follower->first_name }} {{ $follower->last_name }}</h2></a>
                    </div>  
                    <div class="col-sm-2" style="align-items-center;margin-top: 20px;">     
                        @if(Auth::user()->id == $follower->id)
                            @elseif(auth()->user()->follower()->find($follower->id) !== null)
                            <a href="/user/{{ $follower->id }}/unfollow" role="button" name="" class="btn btn-primary btn-sm"><font size="4"> unfollow </font></a>
                            @else
                            <a href="/user/{{ $follower->id }}/follow" role="button" name="" class="btn btn-primary btn-sm"><font size="4"> Follow </font></a>
                        @endif
                    </div>
                </div>     
        </div>
        @endforeach

    </div>
    <div class="col-sm-3 text-center"></div>
</div>

@endsection