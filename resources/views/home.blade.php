@extends('layouts.main')

@section('content')
    <div class="container-fluid hero-section m-0 p-0">
        <div class="container content text-center text-md-start vh-100 text-white">
            {{-- img overlay  --}}
            <img src="{{asset('img/img-hero.webp')}}" class="image-bg w-100 h-100" alt="">
            <div class="overlay"></div>
            {{-- img overlay end --}}
            <div class="row h-100 d-flex flex-column justify-content-center">
                <section class="col-md-6 ">
                    <h1 class="header-hero">EXPLORE BALI</h1>
                    <p class="" style="letter-spacing: 2px">Explore the Miracle of Bali with Eva Bali Tours. Discover stunning landscapes, exciting adventures, and vibrant culture with our expert <b>Female Tour Guide and driver</b>. Book now for an unforgettable experience on the Island of the Gods!</p>
                    <a  target="_blank" href="https://wa.me/62881038591236?text={{ urlencode('Hello, I want to ask some questions about the Eva Bali Tours.') }}" class="btn btn-orange" id="floatinginput">Ask Question</a>
                </section>
            </div>
        </div>
    </div>
    <div class="container position-relative" >
        {{-- floating input --}}
        <section class="floating-input w-100 d-flex justify-content-center">
            <form class="row align-items-center form " >
                <div class="text-center col-md-2">
                    <label for="" class="d-block fw-bold">From *</label>
                    <input type="text" id="from" class="form-control" name="from">
                </div>
                <div class="text-center col-md-2">
                    <label for="" class="d-block fw-bold">To *</label>
                    <input type="text" id="to"  class="form-control" name="to">
                </div>
                <div class="text-center col-md-3">
                    <label for="" class="d-block fw-bold">Date *</label>
                    <input type="date" id="date"  class="form-control" name="date">
                </div>
                <div class="text-center col-md-3">
                    <label for=""   class="d-block fw-bold">Pick Up Time *</label>
                    <input type="text" id="pickup" class="timepicker form-control" name="time">
                </div>
                <div class="text-center col-md-2 h-100 m-0 p-0">
                    <button type="button" class="book-btn d-block fw-bold fs-5" id="bookbtn">BOOK NOW</button>
                </div>
            </form>
        </section>
        {{-- floating input end --}}

        {{-- value --}}
        <section class="container value text-center d-flex ">
            <div>
                <h5 class="text-orange  fs-2 fw-semibold">Top Values For You</h5>
                <p class="mb-3 text-secondary">Try Variety of Benefits when using our services</p>
                <div class="row mt-5">
                    <section class="col-md-3 ">
                        <div class="icon-container fs-2 rounded-circle mx-auto text-white m-0 p-0">
                            <i class="fa-solid fa-camera"></i>
                        </div>
                        <h5 class="fw-bold text-orange my-2">Documentation</h5>
                        <small class="text-secondary">Our Female Tour Guide and Driver will document your journey, capturing every memorable moment. </small>
                    </section>
                    <section class="col-md-3 ">
                        <div class="icon-container fs-2 rounded-circle mx-auto text-white m-0 p-0">
                            <i class="fa-regular fa-calendar-check"></i>
                        </div>
                        <h5 class="fw-bold text-orange my-2">Easy Booking </h5>
                        <small class="text-secondary">Our seamless booking process ensures you can quickly arrange your Ubud day trip, nature adventure, or cultural exploration.</small>
                    </section>
                    <section class="col-md-3 ">
                        <div class="icon-container fs-2 rounded-circle mx-auto text-white m-0 p-0">
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h5 class="fw-bold text-orange my-2">Best Tour Guide</h5>
                        <small class="text-secondary">Our experienced Female Tour Guide and Driver will lead you through breathtaking landscapes and vibrant Balinese culture. </small>
                    </section>
                    <section class="col-md-3 ">
                        <div class="icon-container fs-2 rounded-circle mx-auto text-white m-0 p-0">
                            <i class="fa-solid fa-face-grin-wink"></i>
                        </div>
                        <h5 class="fw-bold text-orange my-2">Happy Tour</h5>
                        <small class="text-secondary"> Whether you're exploring nature, diving into Balinese culture, or enjoying an Ubud day trip, we promise a delightful and enriching experience.</small>
                    </section>
                </div>
            </div>

        </section>
        {{-- valueend --}}
    </div>
    {{--  about --}}
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
                    <h5 class="text-orange text-section fw-semibold d-none d-md-block">About Eva Bali Tour</h5>
                    <h5 class="fs-2 fw-semibold">Discover Bali with Eva: Your Friendly and Experienced Guide</h5>
                    <p class="mb-3 text-secondary" style="letter-spacing: 1px">Experience Bali in a whole new way with Eva, your friendly and experienced guide. Explore the island’s stunning natural beauty, from lush rice fields to amazing waterfalls. With Eva’s expert knowledge, you’ll find hidden gems, learn about local culture, and enjoy exciting adventures.</p>
                    <p class="mb-3 text-secondary" style="letter-spacing: 1px">Eva’s tours offer the perfect mix of relaxation and fun. Whether you’re visiting ancient temples, tasting traditional Balinese food, or discovering less-known spots, Eva will make sure you have a memorable experience.
                    </p>
                </div>

            </section>
            {{-- content end --}}

        </div>
    </div>
    {{-- about end --}}

    {{-- destination --}}
    <div class="container destination py-4 text-white text-center text-md-start">
        <h1 class=" my-3 text-center fw-semibold text-orange">Let's See Our Destinations</h1>
        <div class="swiper destinations rounded-3">
            <div class="swiper-wrapper">
                @foreach($destinations as $dst)
                <section class="swiper-slide">
                    <div class="position-relative d-flex justify-content-center h-100">
                        <img src="{{asset('storage/'.$dst->library->image)}}" class="w-100 h-100" alt="">
                        <section class="content position-absolute d-flex justify-content-center flex-column">
                            <h5 class="fs-1 fw-semibold">{{$dst->title}}</h5>
                            <h5 class="fw-semibold">{{$dst->category}}</h5>
                            <div>
                                {!! $dst->content !!}
                            </div>
                            <div>
                                <a href="/destinations/{{$dst->title}}" class="btn btn-orange">See More</a>
                            </div>
                        </section>
                        <div class="overlay"></div>
                    </div>
                </section>
                @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
    {{-- destination end --}}

    {{-- package --}}
    <div class="container packages position-relative bg-white">
        <h1 class="text-center fw-semibold text-orange">Tour Packages</h1>
        <p class="text-center text-secondary"> Let us be your gateway to unforgettable adventures.</p>
        <div class="package swiper">
            <div class="swiper-wrapper">
                @foreach ($packages as $pckg)
                <section class="swiper-slide">
                    <div class="card">
                        <img src="{{asset('storage/'.$pckg->library->image)}}" class="card-img-top" alt="">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h4 class="fs-5 fw-semibold text-orange">{{$pckg->title}}</h4>
                            <div>
                                {!!$pckg->features!!}
                            </div>
                            <div>
                                <p class="m-0" style="font-size: 12px">Start From</p>
                                <div class="d-flex align-items-end justify-content-between">
                                    <h1 class="fs-4 fw-semibold text-blue">{{$pckg->price}}k</h1>
                                    <a target="_blank" href="https://wa.me/62881038591236?text={{ urlencode('Hello, I want to book ' . $pckg->title . ' package') }}" class="btn btn-orange book-package">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                @endforeach
            </div>
        </div>
        <div class="my-3 text-center">
            <a href="/packages" class="btn btn-blue ">See More</a>
        </div>

    </div>
    {{-- package end--}}

    {{-- parallax  --}}
    <div class="container-fluid px-0 bg-white parallax-container position-relative">
        <img src="{{asset('img/parallax-top.png')}}" class="w-100 parallax-top container-fluid px-0 position-relative" alt="">
        <img src="{{asset('img/parallax.png')}}" class="w-100 parallax h-100" alt="">
        <img src="{{asset('img/parallax-bot.png')}}" class="w-100 parallax-bot" alt="">
        <div class="content-container w-100 d-flex justify-content-center">
            <div class="row content">
                <div class="col-md-6 text-center text-md-start">
                    <h1 class="fw-bold parallax-title">JOIN EVA BALI TOURS TODAY</h1>
                    <p class="fw-light text-white fs-12" style="letter-spacing: 2px">Ready for the ultimate Bali adventure? Book your tour with Eva Bali Tours and let us guide you through the island’s most captivating experiences. Your unforgettable Bali journey starts now! </p>
                    <a href="/#floatinginput" class="btn btn-orange">Book Now</a>
                </div>
            </div>

        </div>
        <div class="overlay"></div>

    </div>
    {{-- parallax end --}}

    {{-- gallery --}}
    <div class="container-fluid gallery-container px-0 pb-2 py-2">
        <h1 class="text-center text-orange fw-semibold my-4">Our Gallery</h1>
        <div class="swiper gallery">
            <div class="swiper-wrapper ">
                @foreach($gallery as $glr)
                <div class="swiper-slide p-0 m-0">
                    <img src="{{asset('storage'.$glr->library->image)}}" class="w-100 h-100" alt="" style="object-fit: cover">
                </div>
                @endforeach
            </div>
        </div>
    </div>
    {{-- gallery end --}}

    {{-- article --}}
    <div class="container articles py-3">
        <h1 class=" text-center text-orange fw-semibold">Let's See What's New</h1>
        <p class="text-center text-secondary">Let's see the newest article here</p>
        <div class="swiper article">
            <div class="swiper-wrapper">
                @foreach($articles as $article)
                <div class="swiper-slide">
                    <a href="" class="nav-link">
                        <img src="{{asset('storage/'.$article->library->image)}}" class="w-100 img-article" alt="">
                        <div>
                            <h2 class="fw-semibold fs-5">{{Str::limit($article->title,50)}}</h2>
                            {!!Str::limit($article->description,50)!!}
                        </div>
                        <div class="text-end">
                            <a href="/articles/" class="text-decoration-none text-orange">Read More</a>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    {{-- article end --}}

    {{-- testi --}}
    <div class="container testimoni-container my-4">
        <h1 class="text-center fw-semibold text-orange">Our Happy Customer Reviews</h1>
        <div class="swiper testimoni my-4">
            <div class="swiper-wrapper">
                @foreach($reviews as $review)
                <div class="swiper-slide text-center bg-orange-light px-5 py-3">
                    <img src="{{asset('img/colon.png')}}" class="my-3" alt="">
                    <p class="text-start">" {{$review->description}}"</p>
                    <h5 class="fw-semibold mb-0">{{$review->author}}</h5>
                    <p class="text-secondary">{{$review->job}}</p>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    {{-- testi end --}}
@endsection
