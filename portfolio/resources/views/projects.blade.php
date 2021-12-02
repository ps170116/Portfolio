@extends('layouts.app')

@section('content')
<div class=" pt-10 flex flex-wrap content-center pb-8 " >
    <div class=" mx-auto content-start grid grid-cols-3 gap-x-40 gap-y-20">
        <a  href="{{('defluitendefietser')}}">
            <div  class="max-w-sm rounded overflow-hidden shadow-lg transform transition duration-500 hover:scale-110">
                <img class="w-full h-64 object-contain" src="/assets/images/logo.png" alt="fluitende fietser logo">
                <div class="px-6 py-4">
                  <div class="font-bold text-xl mb-2">De fluitende Fietser</div>
                  <p class="text-gray-700 text-base">
                    De fluitende fietser was een school project waar we een fietsen winkel moesten maken.
                    hierbij gebruikte we: html, php en leerde we hoe we een database moesten gebruiken.
                  </p>
                </div>
              </div>
          </a>
        <a  href="{{('stonkscasino')}}">
              <div  class="max-w-sm rounded overflow-hidden shadow-lg transform transition duration-500 hover:scale-110">
            <img class="w-full h-64" src="/assets/images/stonks.png" alt="stonnks casino logo">
            <div class="px-6 py-4">
              <div class="font-bold text-xl mb-2">Stonks casino</div>
              <p class="text-gray-700 text-base">
                De fluitende fietser was een school project waar we een fietsen winkel moesten maken.
                hierbij gebruikte we: html, php en leerde we hoe we een database moesten gebruiken.
              </p>
            </div>
          </div>
        </a>
        <a  href="{{('defluitendefietser')}}">
          <div  class="max-w-sm rounded overflow-hidden shadow-lg transform transition duration-500 hover:scale-110">
              <img class="w-full h-64 object-contain" src="/assets/images/logo.png" alt="fluitende fietser logo">
              <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">De fluitende Fietser</div>
                <p class="text-gray-700 text-base">
                  De fluitende fietser was een school project waar we een fietsen winkel moesten maken.
                  hierbij gebruikte we: html, php en leerde we hoe we een database moesten gebruiken.
                </p>
              </div>
            </div>
        </a>
      <a  href="{{('stonkscasino')}}">
            <div  class="max-w-sm rounded overflow-hidden shadow-lg transform transition duration-500 hover:scale-110">
          <img class="w-full h-64" src="/assets/images/stonks.png" alt="stonnks casino logo">
          <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">Stonks casino</div>
            <p class="text-gray-700 text-base">
              De fluitende fietser was een school project waar we een fietsen winkel moesten maken.
              hierbij gebruikte we: html, php en leerde we hoe we een database moesten gebruiken.
            </p>
          </div>
        </div>
      </a>
  </div>
</div>
  
@endsection