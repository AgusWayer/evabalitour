@extends('layouts.main')
@section('content')
<div class="container-fluid hero-section m-0 p-0">
    <div class="container content text-center text-md-start vh-100 text-white">
        {{-- img overlay  --}}
        <img src="{{asset('img/hero-package.jpg')}}" class="image-bg w-100 h-100" alt="">
        <div class="overlay"></div>
        {{-- img overlay end --}}
        <div class="row h-100 d-flex flex-column justify-content-center">
            <section class="col-md-6 ">
                <h1 class="header-hero">LET'S SEE OUR PACKAGES</h1>
                <p class="" style="letter-spacing: 2px">Discover a variety of tour packages tailored to your interests and preferences. From serene beach escapes to thrilling adventure tours, Eva Bali Tours offers something for everyone. Explore our packages and find the perfect one to make your Bali experience truly unique and memorable.</p>

            </section>
        </div>
    </div>
</div>
<div class="container package py-5">
    <h1 class="text-center fw-semibold text-orange my-4">Eva Bali Tours Package </h1>
    <div class="row g-3">
            @foreach ($packages as $pckg)
            <div class="col-md-3 col-6">
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
                                    <a  target="_blank" href="https://wa.me/62881038591236?text={{ urlencode('Hello, I want to book ' . $pckg->title . ' package') }}" class="btn btn-orange book-package">Book Now</a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            @endforeach

    </div>
    <div>{{$packages->links()}}</div>
</div>
@endsection
