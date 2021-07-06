@extends('layout.main')



@section('content')

<h1>
    Hello {{ $user->name }}!!!
</h1>

<h5>
    Your email is {{ $user->email }}!!!
</h5>

<script src="{{mix('js/profile.js')}}"></script>

@endsection