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
         
         @foreach($posts as $post)
            <div class="col-lg-6 mb-4">
              <a href="{{ route('posts.show', $post) }}">
                <div class="card text-center p-4">
                  <h4 class="title mb-2">{{ $post->title }}</h4>
                  <span class="main-color"
                    >User Post <span href="#">{{ $post->created_at }}</span></span
                  >
                  <div class="card-body p-4">
                    <img
                      src="{{ Storage::url($post->image) }}"
                      alt=""
                    />
                    <p class="title-alt mt-5">
                      {{ $post->excerpt }}
                    </p>
                  </div>
                </div>
              </a>
            </div>
          @endforeach
        </div>
      </section>
    </main>
@endsection