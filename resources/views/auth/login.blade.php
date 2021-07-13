@extends('layout.main')

@section('content')



<div class="login">
    <div class="login__container">
        @foreach ($errors->all() as $error)
    <div class="error">{{ $error }}</div>
    @endforeach
        <form class="login__form" action="{{ route('login') }}" method="post">
            @csrf
            <p class="login__title">Log in</p>
            
            <input class="login__input" type="email" name="email" placeholder="Email" value="{{ old('email') }}"><br />
            
            <input class="login__input" type="password" name="password" placeholder="Password" value=""><br />
            <p class="login__register">Don't have an account? <a href="{{ route('register') }}">Register</a></p>

            <button class="login__btn">Sign in</button>
        </form>
    </div>
</div>

@endsection