@extends('layouts.app')

@section('content')
<main>

      <!--=============== Blog ===============-->
      <section
        class="container blog"
      >
        <div class="row justify-content-center mt-5">
            <div class="col-lg-9 mb-4">
                <div class="card p-5">
                  <h2 class="title mb-2">{{ $post->title }}</h2>
                  <span class="main-color"
                    >User Post <span href="#">{{ $post->created_at }}</span></span
                  >
                  <div class="card-body p-4">
                    <img class="img-fluid text-center"
                      src="{{ Storage::url($post->image) }}"
                      alt=""
                    />
                    <p class="title-alt mt-5">
                      {!! $post->content !!}
                    </p>
                  </div>
                </div>
            </div>
        </div>
      </section>

      <section class="container">
      <h3 class="text-center mb-4">Article Lainnnya</h3>
        <div class="row justify-content-center">

            @foreach(\App\Models\Post::get() as $post)
            <div class="col-lg-4 mb-4">
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