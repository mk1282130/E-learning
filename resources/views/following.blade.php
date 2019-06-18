@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-3 text-center"></div>
    <div class="col-sm-6">
    
    <h1>{{ $user->first_name }} {{ $user->last_name }} 's following</h1>
    
    @foreach($followings as $following)
        <div class="list-group-item mb-3">
            <div class="row">  
                <div class="col-sm-2">    
                    <div class="d-flex align-items-center">
                        <a href="/user/{{ $user->id }}/home">
                        <img src="/images/avatars/default.jpg" alt="icon" style="width:100px; height:100px;">
                    </div>
                </div>
                <div class="col-sm-10" style="width: 530px;height: 100px;">  
                    <div class="">
                        <h2 style="margin-top: 20px;">{{ $following->first_name }} {{ $following->last_name }}</h2>
                        <div class="pull-right">
                            @if(Auth::user()->id == $following->id)
                                @elseif(auth()->user()->following()->find($following->id) !== null)
                                <label><a href="/user/{{ $following->id }}/unfollow" role="button" name="" class="btn btn-primary btn-sm"><font size="4"> unfollow </font></a></label>
                                @else
                                <label><a href="/user/{{ $following->id }}/follow" role="button" name="" class="btn btn-primary btn-sm"><font size="4"> Follow </font></a></label>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    
    </div>
    <div class="col-sm-3 text-center"></div>
</div>

@endsection