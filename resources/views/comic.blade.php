@extends('layouts.app')

@section('page-title')
    {{$single_comic['title']}}
@endsection

@section('main')

    <div class="blue-bar"></div>

    <section class="info-section">

        <div class="container">

            <div class="d-flex flex-column cover">
                <img src="{{$single_comic['thumb']}}" alt="">
                <div class="gallery">VIEW GALLERY</div>
            </div>

            <div class="d-flex justify-content-between">

                <div class="col-8 left-info d-flex flex-column">

                    <h1 class="comic-title">{{$single_comic['title']}}</h1>

                    <div class="green-bar mt-3 px-4 d-flex">

                        <div class="col-9 py-3 separator">

                            <div class="d-flex justify-content-between pe-4">

                                <div>U.S. Price: {{$single_comic['price']}} $</div>

                                <div>AVAILABLE</div>

                            </div>

                        </div>

                        <div class="col-3 py-3 ps-4 check-availability">Check Availability</div>

                    </div>

                    <div>
                        <p class="mt-3">{{$single_comic['description']}}</p>
                    </div>

                    <div class="mt-3">
                        <div>Sale Date: {{$single_comic['sale_date']}}</div>

                        <div>Type: {{$single_comic['type']}}</div>
                    </div>

                    <div>

                    </div>

                </div>

                <div class="col-4 right-info">

                    <div class="d-flex flex-column ps-5">

                        <div class="fw-semibold text-end">ADVERTISEMENT</div>

                        <img src="{{ asset('images/advertisement.jpg') }}" alt="adv">

                    </div>

                </div>

            </div>

        </div>

    </section>

    {{-- <section class="info2-section">

        <div class="container d-flex">

            <div class="col-6 left2 d-flex flex-column pe-3">

                <div class="border-bottom">
                    <h3 class="mb-3">Talent</h3>
                </div>

                <div class="d-flex flex-column border-bottom">

                    <div class="d-flex py-2">

                        <div class="d-block col-3">Art by:</div>

                        <div class="col-8 text-primary">
                        @foreach ($single_comic['artists'] as $element)

                            {{$element}},

                        @endforeach
                        </div>

                    </div>

                </div>


                <div class="d-flex flex-column border-bottom">

                    <div class="d-flex py-2">

                        <div class="d-block col-3">Written by:</div>

                        <div class="col-8 text-primary">
                        @foreach ($single_comic['writers'] as $element)

                            {{$element}},

                        @endforeach
                        </div>

                    </div>

                </div>

            </div>

            <div class="col-6 right2 d-flex flex-column">

                <div class="border-bottom">
                    <h3 class="mb-3">Specs</h3>
                </div>

                <div class="d-flex py-3 border-bottom">
                    <div class="col-4">Series:</div>
                    <div class="col-4 text-primary">{{$single_comic['series']}}</div>
                </div>

                <div class="d-flex py-3 border-bottom">
                    <div class="col-4">U.S. Price:</div>
                    <div class="col-4 text-primary">{{$single_comic['price']}}</div>
                </div>

                <div class="d-flex py-3 border-bottom">
                    <div class="col-4">On Sale Date:</div>
                    <div class="col-4 text-primary">{{$single_comic['sale_date']}}</div>
                </div>

            </div>

        </div>

    </section> --}}

    <section class="prefooter-section">

        <div class="container">

            <div class="d-flex">

                <div class="col-3 d-flex justify-content-between prefooter-container">
                    <span class="fw-bold image-title">DIGITAL COMICS</span>
                    <div class="fake-img"></div>
                </div>

                <div class="col-3 d-flex justify-content-between prefooter-container">
                    <span class="fw-bold image-title">SHOP DC</span>
                    <div class="fake-img"></div>
                </div>

                <div class="col-3 d-flex justify-content-between prefooter-container">
                    <span class="fw-bold image-title">COMIC SHOP LOCATOR</span>
                    <div class="fake-img"></div>
                </div>

                <div class="col-3 d-flex justify-content-between prefooter-container prefooter-container-last">
                    <span class="fw-bold image-title">SUBSCRIPTION</span>
                    <div class="fake-img"></div>
                </div>

            </div>

        </div>

    </section>

@endsection
