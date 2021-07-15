@extends('layout.main')



@section('content')

<div class="profile">

    <div class="profile__container">

        <h1>
            Hello, <span>{{ $user->name }}</span>
        </h1>

        <p class="profile__admin"> {{$user->admin ? "*You are logged in as admin" : ""}} </p>
            
        <div class="profile__user">
            <h2>Update your preferences</h2>
                <form class="profile__preferences" action="{{ action('UserController@store') }}" method="post">
                    @csrf
                    
                   
                    
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
                    

                 <div class="profile__detail">                  
            <div id="profile-form"></div>
          
            </div>
             <button class="profile__btn">Update</button> 

                     </div>
                </form>



            {{-- this id is used as a link to index.js if you want to change it change also index.js --}}
           {{-- <div class="profile__preferences"> --}}
           

        
              
 

                
       
                <div id="admin-form">

                 
        </div>

      
</div>


    <script src="{{mix('js/profile.js')}}"></script>
    <script src="{{mix('js/admin.js')}}"></script>
    


@endsection