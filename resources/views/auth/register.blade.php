

 
@extends('layout.main')

@section('content')

<div class="register">
    <div class="register__container">
        @foreach ($errors->all() as $error)

    <div class="error">{{ $error }}</div>

@endforeach
        <form class="register__form" action="{{ route('register') }}" method="post">
            @csrf
            <p class="register__title">Register</p>
            <input class="register__input" type="text" name="name" placeholder="Name" value="{{ old('name') }}"><br />
            <input class="register__input" type="email" name="email" placeholder="Email"  value="{{ old('email') }}"><br />
            <input class="register__input" type="password" name="password" placeholder="Password" value=""><br />
            <input class="register__input" type="password" name="password_confirmation" placeholder="Confrim Password"  value=""><br />
            
            <div class="register__preferences">
            <p> Please share with us your preferences. You can skip this part for now and return to it later.</p>
            
            <label for="isVegan">Vegan?</label>
            <input type="checkbox" name="isVegan" value="1"><br />

            <label for="isVegetarian">Vegetarian?</label>
            <input type="checkbox" name="isVegetarian" value="1"><br />

            <label for="isLactoseFree">Lactose intolerant?</label>
            <input type="checkbox" name="isLactoseFree" value="1"><br />
            
            <label for="isGlutenFree">Gluten intolerant?</label>
            <input type="checkbox" name="isGlutenFree" value="1"><br />

            <label for="isNutFree">Nut intolerant?</label>
            <input type="checkbox" name="isNutFree" value="1"><br />

            </div>
            
            <button class="register__btn">Register</button>
        </form>
    </div>
</div>
@endsection