<section class="white-header">

   <div class="blue-section">
   
     <div class="container d-flex align-items-center justify-content-end">
   
       <span class="fs-xxs mx-2 text-white">DC POWER VISA@</span>
       <span class="fs-xxs mx-2 text-white">ADDITIONAL DC SITES</span>
   
     </div>
   
   </div>

  <nav class="container d-flex justify-content-center">
    <ul class="d-flex align-items-center m-0 p-3">
      <li class="mx-3 list-unstyled fw-bold"> <a href="{{ route('home') }}"> <img src="{{ asset('images/dc-logo.png') }}"
            alt="logo-dc"> </a> </li>
      <li class="mx-3 list-unstyled fw-bold"> <a href="">CHARACTER</a> </li>
      <li class="mx-3 list-unstyled fw-bold active"> <a
          class="{{ Request::route()->getName() == 'home' ? 'active' : '' }}" href="{{ route('home') }}">COMICS</a>
      </li>
      <li class="mx-3 list-unstyled fw-bold"> <a href="">MOVIES</a> </li>
      <li class="mx-3 list-unstyled fw-bold"> <a href="">TV</a> </li>
      <li class="mx-3 list-unstyled fw-bold"> <a href="">GAMES</a> </li>
      <li class="mx-3 list-unstyled fw-bold"> <a href="">COLLECTIBLES</a> </li>
      <li class="mx-3 list-unstyled fw-bold"> <a href="">VIDEOS</a> </li>
      <li class="mx-3 list-unstyled fw-bold"> <a href="">FANS</a> </li>
      <li class="mx-3 list-unstyled fw-bold"> <a href="">NEWS</a> </li>
      <li class="mx-3 list-unstyled fw-bold"> <a href="">SHOP</a> </li>
    </ul>

    <div class="d-flex align-items-center">
      <div class="search-container">
        <i class="fa-solid fa-magnifying-glass"></i>
        <input type="text" class="search">
      </div>
    </div>

  </nav>

</section>

<div class="jumbo-image"></div>
