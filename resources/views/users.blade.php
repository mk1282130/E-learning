@extends('layouts.app')

@section('css')
<!-- Styles -->
<link href="{{ asset('css/users.css') }}" rel="stylesheet">
@endsection

@section('content')
<body>
<div class="container">
<div class="row">
    <!-- <div class="col-sm-2" style="background-color: antiquewhite">.col-sm-4</div> -->
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <h1 class="text-center"><strong>Users</strong></h1>
            @foreach($users as $user)
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-2 text-center">
                                    <a href="/user/{{ $user->id }}/profile" class="">
                                        <img src="/images/telegram.png" alt="icon" style="width:100px; height:100px;">
                                    </a>
                                </div>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h2><a href="/user/{{ $user->id }}/profile" class=""><strong>{{ $user->first_name }} {{ $user->last_name }}</strong></a></h2>
                                        </div>
                                        <div class="col-sm-6 pull-right d-flex align-items-center">
                                            @if(auth()->user()->following()->find($user->id) !== null)
                                            <a href="/user/{{ $user->id }}/unfollow" role="button" class="btn btn-primary btn-sm"><font size="4" color=""> unfollow </font></a>
                                            @else
                                            <a href="/user/{{ $user->id }}/follow" role="button" class="btn btn-primary btn-sm"><font size="4" color=""> Follow </font></a>
                                            @endif
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach
    </div>
    <div class="col-sm-2"></div>
</div>
</div>  
</body>

@endsection