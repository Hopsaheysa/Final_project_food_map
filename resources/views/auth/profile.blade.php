@extends('layout.main')



@section('content')

<div class="profile">

    <div class="profile__container">
                {{-- <h5>
            Your email is {{ $user->email }}
        </h5> --}}
        <h1>
            Hello, <span>{{ $user->name }}</span>
        </h1>


        <form class="profile__form" action="{{ action('UserController@store') }}" method="post">
            @csrf
            
            <h2>Want to update your preferences?</h2>
            
            <label for="isVegan">Vegan?</label>
            <input type="checkbox" name="isVegan" value={{ old( $user->isVegan )}}><br />

            <label for="isVegetarian">Vegetarian?</label>
            <input type="checkbox" name="isVegetarian" value={{ old( $user->isVegetarian )}}><br />

            <label for="isLactoseFree">Lactose intolerant?</label>
            <input type="checkbox" name="isLactoseFree" value={{ old( $user->isLactoseFree )}}><br />
            
            <label for="isGlutenFree">Gluten intolerant?</label>
            <input type="checkbox" name="isGlutenFree" value={{ old( $user->isGlutenFree )}}><br />

            <label for="isNutFree">Nut intolerant?</label>
            <input type="checkbox" name="isNutFree" value={{ old( $user->isVegan )}}><br />
            
        
            {{-- this id is used as a link to index.js if you want to change it change also index.js --}}
           <div class="profile__preferences">
            <h2>Tell us a bit more</h2>

            <div id="profile-form"></div>
           </div>
            <button class="profile__btn">Update</button>
         </form>

</div>


    <script src="{{mix('js/profile.js')}}"></script>
    


@endsection