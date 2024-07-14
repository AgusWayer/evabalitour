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
                <p class="mb-3 text-secondary">Try Variety of Benefits when using our services</p>
                <div class="row mt-5">
                    <section class="col-md-3 ">
                        <div class="icon-container fs-2 rounded-circle mx-auto text-white m-0 p-0">
                            <i class="fa-regular fa-paper-plane"></i>
                        </div>
                        <h5 class="fw-bold text-orange my-2">Airport Pickup</h5>
                        <small class="text-secondary">Enjoy seamless and stress- transportation with our airport pickup service.</small>
                    </section>
                    <section class="col-md-3 ">
                        <div class="icon-container fs-2 rounded-circle mx-auto text-white m-0 p-0">
                            <i class="fa-regular fa-calendar-check"></i>
                        </div>
                        <h5 class="fw-bold text-orange my-2">Easy Booking </h5>
                        <small class="text-secondary">Enjoy seamless and stress- transportation with our airport pickup service.</small>
                    </section>
                    <section class="col-md-3 ">
                        <div class="icon-container fs-2 rounded-circle mx-auto text-white m-0 p-0">
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h5 class="fw-bold text-orange my-2">Best Tour Guide</h5>
                        <small class="text-secondary">Enjoy seamless and stress- transportation with our airport pickup service.</small>
                    </section>
                    <section class="col-md-3 ">
                        <div class="icon-container fs-2 rounded-circle mx-auto text-white m-0 p-0">
                            <i class="fa-solid fa-face-grin-wink"></i>
                        </div>
                        <h5 class="fw-bold text-orange my-2">Happy Tour</h5>
                        <small class="text-secondary">Enjoy seamless and stress- transportation with our airport pickup service.</small>
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
                    <p class="mb-3 text-secondary" style="letter-spacing: 1px">Experience the best of Bali with Great Bali Tours. From tranquil beaches to thrilling adventures, our expert team crafts personalized journeys that exceed expectations. Let us unlock the magic of Bali for you.</p>
                    <p class="mb-3 text-secondary" style="letter-spacing: 1px">Immerse yourself in Bali's rich culture, where every temple tells a story and every dance embodies tradition. Our curated experiences offer unique insights into local customs, allowing you to connect deeply with the island's heritage. Whether it's participating in traditional ceremonies, learning Balinese cooking, or exploring vibrant markets, we invite you to discover the soul of Bali with us.</p>
                </div>

            </section>
            {{-- content end --}}

        </div>
    </div>
    {{-- about end --}}

    {{-- destination --}}
    <div class="container destination py-4 text-white text-center text-md-start">
        <div class="swiper destinations rounded-3">
            <div class="swiper-wrapper">
                @for ($i = 1; $i < 3; $i++)
                <section class="swiper-slide">
                    <div class="position-relative d-flex justify-content-center h-100">
                        <img src="{{asset('img/dest-'.$i.'.jpg')}}" class="w-100 h-100" alt="">
                        <section class="content position-absolute d-flex justify-content-center flex-column">
                            <h5 class="fs-1 fw-semibold">Uluwatu</h5>
                            <h5 class="fw-semibold">Balinese Performing Arts</h5>
                            <p>Uluwatu Temple  is  well known as a name of Hinduism temple which is located on southern part of Bali. Ulu Meaning land’s and watu meaning rock.  This name truly presents this temple as it is found at Bali’s.</p>
                            <div>
                                <a href="" class="btn  btn-orange">See More</a>
                            </div>
                        </section>
                        <div class="overlay"></div>
                    </div>
                </section>
                @endfor
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
                @for ($i = 1;$i < 3;$i++)
                <section class="swiper-slide">
                    <div class="card">
                        <img src="{{asset('img/dest-'.$i.'.jpg')}}" class="card-img-top" alt="">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h4 class="fs-5 fw-semibold text-orange">Scooter Transport Tour</h4>
                            <div>
                                <ul class="text-secondary">
                                    <li>Airport pickup</li>
                                    <li>Photographer session</li>
                                    <li>Ceremony purification group</li>
                                </ul>
                            </div>
                            <div>
                                <p class="m-0" style="font-size: 12px">Start From</p>
                                <div class="d-flex align-items-end justify-content-between">
                                    <h1 class="fs-4 fw-semibold text-blue">450k</h1>
                                    <a href="" class="btn btn-orange book-package">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                @endfor
            </div>
        </div>
        <div class="my-3 text-center">
            <a href="" class="btn btn-blue ">See More</a>
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
                    <h1 class="fw-bold parallax-title">PLAN YOUR TRIP</h1>
                    <p class="fw-light text-white fs-12" >Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum error rem voluptates et nostrum eos dolorem officia, voluptatibus cupiditate architecto harum dolores ea perferendis quisquam ad nam commodi at aut reiciendis voluptatem eum adipisci delectus tempore illum! A perferendis veritatis quae debitis aperiam dolor autem, nam, rerum illum beatae at et tenetur nostrum sint corporis? </p>
                    <a href="" class="btn btn-orange">Book Now</a>
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
                @for($i = 1; $i < 10; $i++)
                <div class="swiper-slide p-0 m-0">
                    <img src="{{asset('img/dest-1.jpg')}}" class="w-100 h-100" alt="" style="object-fit: cover">
                </div>
                @endfor
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
                @for($i = 0; $i < 10; $i++)
                <div class="swiper-slide">
                    <a href="" class="nav-link">
                        <img src="{{asset('img/dest-1.jpg')}}" class="w-100 img-article" alt="">
                        <div>
                            <h2 class="fw-semibold fs-5">{{Str::limit('Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam, consectetur.',50)}}</h2>
                            <p>{{Str::limit('Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda deleniti fuga fugit similique eveniet expedita neque distinctio, quam in natus iure ut molestias!',50)}}</p>
                        </div>
                        <div class="text-end">
                            <a href="" class="text-decoration-none text-orange">Read More</a>
                        </div>
                    </a>
                </div>
                @endfor
            </div>
        </div>
    </div>
    {{-- article end --}}

    {{-- testi --}}
    <div class="container testimoni-container my-4">
        <h1 class="text-center fw-semibold text-orange">Our Happy Customer Reviews</h1>
        <div class="swiper testimoni my-4">
            <div class="swiper-wrapper">
                @for($i = 0; $i < 10; $i++)
                <div class="swiper-slide text-center bg-orange-light px-5 py-3">
                    <img src="{{{asset('img/colon.png')}}}" class="my-3" alt="">
                    <p class="text-start">" Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta quis tenetur dolorem, unde obcaecati doloremque fuga, iusto possimus, nemo rem blanditiis magnam illum adipisci voluptatibus cupiditate numquam explicabo ratione voluptas? Sapiente blanditiis ex, delectus quod, alias unde beatae similique saepe, aperiam autem incidunt! Delectus nemo nulla at blanditiis debitis ex reprehenderit repellendus rem incidunt unde eaque "</p>
                    <h5 class="fw-semibold mb-0">Sarah Nambayong</h5>
                    <p class="text-secondary">Solo Traveler</p>
                </div>
                @endfor

            </div>
        </div>
    </div>
    {{-- testi end --}}
@endsection
