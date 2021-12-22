<x-admin-layout>
    <div class="container-fluid">
        <h1 class=" mt-4">Slider Utama</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Slider akan ditampilakan pada halaman utaman.
                </li>
            </ol>
        </nav>

        <div class="row mb-5">
            <div class="col-lg-12 d-flex justify-content-end">
                <a href="{{ url('/admin_slider/create') }}" class="btn btn-sm btn-primary">Tambah Slider</a>
            </div>
        </div>
    </div>

    @if (session('status'))
    <div class="alert alert-success alert-dismissible" role="alert">
        {{ session('status') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif


    <div class="row">
        @foreach($sliders as $item)
        <div class="col-lg-4">
            <div class="card-body">
                <div class="card">
                    <img src="{{ asset('theme/images/slider/'.$item->image) }}" class="img-thumbnail" height="300"
                        alt="{{ $item->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->title }}</h5>
                        <p class="card-text">{{ $item->description }}</p>

                        <div class="d-flex justify-content-center mt-5">
                            <a href="{{ url('/admin_slider/'.$item->id.'/edit') }}" class="btn btn-sm btn-primary m-1">Edit</a>
                            <a href="{{ url('/admin_slider/destroy/'.$item->id) }}" class="btn btn-sm btn-danger m-1">Hapus</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>


</x-admin-layout>