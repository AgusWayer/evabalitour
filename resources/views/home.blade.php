@extends('layouts.main')

@section('content')
    <div class="container-fluid hero-section m-0 p-0">
        <div class="container content text-center text-md-start vh-100 text-white">
            <img src="{{asset('img/img-hero.webp')}}" class="image-bg w-100 h-100" alt="">
            <div class="row h-100 d-flex flex-column justify-content-center">
                <section class="col-md-6">
                    <h1 class="header-hero">EXPLORE BALI</h1>
                    <p class="" style="letter-spacing: 2px">Experience the magic of Bali with Eva Bali Tours. Explore stunning landscapes, immerse in rich culture, and create memories that last a lifetime.</p>
                    <a href="" class="btn btn-orange">Ask Question</a>
                </section>
            </div>
        </div>
    </div>
    <div class="container">
        <section class="floating-input">
            <form action="" class="row align-items-center  form ">
                <div class="text-center col-md-2">
                    <label for="" class="d-block">From *</label>
                    <input type="text" class="form-control" name="from">
                </div>
                <div class="text-center col-md-2">
                    <label for="" class="d-block">To *</label>
                    <input type="text" class="form-control" name="to">
                </div>
                <div class="text-center col-md-3">
                    <label for="" class="d-block">Date *</label>
                    <input type="date" class="form-control" name="date">
                </div>
                <div class="text-center col-md-3">
                    <label for="" class="d-block">Pick Up Time *</label>
                    <input type="text" class="form-control" name="time">
                </div>
                <div class="text-center col-md-2 h-100 m-0 p-0">
                    <button class="book-btn d-block ">BOOK NOW</button>
                </div>
            </form>
        </section>
    </div>
@endsection
