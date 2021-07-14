@extends('layout.main')



@section('content')

<div class="profile">

    <div class="profile__container">

        <h1>
            Hello, <span>{{ $user->name }}</span>
        </h1>

        <p> {{$user->admin ? "You are logged in as an admin" : ""}} </p>

        <form class="profile__form" action="{{ action('UserController@store') }}" method="post">
            @csrf
            
            <h2>Want to update your preferences?</h2>
            
            <label for="isVegan">Vegan?</label>
            <input type="checkbox" name="isVegan" value="1" {{ $user->isVegan ? "checked" : ""}}><br />

            <label for="isVegetarian">Vegetarian?</label>
            <input type="checkbox" name="isVegetarian" value="1" {{ $user->isVegetarian ? "checked" : ""}}><br />

            <label for="isLactoseFree">Lactose intolerant?</label>
            <input type="checkbox" name="isLactoseFree" value="1" {{ $user->isLactoseFree ? "checked" : ""}}><br />
            
            <label for="isGlutenFree">Gluten intolerant?</label>
            <input type="checkbox" name="isGlutenFree" value="1" {{ $user->isGlutenFree ? "checked" : ""}}><br />

            <label for="isNutFree">Nut intolerant?</label>
            <input type="checkbox" name="isNutFree" value="1" {{ $user->isNutFree ? "checked" : ""}}><br />
            
        
            {{-- this id is used as a link to index.js if you want to change it change also index.js --}}
           <div class="profile__preferences">
            <h2>Tell us a bit more</h2>

            <div id="profile-form"></div>
           </div>
            <button class="profile__btn">Update</button>
         </form>
         <div id="admin-form">

        </div>
</div>


    <script src="{{mix('js/profile.js')}}"></script>
    <script src="{{mix('js/admin.js')}}"></script>
    


@endsection