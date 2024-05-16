@extends('layouts.app-master')
@section('content')

        @auth
        </head><body>

      <script id="microloader" type="text/javascript" src="bootstrap.js"></script>


     <!--@include('auth.partials.link1')
        <h1>Dashboard</h1>
        <p class="lead">Welcome. You are in.</p>
        <a class="btn btn-lg btn-primary" href="https://codeanddeploy.com" role="button">Press Tuk &raquo;</a>
        <script id="microloader" data-app="c30f0e36-baa6-4b3b-a8b4-48aed00f1ddb" type="text/javascript" src="bootstrap.js"></script>



        -->
        @endauth

        @guest
        <h1>Homepage</h1>
        <p class="lead">Welcome. You are out. Please login.</p>
        @endguest

@endsection
