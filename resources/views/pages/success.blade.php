@extends('layouts.success')
@section('title', 'Success')
@section('content')
    <main>
        <section class="container section-success-checkout">
            <div class="row justify-content-center">
                <div class="col text-center">
                    <a href=""><img src="{{ url('frontend/images/Group 3.png') }}" class="img-responsive" width="266px"
                            height="266px" alt=""></a>
                    <h1 class="mt-5">Yay! Success</h1>
                    <p>We've send you email for trip instruction <br> please read it as well</p>
                    <a href="{{ url('/') }}" class="btn btn-home px-4">Home Page</a>
                </div>
            </div>
        </section>
    </main>
@endsection
