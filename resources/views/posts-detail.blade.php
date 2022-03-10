@extends('layouts.app')

@section('content')
<main>

      <!--=============== Blog ===============-->
      <section
        class="container blog"
      >
        <div class="row justify-content-center mt-5">
            <div class="col-12 mb-4">
                <div class="card post-detail pb-5 text-center">
                <img src="https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8dHJhdmVsJTIwYmFsaXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60"
                        alt="{{ $post->title }}">
                  <div class="post-detail-data">
                    <div class="card-post-data mt-2">
                      <span>Travel</span> <small> - {{ $post->created_at->diffForHumans() }}</small>
                      <h3 class="mt-1 px-2">{{ $post->title }}</h3>
                    </div>
                  </div>
                  <div class="card-body p-4 post-body">
                      {!! $post->content !!}
                  </div>
                </div>
            </div>
        </div>
      </section>

      <!-- <section class="container">
      <h3 class="text-center mb-4">Blog Lainnya</h3>
        <div class="row justify-content-center">

            @foreach(\App\Models\Post::get() as $post)
            <div class="col-lg-4 mb-4">
              <a href="{{ route('posts.show', $post) }}">
                <div class="card text-center p-4">
                  <h4 class="title mb-2">{{ $post->title }}</h4>
                  <span class="main-color"
                    >Posting <span href="#">{{ $post->created_at->diffForHumans() }}</span></span
                  >
                  <div class="card-body p-3">
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
      </section> -->
    </main>
@endsection

@push('style-alt')
  <style>
      .post-body p{
        text-align: left ;
        margin-top: 2rem;
      }
  </style>
@endpush