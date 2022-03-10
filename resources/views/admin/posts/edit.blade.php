@extends('admin.layout')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit {{ $post->title }}</h1>
    </div>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<!-- Content Row -->
        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" />
                    </div>
                    <div class="form-group">
                        <label for="excerpt">Excerpt</label>
                        <input type="text" class="form-control" id="excerpt" name="excerpt" value="{{ $post->excerpt }}" />
                    </div>
                    @if($post->image)
                        <img src="{{ Storage::url($post->image) }}"  width="200" alt="">
                    @endif
                    <div class="form-group">
                        <label for="image">Image</label> 
                        <input type="file" class="form-control" valeu="{{ $post->image }}" id="image" name="image" />
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea name="content" id="description" class="form-control">{{ $post->content }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                </form>
            </div>
        </div>
    

    <!-- Content Row -->

</div>
@endsection

@push('script-alt')
<script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#description' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endpush