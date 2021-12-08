@extends('layouts.app')

@section('content')
@include('slideshow')
<div class="grid grid-cols-3 gap-4 pl-4 pt-20">
    <div class="w-full object-contain  row-span-3">
        <div class="slideshow-container">
@foreach ($Image as $image)
    
            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
              <div class="numbertext">1 / 3</div>
              <img src="{{$image->image}}
              " style="width:100%" class="h-96 bg-black">
              <div class="text hover:opacity-100 opacity-0 bg-black">{{$image->image_text}}</div>
            </div>
            @endforeach


            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
          </div>
          <br>


          <!-- The dots/circles -->
          <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
          </div>
    </div>
    <div class="row-span-2 col-span-2 text-xl">
        <div  class="max-w rounded overflow-hidden shadow-lg ">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">{{$project->project_name}}</div>
                <p class="text-gray-700 text-base" >
                    {{$project->description}}
                </p>
            </div>
        </div>
    </div>
    <div class="row-span-2 col-span-2 text-xl">
        <div  class="max-w rounded overflow-hidden shadow-lg ">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">
                    Links
                </div>
                @foreach ( $linkController as $link )
                <a class="text-blue-600 hover:text-blue-800 visited:text-purple-600 text-base" href="{{$link->link}}" >
                    {{$link->link}}
                </a>  
                <br>
                @endforeach

            </div>
        </div>
  </div>
</div>

<script>
    var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>
@endsection


