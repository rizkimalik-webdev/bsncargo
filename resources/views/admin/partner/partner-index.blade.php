<x-admin-layout>
    <div class="container-fluid">
        <h1 class=" mt-4">Partner Perusahaan</h1>
        <div class="row mb-5">
            <div class="col-lg-12 d-flex justify-content-end">
                <a href="{{ url('/admin_partner/create') }}" class="btn btn-sm btn-primary">Tambah Partner</a>
            </div>
        </div>
    </div>

    @if (session('status'))
    <div class="alert alert-success alert-dismissible" role="alert">
        {{ session('status') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="card">
        <div class="card-body">
            <div class="row">
                @foreach($partners as $item)
                <div class="col-lg-2">
                    <div class="card-body">
                        <div class="card">
                            <div class="feature-icon">
                                <img src="{{ asset('theme/images/partner/'.$item->image) }}" class="img-thumbnail"  height="180"
                                    alt="{{ $item->partner }}">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->partner }}</h5>
                                <p class="card-text">{{ $item->description }}</p>
        
                                <div class="d-flex justify-content-center mt-2">
                                    <a href="{{ url('/admin_partner/'.$item->id.'/edit') }}" class="btn btn-sm btn-primary m-1">Edit</a>
                                    <a href="{{ url('/admin_partner/destroy/'.$item->id) }}" class="btn btn-sm btn-danger m-1">Hapus</a>
                                </div>
        
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
        
            </div>
        </div>
    </div>
    


</x-admin-layout>