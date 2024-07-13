@extends('layouts.main')

@section('content')
    <div class="container-fluid hero-section m-0 p-0">
        <div class="container content text-center text-md-start vh-100 text-white">
            {{-- img overlay  --}}
            <img src="{{asset('img/img-hero.webp')}}" class="image-bg w-100 h-100" alt="">
            {{-- img overlay end --}}
            <div class="row h-100 d-flex flex-column justify-content-center">
                <section class="col-md-6 ">
                    <h1 class="header-hero">EXPLORE BALI</h1>
                    <p class="" style="letter-spacing: 2px">Experience the magic of Bali with Eva Bali Tours. Explore stunning landscapes, immerse in rich culture, and create memories that last a lifetime.</p>
                    <a href="" class="btn btn-orange">Ask Question</a>
                </section>
            </div>
        </div>
    </div>
    <div class="container position-relative">
        {{-- floating input --}}
        <section class="floating-input w-100 d-flex justify-content-center">
            <form action="" class="row align-items-center form ">
                <div class="text-center col-md-2">
                    <label for="" class="d-block fw-bold">From *</label>
                    <input type="text" class="form-control" name="from">
                </div>
                <div class="text-center col-md-2">
                    <label for="" class="d-block fw-bold">To *</label>
                    <input type="text" class="form-control" name="to">
                </div>
                <div class="text-center col-md-3">
                    <label for="" class="d-block fw-bold">Date *</label>
                    <input type="date" class="form-control" name="date">
                </div>
                <div class="text-center col-md-3">
                    <label for="" class="d-block fw-bold">Pick Up Time *</label>
                    <input type="text" class="form-control" name="time">
                </div>
                <div class="text-center col-md-2 h-100 m-0 p-0">
                    <button class="book-btn d-block fw-bold fs-5">BOOK NOW</button>
                </div>
            </form>
        </section>
        {{-- floating input end --}}

        {{-- value --}}
        <section class="container value text-center d-flex ">
            <div>
                <h5 class="text-orange  fs-2 fw-semibold">Top Values For You</h5>
                <p class="mb-3">Try Variety of Benefits when using our services</p>
                <div class="row mt-5">
                    <section class="col-md-3 ">
                        <div class="icon-container fs-2 rounded-circle mx-auto text-white m-0 p-0">
                            <i class="fa-regular fa-paper-plane"></i>
                        </div>
                        <h5 class="fw-bold text-orange my-2">Airport Pickup</h5>
                        <small>Enjoy seamless and stress- transportation with our airport pickup service.</small>
                    </section>
                    <section class="col-md-3 ">
                        <div class="icon-container fs-2 rounded-circle mx-auto text-white m-0 p-0">
                            <i class="fa-regular fa-calendar-check"></i>
                        </div>
                        <h5 class="fw-bold text-orange my-2">Easy Booking </h5>
                        <small>Enjoy seamless and stress- transportation with our airport pickup service.</small>
                    </section>
                    <section class="col-md-3 ">
                        <div class="icon-container fs-2 rounded-circle mx-auto text-white m-0 p-0">
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h5 class="fw-bold text-orange my-2">Best Tour Guide</h5>
                        <small>Enjoy seamless and stress- transportation with our airport pickup service.</small>
                    </section>
                    <section class="col-md-3 ">
                        <div class="icon-container fs-2 rounded-circle mx-auto text-white m-0 p-0">
                            <i class="fa-solid fa-face-grin-wink"></i>
                        </div>
                        <h5 class="fw-bold text-orange my-2">Happy Tour</h5>
                        <small>Enjoy seamless and stress- transportation with our airport pickup service.</small>
                    </section>
                </div>
            </div>

        </section>
        {{-- valueend --}}
    </div>
    {{-- about --}}
    <div class="container about p-4 px-md-0">
        <div class="row">
            {{-- image --}}
            <section class="col-md-6">
                <h5 class="text-orange text-center d-md-none fs-2 fw-semibold">About Eva Bali Tour</h5>
                <div class="row img-container g-2">
                    <div class="col-12">
                        <img src="{{asset('img/img-about-2.jpg')}}" class=" rounded-2 w-100 " style="height: 14rem;object-fit: cover; object-position: center" alt="">
                    </div>
                    <div class="col-6">
                        <img src="{{asset('img/img-about-1 .jpg')}}" class=" rounded-2 w-100" alt="" style="height: 10rem;object-fit: cover; object-position: bottom">
                    </div>
                    <div class="col-6">
                        <img src="{{asset('img/img-about-3.jpg')}}" class=" rounded-2 w-100 " style="height: 10rem;object-fit: cover; object-position: center" alt="">
                    </div>
                </div>
            </section>
            {{-- image end --}}

            {{-- content --}}
            <section class="col-md-6 mt-3 mt-md-0">
                <div>
                    <h5 class="text-orange  fs-2 fw-semibold d-none d-md-block">About Eva Bali Tour</h5>
                    <p class="mb-3" style="letter-spacing: 1px">Experience the best of Bali with Great Bali Tours. From tranquil beaches to thrilling adventures, our expert team crafts personalized journeys that exceed expectations. Let us unlock the magic of Bali for you.</p>
                    <p class="mb-3" style="letter-spacing: 1px">Immerse yourself in Bali's rich culture, where every temple tells a story and every dance embodies tradition. Our curated experiences offer unique insights into local customs, allowing you to connect deeply with the island's heritage. Whether it's participating in traditional ceremonies, learning Balinese cooking, or exploring vibrant markets, we invite you to discover the soul of Bali with us.</p>
                </div>

            </section>
            {{-- content end --}}

        </div>
    </div>
    {{-- about end --}}

    {{-- destination --}}
    <div class="container destination ">
        <div class="swiper">
            <div class="swiper-wrapper">
                <section class="swiper-slide">
                    <div class="h-100"></div>
                </section>
                <section class="swiper-slide">
                    slide 2
                </section>
                <section class="swiper-slide">
                    slide 3
                </section>
            </div>
        </div>
    </div>
    {{-- destination end --}}
@endsection
