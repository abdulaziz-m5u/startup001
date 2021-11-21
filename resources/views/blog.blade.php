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
          height: 50vh;
          background-image: url('https://media.istockphoto.com/photos/selfie-of-girl-with-turtle-underwater-picture-id950473038?b=1&k=20&m=950473038&s=170667a&w=0&h=o60q1wOQMimHuch1T9KSwGFgehQpwPcxfKtiw0khhZ4=');
        "
      >
        <div
          class="hero-content h-100 d-flex justify-content-center align-items-center flex-column"
        >
          <h1 class="text-center text-white display-4">
            Tips & trik travel to Lombok
          </h1>

          <hr width="40" class="text-center" />
        </div>
      </section>

      <!--=============== Blog ===============-->
      <section
        class="container blog"
        style="margin-top: -140px; z-index: 2; position: relative"
      >
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