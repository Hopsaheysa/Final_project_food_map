@extends('layout.main')



@section('content')

<h1>
    Hello {{ $user->name }}!!!
</h1>

<h5>
    Your email is {{ $user->email }}!!!
</h5>


<form action="{{ route('register') }}" method="post">
    @csrf
   
    
    <p>Now is the time you tell us your preferences so we can customize searching results for you.</p>
    
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
    
    {{-- this id is used as a link to index.js if you want to change it change also index.js --}}
    <div id="profile-form"> 

    
    </div>

    
    <button>Submit</button>
</form>


    <script src="{{mix('js/profile.js')}}"></script>


@endsection