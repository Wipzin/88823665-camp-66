@extends('layout.default')

@section('content')
    <div class="login-page">
        <div style="display: flex; justify-content: center; align-items: center; min-height: 100vh; text-align: center;">
            <div>
                <h1>@yield('code')</h1>
                <img src="image/silly.jpg">
                <p>@yield('message')</p>
            </div>
        </div>
    @endsection
