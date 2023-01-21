@extends('layouts.app')
@section('page-title', 'Home DC-Comics')

@section('main')

  @if (session('success'))
    <div class="container d-flex justify-content-center pt-5 alert-container">
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    </div>
  @endif

  <div class="comics-section">

    <div class="position-add-button container">
      <a href="{{ route('comics.create') }}"><button class="add-button">ADD COMIC</button></a>
    </div>

    <div class="container py-5">

      <div class="d-flex flex-wrap">

        @foreach ($comics as $element)
          <div class="card-container d-flex flex-column">
            <a href="{{ route('comics.show', $element->id) }}">
              <div class="card-image mb-3"> <img class="image-comic" src="{{ $element['thumb'] }}"
                  alt="{{ $element['title'] }}"></div>
              <div class="card-text text-white mb-4">{{ $element['title'] }}</div>
            </a>
          </div>
        @endforeach

      </div>

      <div class="d-flex justify-content-center">
        {{-- <button class="load-more-button">LOAD MORE</button> --}}
        {{ $comics->links() }}
      </div>

    </div>

  </div>

  <div class="blue-bg center-full">
    <div id="blue-section-container" class="center-full">
      <div class="center">

        <div class="element">
          <img class="image" src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="Digital Comics" />
          <span>DIGITAL COMICS</span>
        </div>
      </div>

      <div class="center">
        <div class="element">
          <img class="image" src="{{ asset('images/buy-comics-merchandise.png') }}" alt="Digital Comics" />
          <span>DC MERCHANDISE</span>
        </div>
      </div>

      <div class="center">
        <div class="element">
          <img class="image" src="{{ asset('images/buy-comics-subscriptions.png') }}" alt="Digital Comics" />
          <span>SUBSRIPTION</span>
        </div>
      </div>

      <div class="center">
        <div class="element">
          <img class="image image-locator" src="{{ asset('images/buy-comics-shop-locator.png') }}"
            alt="Digital Comics" />
          <span>COMIC SHOP LOCATOR</span>
        </div>
      </div>

      <div class="center">
        <div class="element">
          <img class="image image-svg" src="{{ asset('images/buy-dc-power-visa.svg') }}" alt="Digital Comics" />
          <span>DC POWER VISA</span>
        </div>
      </div>
    </div>
  </div>

@endsection
