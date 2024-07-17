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
<div class="container my-5">
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
<div class="container">
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
@endsection
