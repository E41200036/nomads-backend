@extends('layouts.app')
@section('title', 'Checkout')
@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/libraries/vitalets-bootstrap-datepicker-c7af15b/css/datepicker.css') }}">
@endpush

@section('content')
    <main>
        <section class="section-detail">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Paket Travel</li>
                            <li class="breadcrumb-item">Detail</li>
                            <li class="breadcrumb-item active">Checkout</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-detail-content container">
            <div class="row">
                <div class="col-md-8 card-detail border-2 border">
                    <h1>Who is Going?</h1>
                    <p class="country">Trip to ubud, Indonesia, Bali</p>

                    <div class="attendee">
                        <table class="table table-responsive table-borderless text-center align-middle">
                            <thead>
                                <tr>
                                    <td>Picture</td>
                                    <td>Name</td>
                                    <td>Nationality</td>
                                    <td>VISA</td>
                                    <td>Passport</td>
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="{{ url('frontend/images/user1.png') }}" width="60" height="60"
                                            class="img-responsive rounded-circle" alt="">
                                    </td>
                                    <td>Angga Risky</td>
                                    <td>CN</td>
                                    <td>N/A</td>
                                    <td>Active</td>
                                    <td>
                                        <img src="{{ url('frontend/images/ic_remove.png') }}" width="18" height="18"
                                            alt="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="frontend/images/user2.jpg" width="60" height="60"
                                            class="img-responsive rounded-circle" alt="">
                                    </td>
                                    <td>Galih Pratama</td>
                                    <td>SG</td>
                                    <td>30 Days</td>
                                    <td>Active</td>
                                    <td>
                                        <img src="{{ url('frontend/images/ic_remove.png') }}" width="18" height="18"
                                            alt="">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h2>Add Member</h2>
                    <form action="" class="form-inline">
                        <div class="row g-3">
                            <div class="col">
                                <input type="text" name="username" class="form-control mb-2 me-sm-2"
                                    placeholder="Username">
                            </div>
                            <div class="col">
                                <select name="inputVisa" class="form-select custom-select mb-2 me-sm-2">
                                    <option value="VISA">VISA</option>
                                    <option value="30days">30 Days</option>
                                    <option value="na">N/A</option>
                                </select>
                            </div>
                            <div class="col">
                                <div class="input-group">
                                    <input type="text" name="inputDoePassport" class="form-control" value="02/16/12"
                                        data-date-format="mm/dd/yy" id="datepicker">
                                    <span class="input-group-text bg-white">
                                        <img src="frontend/images/ic_doe.png" width="20" height="20" alt="">
                                    </span>
                                </div>
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-add-now px-4">Add Now</button>
                            </div>
                        </div>
                    </form>

                    <div class="note">
                        <h3>Note</h3>
                        <p class="text-muted">You are only able to invite member that has registered in Nomads</p>
                    </div>

                </div>
                <div class="col-md ms-3 border border-2 bg-white rounded-3 checkout-information p-0">
                    <div class="detail-information p-4">
                        <h4>Checkout Information</h4>

                        <div class="d-flex justify-content-between">
                            <span>Members</span>
                            <span class="text-muted">2 Person</span>
                        </div>
                        <div class="d-flex justify-content-between mt-1">
                            <span>Addtional VISA</span>
                            <span class="text-muted">$ 190,00</span>
                        </div>
                        <div class="d-flex justify-content-between mt-1">
                            <span>Trip Price</span>
                            <span class="text-muted">$ 80,00 / person</span>
                        </div>
                        <div class="d-flex justify-content-between mt-1">
                            <span>Sub Total</span>
                            <span class="text-muted">$ 280,00</span>
                        </div>
                        <div class="d-flex justify-content-between mt-1">
                            <span>Total (+Unique Code)</span>
                            <span class="text-primary fw-bold">$ 279,<span class="text-warning">33</span></span>
                        </div>
                        <hr class="my-4">

                        <div class="payment-instruction">
                            <h4>Payment Instructions</h4>
                            <p class="text-muted w-80">Please complete your payment before to continue the wonderful
                                trip</p>
                        </div>

                        <div class="admin-cards">
                            <div class="d-flex">
                                <img src="{{ url('frontend/icons/ic_bank – 1.png') }}" width="45px" height="45px"
                                    class="me-0" alt="">
                                <div class="ms-0">
                                    <ul>
                                        <li>PT Nomads ID</li>
                                        <li>0881 7998 001</li>
                                        <li>Bank Central Asia</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex">
                                <img src="{{ url('frontend/icons/ic_bank – 1.png') }}" width="45px" height="45px"
                                    class="me-0" alt="">
                                <div class="ms-0">
                                    <ul>
                                        <li>PT Nomads ID</li>
                                        <li>0881 2334 002</li>
                                        <li>Bank Republik Indonesia</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-grid p-0 mt-3">
                        <a href="{{ route('success-checkout') }}" class="btn btn-payment py-2">
                            I Have Made Payment
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('addon-script')
    <script src="{{ url('frontend/libraries/vitalets-bootstrap-datepicker-c7af15b/js/bootstrap-datepicker.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#datepicker').datepicker()
        })
    </script>
@endpush
