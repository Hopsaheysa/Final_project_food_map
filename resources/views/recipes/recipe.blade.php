@extends('layout.main')

@section('content')


<div class="review">

{{$recipe["name"]}}

<div class="recipe__image"><img src="/images-food/{{$recipe["image"]}}" alt={{$recipe["name"]}} /></div>

<div id="review">   

</div>
    <script src="{{mix('js/review.js')}}"></script>

@endsection