@extends('admin.layout')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Paket Travel - {{ $travelPackage->name }}</h1>
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
    <div class="row">
        <div class="col-lg-4 mb-4">
        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('admin.travel-packages.update', $travelPackage ) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $travelPackage->name }}" />
                    </div>
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" id="location" name="location" value="{{ $travelPackage->location }}" }}" />
                    </div>
                    <div class="form-group">
                        <label for="duration">Duration</label>
                        <input type="text" class="form-control" id="duration" name="duration" value="{{ $travelPackage->duration }}" }}" />
                    </div>
                    <div class="form-group">
                        <label for="description">description</label>
                        <textarea name="description" id="description" rows="5" class="d-block w-100 form-control">{{ $travelPackage->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" id="price" name="price" value="{{ $travelPackage->price }}" />
                    </div>
                  <button type="submit" class="btn btn-primary btn-block">Edit</button>
                </form>
            </div>
        </div>
        </div>

        <div class="col-lg-8">
        <div class="card shadow">

            <div class="card-body">

                @if(session('message'))
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        <strong>{{ session('message') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <div class="table-responsive">
                    <table class="table table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($travelPackage->galleries as $gallery)
                            <tr>
                                <td>{{ $gallery->id }}</td>
                                <td>
                                    <img width="140" src="{{ Storage::url($gallery->path) }}" alt="">
                                </td>
                                <td>
                                    <a href="{{ route('admin.travel-packages.galleries.edit', [$travelPackage,$gallery]) }}" class="btn btn-info">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    <form  class="d-inline" action="{{ route('admin.travel-packages.galleries.destroy',  [$travelPackage,$gallery]) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button onClick="return confirm('Are you sure !')" class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center">Data Kosong</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card-body">
                <form action="{{ route('admin.travel-packages.galleries.store', $travelPackage ) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="path">Add Images</label>
                        <input type="file" class="form-control" id="path" name="path" />
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Save Image</button>
                </form>
            </div>
        </div>
    </div>
</div>
       
    

    <!-- Content Row -->

</div>
@endsection