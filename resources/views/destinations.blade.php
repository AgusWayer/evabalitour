@extends('layouts.main')
@section('content')
<div class="container-fluid hero-section m-0 p-0">
    <div class="container content text-center text-md-start vh-100 text-white">
        {{-- img overlay  --}}
        <img src="{{asset('img/imga.jpg')}}" class="image-bg w-100 h-100" alt="">
        <div class="overlay"></div>
        {{-- img overlay end --}}
        <div class="row h-100 d-flex flex-column justify-content-center">
            <section class="col-md-6 ">
                <h1 class="header-hero">EXPLORE THE DESTINATIONS IN BALI</h1>
                <p class="" style="letter-spacing: 2px">Explore the breathtaking destinations of Bali with Eva Bali Tours. From lush rice terraces and sacred temples to pristine beaches and vibrant markets, our tours cover the most beautiful and culturally rich spots on the island. Let us guide you through Bali’s wonders and create memories that will last a lifetime</p>

            </section>
        </div>
    </div>
</div>
<div class="container destinations my-5">
    <h1 class="fw-semibold text-orange text-center mb-3 ">Our Destinations</h1>
    <div class="row g-0">
        @foreach($destinations as $dst)
            <a href="" class="col-md-3 col-6 position-relative destination-place" style="overflow: hidden">
                <div class="content text-white position-absolute top-0 h-100 d-flex flex-column justify-content-end p-3 w-100" style="background-image: linear-gradient(rgba(0,0,0,.1),rgba(0,0,0,.8));z-index: 5;">
                    <h1 class="fw-semibold">{{$dst->title}}</h1>
                    <p>{!! $dst->description!!}</p>
                </div>
                <img src="{{asset('storage/'.$dst->library->image)}}" class="w-100 img-dest" style="height: 25rem; object-fit: cover" alt="">
            </a>
        @endforeach
    </div>
    <div>{{$destinations->links()}}</div>
</div>
@endsection
