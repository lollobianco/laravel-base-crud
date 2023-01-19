@extends('layouts.app')
@section('page-title', "Home DC-Comics")

@section('main')
    <div class="comics-section">

        <div class="container py-5">

            <div class="d-flex flex-wrap">

            @foreach ($comics as $id => $element)

              <div class="card-container d-flex flex-column">
                <a href="{{ route('comic', compact('id')) }}">
                  <div class="card-image mb-3"> <img class="image-comic" src="{{$element['thumb']}}" alt=""></div>
                  <div class="card-text text-white mb-4">{{$element['title']}}</div>
                </a>
              </div>
            
            @endforeach

            </div>

            <div class="text-center">
                <button class="load-more-button">LOAD MORE</button>
            </div>

        </div>

    </div>

    <div class="blue-bg center-full">
        <div id="blue-section-container" class="center-full">
          <div class="center">
  
            <div class="element">
              <img
                class="image"
                src="{{asset('images/buy-comics-digital-comics.png')}}"
                alt="Digital Comics"
              />
              <span>DIGITAL COMICS</span>
            </div>
          </div>
  
          <div class="center">
            <div class="element">
              <img
                class="image"
                src="{{asset('images/buy-comics-merchandise.png')}}"
                alt="Digital Comics"
              />
              <span>DC MERCHANDISE</span>
            </div>
          </div>
  
          <div class="center">
            <div class="element">
              <img
                class="image"
                src="{{asset('images/buy-comics-subscriptions.png')}}"
                alt="Digital Comics"
              />
              <span>SUBSRIPTION</span>
            </div>
          </div>
  
          <div class="center">
            <div class="element">
              <img
                class="image image-locator"
                src="{{asset('images/buy-comics-shop-locator.png')}}"
                alt="Digital Comics"
              />
              <span>COMIC SHOP LOCATOR</span>
            </div>
          </div>
  
          <div class="center">
            <div class="element">
              <img
                class="image image-svg" 
                src="{{asset('images/buy-dc-power-visa.svg')}}"
                alt="Digital Comics"
              />
              <span>DC POWER VISA</span>
            </div>
          </div>
        </div>
      </div>

@endsection