@foreach ($errors->all() as $error)

    <div class="error">{{ $error }}</div>

@endforeach

 

<form action="{{ route('register') }}" method="post">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" value="{{ old('name') }}"><br />
    <label for="email">E-mail</label>
    <input type="email" name="email" value="{{ old('email') }}"><br />
    <label for="password">Password</label>
    <input type="password" name="password" value=""><br />
    

    
    <label for="password_confirmation">Confirm password</label>
    <input type="password" name="password_confirmation" value=""><br />
    
    
    <p>Please share with us your preferences. If you skip it and leave it blank you can fill it later.</p>
    
    <label for="isVegan">Are you vegan?</label>
    <input type="checkbox" name="isVegan" value="1"><br />

    <label for="isVegetarian">Are you vegetarian?</label>
    <input type="checkbox" name="isVegetarian" value="1"><br />

    <label for="isLactoseFree">Are you lactose intolerant?</label>
    <input type="checkbox" name="isLactoseFree" value="1"><br />
    
    <label for="isGlutenFree">Are you gluten intolerant?</label>
    <input type="checkbox" name="isGlutenFree" value="1"><br />

    <label for="isNutFree">Are you nut intolerant?</label>
    <input type="checkbox" name="isNutFree" value="1"><br />
    
    <button>Register</button>
</form>