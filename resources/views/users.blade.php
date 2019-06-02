@extends('layouts.app')

@section('content')
<style>
</style>
<body>
<div class="row">
    <div class="col-sm-2" style="background-color: antiquewhite">.col-sm-4</div>
    <div class="col-sm-8" style="background-color:aquamarine">
        <h1 class="text-center">Users</h1>
            @foreach($users as $user)
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-2 text-center">
                                    <a href="/user/{{ $user->id }}/profile" class="">
                                        <img src="/images/telegram.png" alt="icon" style="width:80px; height:80px;">
                                    </a>
                                </div>
                                <div class="col-sm-10">
                                    <!-- <a href="" role="button" name="" class="btn btn-primary btn-sm float-right"><font size="4" color=""> Follow </font></a> -->
                                    @if(auth()->user()->following()->find($user->id) !== null)
                                    <label><a href="/user/{{ $user->id }}/unfollow" role="button" class="btn btn-primary btn-sm float-right"><font size="4" color=""> unfollow </font></a></label>
                                    @else
                                    <label><a href="/user/{{ $user->id }}/follow" role="button" class="btn btn-primary btn-sm float-right"><font size="4" color=""> Follow </font></a><label>
                                    @endif
                                    <h3 class="card-title"><a href="/user/{{ $user->id }}/profile" class="">{{ $user->first_name }} {{ $user->last_name }}</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach
    </div>
    <div class="col-sm-2" style="background-color:cadetblue">.col-sm-4</div>
</div>

</body>

@endsection