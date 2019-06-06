@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-2" style="background-color: antiquewhite">.col-sm-4</div>
    <div class="col-sm-8 text-center" style="background-color:aquamarine">
        <h1>New Admin</h1>
        <!-- <form action="/admin/addAdmin/save" method="POST"> -->
        <form action="/admin/addAdmin/save" method="POST">
        @csrf
            <h2>First_Name</h2>
                <input type="text" name="first_name">

                @if ($errors->has('first_name'))
                    <span class="invalid-feedback {{ ($errors->has('first_name')) ? 'd-block' : ''}}" role="alert">
                        <strong>{{ $errors->first('first_name') }}</strong>
                    </span>
                @endif

            <h2>Last_Name</h2>
                <input type="text" name="last_name">

                @if ($errors->has('last_name'))
                    <span class="invalid-feedback {{ ($errors->has('last_name')) ? 'd-block' : ''}}" role="alert">
                        <strong>{{ $errors->first('last_name') }}</strong>
                    </span>
                @endif

            <h2>Email {{ $errors->has('email') }}</h2>
                <input type="text" name="email">

                @if ($errors->has('email'))
                    <span class="invalid-feedback {{ ($errors->has('email')) ? 'd-block' : ''}}" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif

            <h2>Password</h2>
                <input type="password" name="password">

                @if ($errors->has('password'))
                    <span class="invalid-feedback {{ ($errors->has('password')) ? 'd-block' : ''}}" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif

            <br><br>
            <input type="submit" value=Register>
        </form>
    </div>
    <div class="col-sm-2" style="background-color:cadetblue">.col-sm-4</div>
</div>

@endsection