
@foreach ($errors->all() as $error)
    <div class="error">{{ $error }}</div>
@endforeach

<form action="{{ route('login') }}" method="post">
    @csrf
    Username
    <input type="email" name="email" value="{{ old('email') }}"><br />
    Password
    <input type="password" name="password" value=""><br />

    <button>Login</button>
</form>