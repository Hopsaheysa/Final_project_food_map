@extends('layout.main')

@section('content')


<div class="review">

     
<div class="review__image">
    <h1>Did you find the {{$recipe["name"]}} recipe helpful?</h1>
    
    {{-- <img src="/images-food/{{$recipe["image"]}}" alt={{$recipe["name"]}} /> --}}
</div>

<div id="reviews">   
    </div>

    <script src="{{mix('js/review.js')}}"></script>

@endsection