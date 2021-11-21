@extends('layouts.app')

@section('content')
<main>
      <!--=============== HOME ===============-->
      <section
        class="hero"
        id="hero"
        style="
          background-repeat: no-repeat;
          background-size: cover;
          height: 100vh;
          background-image: url('https://images.unsplash.com/photo-1605752660759-2db7b7de8fa9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8c2VuZ2dpZ2klMjBiZWFjaHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60');
        "
      >
        <div
          class="hero-content h-100 d-flex justify-content-center align-items-center flex-column"
        >
          <h1 class="text-center text-white display-4">
            Explore surganya lombok
          </h1>
          <a href="#package" class="btn btn-hero mt-5">Book Now</a>
        </div>
      </section>

      <!--=============== Why us ===============-->
      <section class="container why-us text-center">
        <h2 class="section-title">Kenapa Memilih Kami</h2>
        <hr width="40" class="text-center" />
        <div class="row mt-5">
          <div class="col-lg-4 mb-3">
            <div class="card pt-4 pb-3 px-2">
              <div class="why-us-content">
                <i class="bx bx-money why-us-icon mb-4"></i>
                <h4 class="mb-3">Save Money</h4>
                <p>
                  Paket liburan yang terjangkau & berkualitas bagi semua jenis
                  wisatawan
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-3">
            <div class="card pt-4 pb-3 px-2">
              <div class="why-us-content">
                <i class="bx bxs-heart why-us-icon mb-4"></i>
                <h4 class="mb-3">Stay Safe</h4>
                <p>
                  Menjamin keamanan dan kenyamanan anda melalui standard
                  operasional yang professional.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-3">
            <div class="card pt-4 pb-3 px-2">
              <div class="why-us-content">
                <i class="bx bx-timer why-us-icon mb-4"></i>
                <h4 class="mb-3">Save Time</h4>
                <p>
                  Anda tidak perlu bingung tentang pemilihan hotel, restaurant
                  semua kami yang atur.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--=============== Package ===============-->
      <section class="container package text-center" id="package">
        <h2 class="section-title">Paket Travel</h2>
        <hr width="40" class="text-center" />
        <div class="row mt-5 justify-content-center">

        @foreach($travelPackages as $travelPackage)
          <div class="col-lg-3" style="margin-bottom: 140px">
            <div class="card package-card">
              <a href="{{ route('detail', $travelPackage) }}" class="package-link">
                <div class="package-wrapper-img overflow-hidden">
                  <img
                    src="{{ Storage::url($travelPackage->galleries->first()->path) }}"
                    class="img-fluid"
                  />
                </div>
                <div class="package-price d-flex justify-content-center">
                  <span class="btn btn-light position-absolute package-btn">
                    ${{ $travelPackage->price }}
                  </span>
                </div>
                <h5 class="btn position-absolute w-100">
                  {{ $travelPackage->name }}
                </h5>
              </a>
            </div>
          </div>
        @endforeach

        </div>
      </section>

      <!--=============== Video ===============-->
      <section class="container text-center">
        <h2 class="section-title">Video Tour</h2>
        <hr width="40" class="text-center" />
        <div class="row mt-5">
          <div class="col-12">
            <iframe
              width="100%"
              height="500px"
              src="https://www.youtube.com/embed/lyGaTk4MLVM?controls=1"
            >
            </iframe>
          </div>
        </div>
      </section>

      <!--=============== Blog ===============-->
      <section class="container blog text-center">
        <h2 class="section-title">Our Blog</h2>
        <hr width="40" class="text-center" />

        <div class="row mt-5">
          <div class="col-lg-6 mb-4">
            <a href="">
              <div class="card text-center p-4">
                <h4 class="title mb-2">Cara gratis travel ke lombok</h4>
                <span class="main-color"
                  >User Post <span href="#">12 Juni 1999</span></span
                >
                <div class="card-body p-4">
                  <img
                    src="https://media.istockphoto.com/photos/travelling-tools-picture-id489556478?b=1&k=20&m=489556478&s=170667a&w=0&h=Lk8r0IMv8D6oXSjierkw8hMOUNWaucX4XNgtTOr33nk="
                    alt=""
                  />
                  <p class="title-alt mt-5">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id
                    cupiditate excepturi enim provident impedit rerum, commodi
                    voluptatibus iusto distinctio natus.
                  </p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-6 mb-4">
            <a href="">
              <div class="card text-center p-4">
                <h4 class="title mb-2">Cara gratis travel ke lombok</h4>
                <span class="main-color"
                  >User Post <span href="#">12 Juni 1999</span></span
                >
                <div class="card-body p-4">
                  <img
                    src="https://media.istockphoto.com/photos/travelling-tools-picture-id489556478?b=1&k=20&m=489556478&s=170667a&w=0&h=Lk8r0IMv8D6oXSjierkw8hMOUNWaucX4XNgtTOr33nk="
                    alt=""
                  />
                  <p class="title-alt mt-5">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id
                    cupiditate excepturi enim provident impedit rerum, commodi
                    voluptatibus iusto distinctio natus.
                  </p>
                </div>
              </div>
            </a>
          </div>
        </div>
      </section>
    </main>
@endsection
