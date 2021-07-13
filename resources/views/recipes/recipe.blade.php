@extends('layout.main')

@section('content')



<div class="recipe-name">
{{$recipe["name"]}}
</div>
<div class="recipe-image"><img src="/images-food/{{$recipe["image"]}}" alt={{$recipe["name"]}} /></div>

<div id="review">   
</div>
   
    <script src="{{mix('js/review.js')}}"></script>

@endsection