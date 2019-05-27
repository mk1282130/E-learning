@extends('layouts.app')

@section('content')
<style>
</style>
<body>
<div class="row">
    <div class="col-sm-2" style="background-color: antiquewhite">.col-sm-4</div>
    <div class="col-sm-8" style="background-color:aquamarine">.col-sm-4
        @foreach($users as $user)
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-2 text-center">
                        <img src="/images/telegram.png" alt="icon" style="width:80px; height:80px;">
                    </div>
                    <div class="col-sm-10">
                        <p class="float-right"><a href="#" class="btn btn-primary">Go somewhere</a></p>
                        <h3 class="card-title">{{ $user->name }}</h3>
                    </div>
                    <div class="col-sm-0"></div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="col-sm-2" style="background-color:cadetblue">.col-sm-4</div>
</div>

</body>

@endsection