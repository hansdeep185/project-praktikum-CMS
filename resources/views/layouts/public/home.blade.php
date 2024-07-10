@extends('layouts.public.app')

@section('content')
<header class="py-5">
    <div class="container px-5 pb-5">
        <div class="row gx-5 align-items-center">
            <div class="col-xxl-5">
                <!-- Header text content-->
                <div class="text-center text-xxl-start">
                    <div class="badge bg-gradient-primary-to-secondary text-white mb-4"><div class="text-uppercase">Rod &middot; Bait &middot; Spot</div></div>
                    <div class="fs-3 fw-light text-muted">Masukkan Tiketmu Disini</div>
                    <div style="text-align: center;">
                       
                    </div>
                </div>
            </div>
            <div class="col-xxl-7">
                <!-- Header profile picture-->
                <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                    <div class="profile bg-gradient-primary-to-secondary">
                        <!-- TIP: For best results, use a photo with a transparent background like the demo example below-->
                        <!-- Watch a tutorial on how to do this on YouTube (link)-->
                        <img class="profile-img" src="{{ asset('assets/public/assets/profile.png') }}" alt="..." />
                        <div class="dots-1">
                            <!-- SVG Dots-->
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 191.6 1215.4" style="enable-background: new 0 0 191.6 1215.4" xml:space="preserve">
                                <!-- SVG paths -->
                            </svg>
                            <!-- END of SVG dots-->
                        </div>
                        <div class="dots-2">
                            <!-- SVG Dots-->
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 191.6 1215.4" style="enable-background: new 0 0 191.6 1215.4" xml:space="preserve">
                                <!-- SVG paths -->
                            </svg>
                            <!-- END of SVG dots-->
                        </div>
                        <div class="dots-3">
                            <!-- SVG Dots-->
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 191.6 1215.4" style="enable-background: new 0 0 191.6 1215.4" xml:space="preserve">
                                <!-- SVG paths -->
                            </svg>
                            <!-- END of SVG dots-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="card-body">
        <table class="table table-sm table-striped table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nomor Tiket</th>
                    <th>Nama</th>
                </tr>
            </thead>
            <tbody>
               
            </tbody>
        </table>
    </div>
</div>
@endsection
