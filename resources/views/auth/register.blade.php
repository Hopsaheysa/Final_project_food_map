@foreach ($errors->all() as $error)

    <div class="error">{{ $error }}</div>

@endforeach

 
@extends('layout.main')

@section('content')

<form action="{{ route('register') }}" method="post">
    @csrf
    Name
    <input type="text" name="name" value="{{ old('name') }}"><br />
    E-mail
    <input type="email" name="email" value="{{ old('email') }}"><br />
    Password
    <input type="password" name="password" value=""><br />
    Confirm password
    <input type="password" name="password_confirmation" value=""><br />
    <button>Register</button>
</form>

@endsection