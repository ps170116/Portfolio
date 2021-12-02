@extends('layouts.app')

@section('content')
@include('slideshow')
<div class="grid grid-cols-3 gap-4 pl-4 pt-20">
    <div class="w-full object-contain  row-span-3">
        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
              <div class="numbertext">1 / 3</div>
              <img src="assets/images/stonks.png" style="width:100%" class="h-96 bg-black">
              <div class="text">logo</div>
            </div>
          
            <div class="mySlides fade">
              <div class="numbertext">2 / 3</div>
              <img src="assets/images/stonksapp.png" style="width:100%" class="h-96">
              <div class="text">applicatie</div>
            </div>
          
            <div class="mySlides fade">
              <div class="numbertext">3 / 3</div>
              <img src="assets/images/stonkswebsite.png" style="width:100%" class="h-96">
              <div class="text">website</div>
            </div>
          
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
                <div class="font-bold text-xl mb-2">Stonks Casino</div>
                <p class="text-gray-700 text-base">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut congue lorem, non tincidunt augue. Maecenas at nibh eget ex euismod eleifend eget eu magna. Nulla egestas porta dui, vel posuere ex venenatis et. Aenean ac neque dapibus, scelerisque sem in, iaculis massa. Fusce sit amet augue in sapien imperdiet mollis sed at nunc. Sed risus nisl, luctus et urna sit amet, dapibus tincidunt urna. Curabitur faucibus neque nec hendrerit auctor. Phasellus felis ipsum, malesuada sit amet elit in, accumsan auctor lorem. Aliquam nulla est, eleifend a ante sit amet, placerat molestie risus. Praesent est nulla, viverra id erat vitae, vestibulum cursus nibh. Vivamus posuere nulla a facilisis commodo. Mauris eget lorem ut eros accumsan tempus. Maecenas ullamcorper in nisi in elementum.
                    Sed venenatis tempus tortor ut aliquet. Nulla in metus non odio pulvinar consequat. Curabitur rutrum, augue sed scelerisque efficitur, ipsum metus lacinia ipsum, ut sodales urna eros bibendum purus. Sed vitae neque lacus. Duis nec est ac ante venenatis tristique. Mauris fermentum lacus vel quam tempor, eget pharetra ante euismod. Morbi ac nisl justo. Aliquam placerat lectus eu justo convallis ultricies. Pellentesque vel mattis est, non fringilla quam. Ut et nulla et lorem facilisis fringilla nec id ligula. Phasellus tortor sapien, euismod et mi quis, porta luctus tellus. Nullam porta augue non purus ornare viverra. Aenean ultrices eros eu ante efficitur, in congue mauris bibendum. Phasellus euismod sem id risus vulputate, eleifend ultrices nunc accumsan. Pellentesque a vestibulum nulla. Sed consequat tristique lorem, vitae scelerisque sem feugiat a.        
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
                <p class="text-gray-700 text-base">
                    www.defluitendefietser.nl
                </p>
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