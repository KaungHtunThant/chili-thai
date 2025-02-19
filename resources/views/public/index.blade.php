@extends('layouts.index')
@section('content')
    @include('components.carousel')
    @include('components.jumbotron')
    <section>
        <div class="container d-flex justify-content-center align-items-center text-light">
            <div class="p-5 row gx-5 align-items-center justify-content-center justify-content-lg-between">
                <div class="col-12 col-lg-5">
                    <h2 class="display-5 lh-1 mb-4">Delicious Dishes for Every Taste</h2>
                    <p class="lead fw-normal mb-5 mb-lg-0">From the creamy Tom Yum Soup to the spicy kick of Drunken Noodles,
                        our menu has something for everyone. Whether you love classic Pad Thai, crave a comforting Green
                        Curry, or want to try something new, check out our menu and find your new favorite!</p>
                </div>
                <div class="col-sm-8 col-md-6">
                    <div class=" px-sm-0"><img class="img-fluid " src="img/menu/menu-app-003.jpg" alt="..." /></div>
                </div>
            </div>
        </div>
    </section>
    @include('components.contact')
    @include('components.gallery')
@endsection
