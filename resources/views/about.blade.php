@extends('layouts.main')

@section('content')
<div class="container-fluid hero-section m-0 p-0">
    <div class="container content text-center text-md-start vh-100 text-white">
        {{-- img overlay  --}}
        <img src="{{asset('img/about-hero.jpg')}}" class="image-bg w-100 h-100" alt="">
        {{-- img overlay end --}}
        <div class="row h-100 d-flex flex-column justify-content-center">
            <section class="col-md-6 ">
                <h1 class="header-hero">GET CLOSER TO US</h1>
                <p class="" style="letter-spacing: 2px">Experience the magic of Bali with Eva Bali Tours. Explore stunning landscapes, immerse in rich culture, and create memories that last a lifetime.</p>

            </section>
        </div>
    </div>
</div>
<div class="container my-5 position-relative">
    <img src="{{asset('img/texture.png')}}" class="texture" alt="">
    <div class="row">
        <section class="col-md-6">
            <img src="{{asset('img/side-img.png')}}" class="w-100 h-100"  alt="">
        </section>
        <section class="col-md-6 px-2">
            <h3 class="fs-1 fw-semibold">About Us</h3>
            <p style="letter-spacing: 2px" class="text-secondary">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum vel quasi veniam ex, dignissimos reiciendis neque tenetur amet nemo nesciunt deserunt fugit, eum fugiat voluptas nostrum? Animi molestiae dolorum asperiores qui iusto! Nam non accusamus sint! Eos voluptatibus odio dolore! Cum perspiciatis illum ad minus quae corporis illo repudiandae id, accusantium, dolor esse laudantium iure! Aliquid perspiciatis dicta ducimus inventore ea, sit dolor reiciendis, totam commodi eius eaque assumenda delectus ipsum eos doloribus accusamus repudiandae rerum, veritatis qui illo optio? Nam laboriosam rem sed voluptatem magni hic enim iure, ratione cum quibusdam cumque corporis? Iure veritatis magni numquam minus at.</p>
        </section>
    </div>
</div>
<div class="container my-5">
    <div class="row">
        <section class="col-md-6">
            <h1 class="fs-1 fw-semibold">Why Choose Us?</h1>
            <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel eaque nesciunt mollitia est itaque consequuntur officiis delectus similique voluptatibus tempore.</p>
            <div>
                <div class="row align-items-starts">
                    <div class="col-1">
                        <span class="number-container d-flex justify-content-center align-items-center text-white   rounded-circle m-0 p-0 text-center">
                            <h1 class="fs-3 m-0 p-0">1</h1>
                        </span>
                    </div>
                    <div class="col-10 ps-5">
                        <h3 class="fw-semibold">Lorem Ipsum Dikir</h3>
                        <p class="text-secondary">Lorem ipsum dolor sit amet consectetur, adipisicing elit..</p>
                    </div>
                </div>
                <div class="row align-items-starts">
                    <div class="col-1">
                        <span class="number-container d-flex justify-content-center align-items-center text-white   rounded-circle m-0 p-0 text-center">
                            <h1 class="fs-3 m-0 p-0">2</h1>
                        </span>
                    </div>
                    <div class="col-10 ps-5">
                        <h3 class="fw-semibold">Lorem Ipsum Dikir</h3>
                        <p class="text-secondary">Lorem ipsum dolor sit amet consectetur, adipisicing elit..</p>
                    </div>
                </div>
                <div class="row align-items-starts">
                    <div class="col-1">
                        <span class="number-container d-flex justify-content-center align-items-center text-white   rounded-circle m-0 p-0 text-center">
                            <h1 class="fs-3 m-0 p-0">3</h1>
                        </span>
                    </div>
                    <div class="col-10 ps-5">
                        <h3 class="fw-semibold">Lorem Ipsum Dikir</h3>
                        <p class="text-secondary">Lorem ipsum dolor sit amet consectetur, adipisicing elit..</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="col-md-6">
            <img src="{{asset('img/about-img-why.png')}}" class="w-100" alt="" style="height: 35rem;object-fit:contain;object-position:center">
        </section>
    </div>
</div>
<div class="about-destination container-fluid px-0 py-5 position-relative">
    <img src="{{asset('img/overlay-barong.png')}}" class=" overlay-barong" alt="">
    <img src="{{asset('img/overlay-barong.png')}}" class=" overlay-barong barong-2 d-none d-md-block" alt="">
    <div class="container destination text-white text-center text-md-start">
        <h1 class="fs-3 text-center text-orange fw-semibold">Reccomended Itinerary for You!</h1>
        {{-- destination --}}
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
        {{-- destination end --}}
    </div>
</div>
<div class="container-fluid parallax-about px-0 mx-0 position-relative">
    <svg xmlns="http://www.w3.org/2000/svg" class="wave-about wave-1" style="height: fit-content" viewBox="0 0 1440 320"><path fill="#f7f7f7" fill-opacity="1" d="M0,160L48,186.7C96,213,192,267,288,261.3C384,256,480,192,576,165.3C672,139,768,149,864,165.3C960,181,1056,203,1152,202.7C1248,203,1344,181,1392,170.7L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
    <div class="content flex-column">
        <div class="w-md-50 mx-auto text-center">
            <h1 class="fw-bold">EXPERIENCE THE BEAUTY OF BALI</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores, unde. Ipsa, beatae tempora officiis culpa autem cumque! Nostrum, esse porro!</p>
            <a href="" class="btn btn-orange">Contact Us</a>
        </div>

    </div>
    <div class="overlay"></div>
    <img src="{{asset('img/img-about-2.jpg')}}" class="w-100 h-100" alt="" style="object-fit: cover">
    <svg xmlns="http://www.w3.org/2000/svg" class="wave-about wave-2" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,160L48,186.7C96,213,192,267,288,261.3C384,256,480,192,576,165.3C672,139,768,149,864,165.3C960,181,1056,203,1152,202.7C1248,203,1344,181,1392,170.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
</div>

@endsection
