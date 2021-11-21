@extends('layouts.app')

@section('content')
    <main>
      <section class="container mt-5" style="margin-bottom: 70px">
        <div class="col-12 col-md">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a class="title-alt" href="{{ route('home') }}">Home</a>
              </li>
              <li class="breadcrumb-item main-color">Paket Detail</li>
            </ol>
          </nav>
        </div>

        <div class="col-12 col-md text-center">
          <h1 class="main-color">Lombok Tour</h1>
          <span class="title-alt">Lombok, Indonesia</span>
        </div>
      </section>

      <!--=============== Package Travel ===============-->
      <section class="container detail">
        <div class="swiper mySwiper detail-container">
          <div class="swiper-wrapper">
              
            @foreach($travelPackage->galleries as $gallery)
                <div class="detail-card swiper-slide">
                    <img
                        src="{{ Storage::url($gallery->path) }}"
                        alt=""
                        class="detail-img"
                    />
                </div>
            @endforeach

          </div>
        </div>

        <div class="row" style="margin-top: 120px">
          <div class="col-12 col-md-12 col-lg-7 mb-5">
            <div class="card border-0">
              <h3 class="fw-bolder title mb-4">Tentang Paket Wisata</h3>
              {!! $travelPackage->description !!}
            </div>
          </div>
          <div class="col-12 col-md-12 col-lg-5">
            <div class="card bordered card-form" style="padding: 30px 40px">
              <h4 class="text-center">Start Booking</h4>
              <div
                class="alert alert-secondary"
                style="background-color: #f5f5f5; border: 1px solid #f5f5f5"
                role="alert"
              >
                Duration: {{ $travelPackage->duration }}
              </div>
              <div
                class="alert alert-secondary"
                style="background-color: #f5f5f5; border: 1px solid #f5f5f5"
                role="alert"
              >
                Harga :
                <span class="text-gray-500 font-weight-light"
                  >IDR.{{ $travelPackage->price }}</span
                >
              </div>
              <h5 class="">Kirim Pembayaran</h5>
             <div class="card-bank d-flex align-items-center justify-content-around">
                <img height="40" width="80" src="data:image/jpeg;base64,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" alt="">
                <div class="card-bank-content d-flex flex-column">
                  <span>Abdul Aziz</span>
                  <b>098134856</b>
                </div>
             </div>
              <a onClick="return confirm('Apakah anda sudah membayar ?')" class="btn btn-book btn-block mt-3" href="https://api.whatsapp.com/send?phone=6281999483864&text= Saya mau pesan paket travel {{ $travelPackage->name }} berikut bukti pembayaran saya ! " target="_blank"
                >Continue to Book</a
              >
            </div>
          </div>
        </div>
      </section>
    </main>
@endsection

@push('style-alt')
    <link rel="stylesheet" href="{{ asset('frontend/assets/libraries/swipper/css/style.css') }}">
    <style>
        .swiper-container-3d .swiper-slide-shadow-left,
        .swiper-container-3d .swiper-slide-shadow-right {
        background-image: none;
      }
    </style>
@endpush

@push('script-alt')
    <script src="{{ asset('frontend/assets/libraries/swipper/js/app.js') }}"></script>
     <script>
      var swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        loop: true,
        spaceBetween: 32,
        coverflowEffect: {
          rotate: 0,
        },
      });
    </script>
@endpush
