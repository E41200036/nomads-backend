@extends('layouts.app')

@section('title', 'Nomads')
@section('content')
    <!-- Header -->
    <header class="text-center">
        <h1>Explore The Beautiful World
            <br>As Easy One Click
        </h1>
        <p class="mt-3"></p>
        <p>You will see beautiful
            <br>moment you never see before
        </p>
        <a href="#" class="btn btn-get-started px-4 mt-4">Get Started</a>
    </header>

    <main>
        <!-- Statistik -->
        <div class="container">
            <section class="section-stats row  justify-content-center" id="stats">
                <div class="col-3 col-md-2 stats-detail">
                    <h2>20K</h2>
                    <p>Members</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>12</h2>
                    <p>Countries</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>3K</h2>
                    <p>Hotel</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>72</h2>
                    <p>Partners</p>
                </div>
            </section>
        </div>

        <!-- Wisata -->
        <section class="section-wisata" id="wisata">
            <div class="container">
                <div class="row text-center text-white">
                    <h1>Wisata Popular</h1>
                    <p>Something that you never try
                        <br>before in this world
                    </p>
                </div>
                <div class="row wisata-list text-white">
                    <div class="col-md wisata-item">
                        <div class="card bg-dark text-white">
                            <img src="{{ url('frontend/images/Group 7.jpg') }}" class="card-img" alt="wisata item 1">
                            <div class="card-img-overlay d-flex flex-column">
                                <div class="text-center">
                                    <h5 class="card-title">INDONESIA</h5>
                                    <h3>DERATAN, BALI</h3>
                                </div>
                                <div class="mt-auto text-center">
                                    <a href="{{ url('detail') }}" class="btn btn-detail-wisata">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md wisata-item">
                        <div class="card bg-dark text-white">
                            <img src="frontend/images/Group 8.jpg" class="card-img" alt="wisata item 1">
                            <div class="card-img-overlay d-flex flex-column">
                                <div class="text-center">
                                    <h5 class="card-title">INDONESIA</h5>
                                    <h3>DERATAN, BALI</h3>
                                </div>
                                <div class="mt-auto text-center">
                                    <a class="btn btn-detail-wisata">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md wisata-item">
                        <div class="card bg-dark text-white">
                            <img src="frontend/images/Group 9.jpg" class="card-img" alt="wisata item 1">
                            <div class="card-img-overlay d-flex flex-column">
                                <div class="text-center">
                                    <h5 class="card-title">INDONESIA</h5>
                                    <h3>DERATAN, BALI</h3>
                                </div>
                                <div class="mt-auto text-center">
                                    <a class="btn btn-detail-wisata">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md wisata-item">
                        <div class="card bg-dark text-white">
                            <img src="frontend/images/Group 10.jpg" class="card-img" alt="wisata item 1">
                            <div class="card-img-overlay d-flex flex-column">
                                <div class="text-center">
                                    <h5 class="card-title">INDONESIA</h5>
                                    <h3>DERATAN, BALI</h3>
                                </div>
                                <div class="mt-auto text-center">
                                    <a class="btn btn-detail-wisata">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Networks -->
        <section class="section-network" id="network">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3 network-slogan">
                        <h1>Our Networks</h1>
                        <p>Companies are trusted us
                            <br>more than just a trip
                        </p>
                    </div>
                    <div class="col text-end offset-md-1">
                        <div class="row">
                            <div class="col col-xl-3">
                                <img src="frontend/images/logo_partner.jpg" alt="">
                            </div>
                            <div class="col col-xl-3">
                                <img src="frontend/images/logo_partner-2.jpg" alt="">
                            </div>
                            <div class="col col-xl-3">
                                <img src="frontend/images/logo_partner-1.jpg" alt="">
                            </div>
                            <div class="col col-xl-3">
                                <img src="frontend/images/logo_partner-3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonial -->
        <section class="section-testimonial" id="testimonial">
            <div class="container">
                <div class="row text-center testimonial-slogan">
                    <h1>They Are Loving Us</h1>
                    <p>Moments were giving them
                        <br>the best experience
                    </p>
                </div>

                <div class="row testimonial-user">
                    <div class="col-md-4 testimonial-item text-center">
                        <div class="card">
                            <div class="card-body">
                                <img src="frontend/images/user1.png" class="rounded-circle" alt="">
                                <h3 class="mt-3">Angga Risky</h3>

                                <p class="mt-3">“ It was glorious and I could
                                    not stop to say wohooo for
                                    every single moment
                                    Dankeeeeee “</p>
                            </div>
                            <hr>
                            <p class="footer">Trip To Ubud</p>
                        </div>
                    </div>
                    <div class="col-md-4 testimonial-item text-center">
                        <div class="card">
                            <div class="card-body">
                                <img src="frontend/images/user2.jpg" class="rounded-circle" alt="">
                                <h3 class="mt-3">Shayna</h3>

                                <p class="mt-3">“ The trip was amazing and
                                    I saw something beautiful in
                                    that Island that makes me
                                    want to learn more “</p>
                            </div>
                            <hr>
                            <p class="footer">Trip To Nusa Penida</p>
                        </div>
                    </div>
                    <div class="col-md-4 testimonial-item text-center">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <img src="frontend/images/user3.jpg" class="rounded-circle" alt="">
                                    <h3 class="mt-3">Shabrina</h3>

                                    <p class="mt-3">“ I loved it when the waves
                                        was shaking harder — I was
                                        scared too “</p>
                                </div>
                            </div>
                            <hr>
                            <p class="footer">Trip To Karimun Jawa</p>
                        </div>
                    </div>
                </div>

                <div class="row text-center">
                    <div class="col">
                        <a class="btn btn-help me-3">I Need Help</a>
                        <a class="btn btn-get-started">Get Started</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
