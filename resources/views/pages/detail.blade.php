@extends('layouts.app')
@section('title', 'Detail Travel')
@section('content')
    <main>
        <section class="section-detail">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Paket Travel</li>
                            <li class="breadcrumb-item active">Detail</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-detail-content container">
            <div class="row">
                <div class="col-md-8 card-detail border-2 border">
                    <h1>Nusa Penida</h1>
                    <p class="country">Republic of Indonesia Raya</p>

                    <!-- Gallery -->
                    <img src="frontend/images/pic_featured.png" alt="" class="img-fluid img-responsive img-header">

                    <!-- More Pic -->
                    <div class="row mt-4 more-pic">
                        <div class="col-md">
                            <img src="frontend/images/pic-4.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-md">
                            <img src="frontend/images/pic.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-md">
                            <img src="frontend/images/pic-1.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-md">
                            <img src="frontend/images/pic-2.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-md">
                            <img src="frontend/images/pic-3.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <!-- Detail -->
                    <div class="detail-wisata mt-5">
                        <h2>Tentang Wisata</h2>
                        <p>
                            Nusa Penida adalah sebuah pulau (=nusa) bagian dari negara Republik Indonesia yang
                            terletak
                            di sebelah tenggara Bali yang dipisahkan oleh Selat Badung. Di dekat pulau ini terdapat
                            juga
                            pulau-pulau kecil lainnya yaitu Nusa Ceningan dan Nusa Lembongan. Perairan pulau Nusa
                            Penida
                            terkenal dengan kawasan selamnya di antaranya terdapat di Crystal Bay, Manta Point, Batu
                            Meling, Batu Lumbung, Batu Abah, Toyapakeh dan Malibu Point.
                        </p>
                        <p>
                            Bali and a district of Klungkung Regency that includes the neighbouring small island of
                            Nusa Lembongan. The Badung Strait separates the island and Bali.
                        </p>
                    </div>

                    <!-- Category -->
                    <div class="row category mt-4">
                        <div class="col-md-3 border-end">
                            <div class="row my-auto">
                                <div class="col-md-2 me-4">
                                    <img src="frontend/icons/ic_event – 1.png" class="" alt="">
                                </div>
                                <div class="col">
                                    <div>
                                        <h5>Featured Event</h5>
                                        <p>Tari Kecak</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 border-end ms-4">
                            <div class="row my-auto">
                                <div class="col-md-2 me-4">
                                    <img src="frontend/icons/ic_bahasa.png" class="" alt="">
                                </div>
                                <div class="col">
                                    <div>
                                        <h5>Language</h5>
                                        <p>Bahasa Indonesia</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 ms-4">
                            <div class="row my-auto">
                                <div class="col-md-2 me-4">
                                    <img src="frontend/icons/ic_foods.png" class="" alt="">
                                </div>
                                <div class="col">
                                    <div>
                                        <h5>Foods</h5>
                                        <p>Local Food</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md ms-3 detail-right border border-2 bg-white border rounded-3">
                    <div class="detail">
                        <h2>Members are going</h2>
                        <div class="row mt-2">
                            <div class="col-md-1 me-3">
                                <img src="frontend/images/user1.png" width="40" height="40"
                                    class="rounded-circle img-responsive" alt="">
                            </div>
                            <div class="col-md-1 me-3">
                                <img src="frontend/images/user2.jpg" width="40" height="40"
                                    class="rounded-circle img-responsive" alt="">
                            </div>
                            <div class="col-md-1 me-3">
                                <img src="frontend/images/user3.jpg" width="40" height="40"
                                    class="rounded-circle img-responsive" alt="">
                            </div>
                            <div class="col-md-1">
                                <img src="frontend/images/user1.png" width="40" height="40"
                                    class="rounded-circle img-responsive" alt="">
                            </div>
                            <div class="col-md-1 more">
                                <span>9+</span>
                            </div>
                        </div>
                        <hr class="my-4">
                        <h2>Trip Informations</h2>
                        <div class="row d-flex justify-content-between">
                            <div class="col-md">
                                <span>Date of Departure</span>
                            </div>
                            <div class="col-md text-end">
                                <span class="text-muted">22 Aug, 2019</span>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-between">
                            <div class="col-md">
                                <span>Duration</span>
                            </div>
                            <div class="col-md text-end">
                                <span class="text-muted">4D 3N</span>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-between">
                            <div class="col-md">
                                <span>Type</span>
                            </div>
                            <div class="col-md text-end">
                                <span class="text-muted">Open Trip</span>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-between">
                            <div class="col-md">
                                <span>Price</span>
                            </div>
                            <div class="col-md text-end">
                                <span class="text-muted">$80,00 / person</span>
                            </div>
                        </div>
                    </div>
                    <div class="d-grid">
                        <a href="{{ route('checkout') }}" class="btn btn-join">Join Now</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
