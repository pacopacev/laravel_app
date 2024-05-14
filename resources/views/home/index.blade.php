@extends('layouts.app-master')
@section('content')
    <div class="bg-light p-5 rounded">
        @auth
        <h1>Dashboard</h1>
        <p class="lead">Welcome. You are in.</p>
        <a class="btn btn-lg btn-primary" href="https://codeanddeploy.com" role="button">Press Tuk &raquo;</a>
        @endauth

        @guest
        <h1>Homepage</h1>
        <p class="lead">Welcome. You are out. Please login.</p>
        @endguest
    </div>
@endsection
