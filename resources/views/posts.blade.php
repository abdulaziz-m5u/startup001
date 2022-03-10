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
           All Blog
          </h1>

          <hr width="40" class="text-center" />
        </div>
      </section>

      <!--=============== Blog ===============-->
      <section
        class="container blog"
        style="margin-top: -140px; z-index: 2; position: relative"
      >
        <div class="row justify-content-center mt-5">
         
        @foreach($posts as $post)
          <div class="col-lg-4 mb-4 blogpost">
            <a href="{{ route('posts.show', $post)  }}">
              <div class="card-post">
                <div class="card-post-img">
                  <img src="https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8dHJhdmVsJTIwYmFsaXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60"
                    alt="{{ $post->title }}">
                </div>
                <div class="card-post-data">
                  <span>Travel</span> <small>- {{ $post->created_at->diffForHumans() }}</small>
                  <h5>{{ $post->title }}</h5>
                </div>
              </div>
            </a>
          </div>
        @endforeach
        </div>
      </section>
    </main>
@endsection