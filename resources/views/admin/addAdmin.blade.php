@extends('layouts.app')

@section('css')
<!-- Styles -->
<link href="{{ asset('css/addAdmin.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <h1 class="text-black" style="margin-bottom: 15px;">New Admin</h1>
            <form action="/admin/addAdmin/save" method="POST">
            @csrf
                <div class="form-group">
                    <h2>First Name</h2>
                        <input class="form-control" type="text" name="first_name">

                        @if ($errors->has('first_name'))
                            <span class="invalid-feedback {{ ($errors->has('first_name')) ? 'd-block' : ''}}" role="alert">
                                <strong>{{ $errors->first('first_name') }}</strong>
                            </span>
                        @endif

                    <h2>Last Name</h2>
                        <input class="form-control" type="text" name="last_name">

                        @if ($errors->has('last_name'))
                            <span class="invalid-feedback {{ ($errors->has('last_name')) ? 'd-block' : ''}}" role="alert">
                                <strong>{{ $errors->first('last_name') }}</strong>
                            </span>
                        @endif

                    <h2>Email {{ $errors->has('email') }}</h2>
                        <input class="form-control" type="text" name="email">

                        @if ($errors->has('email'))
                            <span class="invalid-feedback {{ ($errors->has('email')) ? 'd-block' : ''}}" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif

                    <h2>Password</h2>
                        <input class="form-control" type="password" name="password">

                        @if ($errors->has('password'))
                            <span class="invalid-feedback {{ ($errors->has('password')) ? 'd-block' : ''}}" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif

                    <input class="button" type="submit" value="Register" style="margin-top: 30px;">
                    
                </div>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
@endsection