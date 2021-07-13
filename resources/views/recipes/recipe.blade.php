@extends('layout.main')

@section('content')


<div class="review">
      <div className="review__container">

{{-- {{$recipe["name"]}} --}}

{{-- <div class="recipe__image"> --}}
    <img src="/images-food/{{$recipe["image"]}}" alt={{$recipe["name"]}} />
{{-- </div> --}}

<div id="review">   
    </div>
</div>
    <script src="{{mix('js/review.js')}}"></script>

@endsection