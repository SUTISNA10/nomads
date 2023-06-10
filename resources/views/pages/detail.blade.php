@extends('layouts.app')

@section('title', 'Detail Travel')

@section('content')
<main>
    <!-- section details header -->
    <section class="section-details-header">    
    </section>

    <!-- section details content -->
    <section class="section-details-content">
        <div class="container">
            <!-- Bagian Breadcrumb -->
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                Paket Travel
                            </li>
                            <li class="breadcrumb-item active">
                                Details
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>

            <!-- Bagian card details -->
            <div class="row">
                <!-- Details Wisata -->
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details">
                        <h1>Nusa Penida</h1>
                        <p>Republic of Indonesia Raya</p>

                        <!-- Bagian gallery menggunakan library xzoom -->
                        <div class="gallery">
                            <div class="xzoom-container">
                                <img src="frontend/images/details.png" alt="details" class="xzoom" id="xzoom-default" xoriginal="frontend/images/details.png">
                            </div>
                            <div class="xzoom-thumbs">
                                <!-- Gambar thumbs 1 -->
                                <a href="frontend/images/details.png">
                                    <img src="frontend/images/details.png" alt="details-thumbs" class="xzoom-gallery" width="128" xpreview="frontend/images/details.png">
                                </a>

                                <!-- Gambar thumbs 2 -->
                                <a href="frontend/images/details.png">
                                    <img src="frontend/images/details.png" alt="details-thumbs" class="xzoom-gallery" width="128" xpreview="frontend/images/details.png">
                                </a>

                                <!-- Gambar thumbs 3 -->
                                <a href="frontend/images/details.png">
                                    <img src="frontend/images/details.png" alt="details-thumbs" class="xzoom-gallery" width="128" xpreview="frontend/images/details.png">
                                </a>

                                <!-- Gambar thumbs 4 -->
                                <a href="frontend/images/details.png">
                                    <img src="frontend/images/details.png" alt="details-thumbs" class="xzoom-gallery" width="128" xpreview="frontend/images/details.png">
                                </a>

                                <!-- Gambar thumbs 5 -->
                                <a href="frontend/images/details.png">
                                    <img src="frontend/images/details.png" alt="details-thumbs" class="xzoom-gallery" width="128" xpreview="frontend/images/details.png">
                                </a>

                            </div>
                        </div>
                        <h2>Tentang Wisata</h2>
                        <p>
                            Nusa Penida is an island southeast of Indonesia island Bali and a district of Klungkung Regency that includes the neighbouring small island of Nusa Lembongan. The Badung Strait separates the island and Bali. The interior of Nusa Penida is hilly with a maximum altitude of 524 metres. It is drier than the nearby island of Bali.
                        </p>
                        <p>
                            Bali and a district of Klungkung Regency that includes the neighbouring small island of Nusa Lembongan. The Badung Strait separates the island and Bali.
                        </p>

                        <!-- bagian features -->
                        <div class="row features">
                            <div class="col-md-4">
                                <img src="frontend/images/ic_event.png" alt="ic_event" class="features-image">
                                <div class="description">
                                    <h3>Featured Event</h3>
                                    <p>Tari Kecak</p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <img src="frontend/images/ic_language.png" alt="ic_language" class="features-image">
                                <div class="description">
                                    <h3>Language</h3>
                                    <p>Bahasa Indonesia</p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <img src="frontend/images/ic_foods.png" alt="ic_foods" class="features-image">
                                <div class="description">
                                    <h3>Foods</h3>
                                    <p>Local Foods</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <!-- Members trip information -->
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Members are going</h2>
                        <div class="members my-2">
                            <img src="frontend/images/member-1.png" alt="member-1" class="member-image mr-1">

                            <img src="frontend/images/member-2.png" alt="member-2" class="member-image mr-1">

                            <img src="frontend/images/member-3.png" alt="member-3" class="member-image mr-1">

                            <img src="frontend/images/member-4.png" alt="member-4" class="member-image mr-1">

                            <img src="frontend/images/member-5.png" alt="member-5" class="member-image mr-1">
                        </div>
                        <hr>
                        <h2>Trip Informations</h2>
                        <table class="trip-informations">
                            <tr>
                                <th width="50%">Date of Departure</th>
                                <td width="50%">22 Aug, 2019</td>
                            </tr>
                            <tr>
                                <th width="50%">Duration</th>
                                <td width="50%">4D 3N</td>
                            </tr>
                            <tr>
                                <th width="50%">Type</th>
                                <td width="50%">Open Trip</td>
                            </tr>
                            <tr>
                                <th width="50%">Price</th>
                                <td width="50%">$80.00 / Person</td>
                            </tr>
                        </table>
                    </div>

                    <!-- Button Join Now -->
                    <div class="join-container">
                        <a href="checkout.html" class="btn btn-block btn-join-now mt-3 py-2">
                            Join Now
                        </a>
                    </div>                        
                </div>


            </div>
        </div>
    </section>
</main>
@endsection

{{-- Mengarah ke stack prepend-style --}}
@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.css') }}">
@endpush

{{-- Mengarah ke stack addon-script --}}
@push('addon-script')
<script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>
<script>
    // Menggunakan library xzoom
    $(document).ready(function() {
        $('.xzoom, .xzoom-gallery').xzoom({
            zoomWidth: 500,
            title: false,
            tint:'#333',
            Xoffset: 15

        });
    });
</script>
@endpush