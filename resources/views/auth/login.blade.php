@extends('layouts.auth')

@section('title')
    Login
@endsection

@section('content')
    <h1 class="h2 pb-2">Login &#x1f44b;</h1>
    <hr class="pb-1">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <input class="form-control" type="email" placeholder="Email Address" name="email" />
        </div>
        <div class="form-group pt-1 pb-1">
            <input class="form-control" type="password" placeholder="Password" name="password" />
        </div>
        <button class="btn btn-lg btn-block btn-primary" id="loginBtn" type="submit">Log in</button>
    </form>
@endsection